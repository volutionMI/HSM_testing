<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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
define('DB_NAME', 'hsm_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '48-R5_MV9*d05hi4W5bH!]*fYeD15Bj_&s112-4CUN6&#E62687mU)@h;0aG~pkq');
define('SECURE_AUTH_KEY', '!]x+_B:P34963wl(iD0_t:5ML5o12JG*[n@Q-Z3r;]xre)W3*e:moe*:HmL!5+Y;');
define('LOGGED_IN_KEY', '!rpogs1ME)%aC@F88E(MC!:J[H2@_[PiiMvX6k+MK:abm~F-tf7!_@D_WB_ag6Sr');
define('NONCE_KEY', '(5ki9k&6uji0ixkA2_0A87VgJ~1-Z~+[*|X0axG:N1F)w1:/vD~(V54X|[6G:sc9');
define('AUTH_SALT', 'NP46s8#+0C+iVJb~h_!x2[94M+N/_~]Qx1;B)lFRjAJ#1p5~bBE5IFw:s)4bP5UC');
define('SECURE_AUTH_SALT', '*XpW5NC:O0624F|P#VELx39230@uk3PRie@A)+lJ#l8&y6572t1%CCx~wtFj1MDF');
define('LOGGED_IN_SALT', 'D%Y8O/E:5ry/|-:A%@9[B8ICX06biia!9DAT4dhIkC+8)VTw6f7uo9Wrr/lwV%[&');
define('NONCE_SALT', 'd7Oc!7!jqJ+U3+1)0Nm7Z7-0JeM(F#Hqj10|PH641c-I];xM!5)#59DPu/3iCa3[');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Ro7sd2_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
