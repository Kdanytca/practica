<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practica' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


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
define( 'AUTH_KEY',         'eVt-XyQo!Tj-0wwV#t<Fs16v1+bR,ub#]kH;J*GCvy_:$6xGxU x)Kc`/#amdH}k' );
define( 'SECURE_AUTH_KEY',  'sO=jzm&5&ABf9)sw7N&uS=D:hP9WL_|:/uXC3dRo~6GWcw}#kY4A1XN2F:PD,.`6' );
define( 'LOGGED_IN_KEY',    'PtJ,Vz3~b9,rCw a`&LsUgI:VTk`Au%ek;7&|$Nf_oQqv!>`+R5U_.2AYEX.@qRe' );
define( 'NONCE_KEY',        '>|*eFu3b<ND*:Ol}oDM58VR;]TkWjYWSHX8>ps09yZ lwV?|?~3B?_OZ>%<O[)Vx' );
define( 'AUTH_SALT',        'Q7Z#Ii ^Yer~i|N{:8I%9>[IwaeG5&+n38^+jYU8ResD|6wY,O*DSsJy8PK3=zK`' );
define( 'SECURE_AUTH_SALT', '0Hb6zpTQfE9t6c7k~%`BVonOlTZpzEgmy*-R~=yvk._>|U.N;F=LTAnyrrNKl:NS' );
define( 'LOGGED_IN_SALT',   'CVQA|kR_M/lyBAG9b+#c_6ej|y1~0*?R42nY>O%r-})4]_o9)Up?LrpZc]Iv]Y]u' );
define( 'NONCE_SALT',       'z:E@tHX6f9emT;2}=/TMEW_AS,pRno=+h}8aWw29[H<Gh6prf@`Qwm=UKlsxW{X=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
