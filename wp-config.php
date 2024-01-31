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
define( 'DB_NAME', 'thenoirdetective' );

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
define( 'AUTH_KEY',         'lu{bL@<40K7q4xdKhStFP.QQ;BancDfG*[|[tWC`X@L]oG712%EM@n9+XuQ^)S!>' );
define( 'SECURE_AUTH_KEY',  ' vl=K[$`v|DG<R8CO7<7HWs$4ur5H<i-&h0`i#9?>nMe.U6 FQ6x3y{n) 2/7=?q' );
define( 'LOGGED_IN_KEY',    ' IoYPriD<Ab?&[i+sUDRgG|Bx4eV`#bI*nwRyTKja`> SIJFi]efC`#!~y^!>P,^' );
define( 'NONCE_KEY',        'nr:og^jT,Csz4Gu{H}UDT3}$~|?Xb1`2(x#ArVqNYEG1]ogexT8r2VvJF0C~f_$=' );
define( 'AUTH_SALT',        'd|OfYTrPxCV%lJhX.%Z}D1b 9z[Ojb!<M$^&:4XC?q:Th;k09;X[Z0+%@GJ:3l*t' );
define( 'SECURE_AUTH_SALT', 'LbZ5X=3,_$ H0C.*op7KU?)ECG[}SSd?Ym!jUkU2H[{,I7^R^WfQk{&#$bYQd25q' );
define( 'LOGGED_IN_SALT',   '#&cO`()L/uw0wH=52`(`mIWLpbMRYR[c=YfA6FAjjvWa#[S!C|+5yrKk8RnxRBkz' );
define( 'NONCE_SALT',       'hR[YgCxx6[FI]0oYVBFXhdPr&Xy+%)fl^|pPYIcM;l`l]d`}>0}J5CI!D[<WD??]' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
