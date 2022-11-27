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
define( 'DB_NAME', 'cohort_two_wp' );

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
define( 'AUTH_KEY',         'WKJDw*i}0lFTp)+J_n|0yO$j6GI{yxk4[*9L35VIheYehVRuV$c`.]~7TYB@@s:b' );
define( 'SECURE_AUTH_KEY',  'tPRFSlg::&fQ`fV(GJJOeZw!|:Av]#HN0}1V^ i*kL(6-}y>lNsUccyNECvyJn-u' );
define( 'LOGGED_IN_KEY',    '%q 6GV>/o)u,2;<o|l.clHOLL/+$1c5KG&`O5e{,?d^KQ!|pc 9{7nd!|dFLRn/n' );
define( 'NONCE_KEY',        ')9Yr0vVEGX+LCp6+qS}Jb~1,|RoM6Ap+Gq2y)xoG)i{Vtw5iMkYp23u*lN:b*G%G' );
define( 'AUTH_SALT',        'jMm{y3zHz)WSpgP@RT,#|8qV&@A2u8U@e+aUr{-;3P^`Ho5B}ES}5PlNa[osEf}D' );
define( 'SECURE_AUTH_SALT', 'M@l^Ew)rP#:=z`xRdQ Arz+lz@Dxzpea|=/5HU#chSTdr^})?H<j >!gztl&~(<Y' );
define( 'LOGGED_IN_SALT',   '{v)B@dhHFO$XFQWs&f|0vD,)%T{?*_}&D]fDuvCnP_)#%<pr_*h+L3nyq(kQ~CNb' );
define( 'NONCE_SALT',       '4>6TBz_Vg%ZGP:(CUoy$A%qX!A;:^.n R9XyA*_nG8sHHnD3xR$>ZhDbEUzo ;l0' );

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
