<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project-3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wgz6gLCEFR:0VT0U2qQIVb}CX$]EN2lhhju~02>Xb*nJ)UNoA4>R%]dt&#vMfAQn' );
define( 'SECURE_AUTH_KEY',  'RUyDCA|vu`DP|iMaK;h3iu-.P~t2a##M+plFW?)a)>+_7w3D?2Rq`u5[(UsB>1Hr' );
define( 'LOGGED_IN_KEY',    '<[/]0j_{dsWJ/(eU*}Ens|V{36_w&`4JoL.V~K?( &G7XCFjbi-LtB[brOfO1xJJ' );
define( 'NONCE_KEY',        '/)*MAcHTwzBvtWv$ =4wC[bd`8)b6IEZGFx9UMLPu6yT}4@KPe~,VRhs-^JD?1I:' );
define( 'AUTH_SALT',        'PV?J0cpL-+11vvLNox<j0[CmjnGIw74O!95oA&#B_qAVWq n0C&GF*}/s&1i|2lx' );
define( 'SECURE_AUTH_SALT', ',yl&m#Wc!$0yIok#)#`mHH<h^.D|6.Wz]9M7;3~[oz/#Ads2R.9 w90fYvC`:?Dh' );
define( 'LOGGED_IN_SALT',   'zf;t vBW$Sy|.npx!)z^iP[jilx0]cfBzl&[i8]Q`o#7XALt/P}y+*7/#z%CRt:K' );
define( 'NONCE_SALT',       '-j[E]cLk/hb3%CY}6~utg a/o=&P=*tcCH2]dXT@CFe=,}^l%@8U%i[}n8n9]Qcb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
