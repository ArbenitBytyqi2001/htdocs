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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`f3AF>NBBXV/gxr3%W`hnUL{WM}aP<TqNhjqfJ01D+,WGxRxE$kfndYffJew@?_j' );
define( 'SECURE_AUTH_KEY',  'CyPH%}dM(kv!d)1U$!1&QFoCxczm$iLy.y.!>537&@Ora2v sXO-K+r&zXOi0W>S' );
define( 'LOGGED_IN_KEY',    'G<WcQjTu:||5<QrV{lW{!RV3r_pDcu2Q}8-,YH9MH<X.p=74-G;whQzyr*oH:.qZ' );
define( 'NONCE_KEY',        'SmUkVcEqqo?96k!H=I0RXJ9;iwZ@#dYu9=IC)hHeyfhU!BjU)Lf``< d!s}GGQ( ' );
define( 'AUTH_SALT',        '3d!`Z=VGVts9DpL($.nCb.NuE2@vNO5-5CYiY#C-)v2q)GGBHg3g*+sxTu@6gGFt' );
define( 'SECURE_AUTH_SALT', '% c>;o76rw0SePb/#$oxa#yI5[:1]O{0{IVl0c:Fm,3hF^Yb9afV1EG55_BaO,[p' );
define( 'LOGGED_IN_SALT',   '7**NsRrrAj9NlmA@L$o(1cc-wvVxi_XPnuk.|V:dCP.o;BG,|}DU!DjOxh{rs_fF' );
define( 'NONCE_SALT',       '$+1n]~R$VWz2<}1h$2S|P%*?j< h.ES.Z:6t^k{ `kF12Ur;Vc14=T)P5(|$3{ne' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
