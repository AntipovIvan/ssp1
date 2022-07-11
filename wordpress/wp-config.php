<?php
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
define( 'DB_NAME', 'wptest' );

/** Database username */
define( 'DB_USER', 'wptest' );

/** Database password */
define( 'DB_PASSWORD', '771' );

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
define( 'AUTH_KEY',         'h0;9ny6eVP?<ahU1W`Y,&=@DUw~}JsQ8Zar/GLG|ui(Ybxo0`y58jbLVwx!gX<.s' );
define( 'SECURE_AUTH_KEY',  'fko]_?S8jn&T#>2jpb0Yu+0GQ=xziaHzzY7R`%#[@WRH^tV>ij1<|l9yY EcX!cE' );
define( 'LOGGED_IN_KEY',    '@WW~]/8-Uo1|[W=s:qK`0L/WNncE>/NVal pgDe.B0<54;VP86;N?-&aF&AoHEhy' );
define( 'NONCE_KEY',        'B&x>o}Qyph`C@<e+-r63Maa>G+r%RG;xVTz[0g4Uo(lXN$3YE/z#!``q=HjvlH;U' );
define( 'AUTH_SALT',        'a+!?V;x+;O6,{APS:WV:*T$Y-WqS-RT_j(vJ[cT#$tN6)G/!z5X,(>{Qa[nT])Mm' );
define( 'SECURE_AUTH_SALT', ':Q}QBkZj|i7m#l0*ps7^*{@qCXZ]|I@;3~A7je%2(*T0Yd`~W/-8TTVf.wlVnQvz' );
define( 'LOGGED_IN_SALT',   'JXm*coyP`tO-:J<xS[UnyLzI&PSv35CavxW|#[8jc-55gSgE!eDDta:2Ubwb8&:^' );
define( 'NONCE_SALT',       'h@#]7l~|M3en/H!Z|&H4DMsD1.tc$wTw$fG~~tY/UP=S$<CIFvmMdNp>F4j<{|>S' );

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
