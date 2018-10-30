<?php
/*
Plugin Name: Contact Form Plugin
Plugin URI:   https://jferdaus.github.io/plugin_dev/
Description:  Basic WordPress Plugin for Contact Form
Version:      1
Author:       Jannatul Ferdaus
Author URI:   https://jferdaus.github.io/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  contact_form

*/


if(!defined('ABSPATH')) exit ;

function contact_form_client($atts, $content){
	
	shortcode_atts(array(
	
	'email' => get_option( 'admin_email'),
	'submit' => __( 'Send Email', 'contact_form')
	
	),$atts);
	
	
	$submit = false;
	
	if(isset($_POST['contact_form_submit'])){
	
$name = $_POST['contact_form_name'];	
$email = $_POST['contact_form_email'];	
$subject = $_POST['contact_form_subject'];	
$message = $_POST['contact_form_message'];	

$submit = true ;
		
	}
	
	
	
	ob_start();
	
	?>
	
	
	<?php if($submit == true) { ?>
	
	<p id="success_msg"><?php echo "Your message has been sent successfully."; ?></p>
	
	<?php } ?>
	
<form action="" id="contact_form" method="post">
	
<p>
<label for="name">Name:</label>
<input type="text" class="contact" name="contact_form_name" value="">

</p>
	

	<p>
<label for="email">Email:</label>
<input type="email" class="contact" name="contact_form_email" value="">

</p>



<p>
<label for="subject">Subject:</label>
<input type="text" class="contact" name="contact_form_subject" value="">

</p>



<p>
<label for="message">Message:</label>
<textarea  name="contact_form_message" id="message"  cols="30" rows="5"></textarea>

</p>


<p>
<input type="submit" name="contact_form_submit" value="send">
</p>
	
	
	
	</form>

	
	<?php

	return ob_get_clean();
	
}


add_shortcode('contact_form', 'contact_form_client');




function contact_form_enqueue_scripts(){
	
	wp_enqueue_style('contact_form-style', plugins_url('assets/css/mystyle.css', __FILE__));
	
}


add_action('wp_enqueue_scripts', 'contact_form_enqueue_scripts');

