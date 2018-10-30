<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'contactform_plugin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd3^,&&QM9t-Q,Q6DJccHQTN.}7tyq,`Dd^7g+F@AVAt pXavh`#yFm20}1EgvY1Y');
define('SECURE_AUTH_KEY',  '-8^E-zm/VU5fm_vS9yOrGuzpjkq`z|BcE[2Q=hr67Mh$;AKxKRAT$fxVY!jUL20f');
define('LOGGED_IN_KEY',    '}KiY~gTAR_T00WZz-@=(L(.|C68Ol/TlGWD@06s5L;Dayk>b-WnN5qSO2LC++/Dc');
define('NONCE_KEY',        '?gTb .NtOXsmJ4R16f}pNI=vzzL0.}zg@%g$+[pp?-g4EnR624xRv)J>BND~pIr%');
define('AUTH_SALT',        'l07OI!:h8vqZT19Vvq=6.uJ<oPC*C*vh=Q(/_0~A%Q}PAg/b;^^o> ~oebR(2;?e');
define('SECURE_AUTH_SALT', 'l.tc&9Bl<eT55R l0E4.s7*sIp#v2^MyQ++$Rh2}zry8$<g|A!5yJp2GbRUvD$]z');
define('LOGGED_IN_SALT',   'ySJ7b:Bt4[p#@Sr_!RW,?B~Z<x$0QNNe9dKwB~m!B ,LcnDHHv]]=y>|lkzmB)7L');
define('NONCE_SALT',       'vns{_2(MG=8j2q g_*$gUnpUm~o8FJ;2>D)=C,dpp&aB7d<KYpm]<s*sURJzo2]n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
