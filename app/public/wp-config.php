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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$$FqT_oZoICCC|Xqn0?eE-!%/(0u[t.}}l9s]}}EJ.zS{j17,~ )`BAuo/fnyu H' );
define( 'SECURE_AUTH_KEY',   ']F/C),:ymVrribgi1G&IAa_fvqn6N*8(%PO]57(}Ob)37Vs#j5Zn7/eOqBAm~gfX' );
define( 'LOGGED_IN_KEY',     'P-2&W=!S|yt<,adqV.;bGqj6s`q$Xc^4<$H=y%r14xKh9x7?G./7mT2VjC:vUw.4' );
define( 'NONCE_KEY',         '&w_`M+vW D0hMJF]Ej-3>]eWRj,w3&$6{rlNedI*SV6x~W CrS7ua kPw?{?4[J;' );
define( 'AUTH_SALT',         '41);Ex_SCu7-p;MITf#qbOQ/[$+bfcUmCR+|nQ4EE4D!<7u7r-{R#pd&$js4yUQe' );
define( 'SECURE_AUTH_SALT',  ')[ji0u:xsI-n^[rR!~YTV);HFq^^{la|GVw64iw|`fb1n*cEJ`Tu5u}HL6L@x2OP' );
define( 'LOGGED_IN_SALT',    '=R4i[KpHw_m*YxjCiW]~QOd:qGl3oD!}.4>D4caW@lT8o8~t>){l !-Vy#@8%bLX' );
define( 'NONCE_SALT',        '7t1Pp&>rhC{muwR8A{hHo/;]n.@TW~-dADm}.;{ Q38_fB+/<>i7t|b[Zuy{M(+H' );
define( 'WP_CACHE_KEY_SALT', 'I )/nh]lHb)K3<u{A>b]e(_ Oc9hwc(Y{S;Thli*i!{7/wSlHa<XS]J0ZQUk}n5_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
