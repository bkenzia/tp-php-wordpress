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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jardin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'u]IqBG6}o0 ^2wb]%%Aqx.O?x]THlHHQ-rKfig@j 62Af 1h<n?dhuF^bg;ER^-3' );
define( 'SECURE_AUTH_KEY',  ';/WqLB8Ok[Xz}k)7y0^;Wio}l-/5&H]u;Ya^6Ugt{23]u7`P(|rGe<:DE2^}gEp>' );
define( 'LOGGED_IN_KEY',    'XoC$G?C?~o7 C3:!1@0-myf.RGd)Ncqr]#EB1$;t=f1druvM)z?^$$svDXH:@1Gu' );
define( 'NONCE_KEY',        'x*O8|%g#8z_DTalT@IR~9nLk9 -$yLEg_:cb%5=_nZJ)x+a,niF{QZo/a2P>Do`q' );
define( 'AUTH_SALT',        '`DP YS=.`i3bp*+&!-%:O^8Umq/L?w9AISyaH27*mXB-5+ZpsJ[-V9>O-kWdW,8K' );
define( 'SECURE_AUTH_SALT', 'D=(<,_ugvhlYZ&]zPAufB(&V5M5Vm5;UEB_XSlx/C<`c5#v)Yr^=Rzl)~(rE5ACl' );
define( 'LOGGED_IN_SALT',   '&6<if)>V#e+f%D6V@MzYVsaa%XU]q[fO4e^zQZ8*s4hdr nf6~:vLZl=s[B~rA)]' );
define( 'NONCE_SALT',       'JXw3!njQ;;0&M8V<|{]eBWu1b>P:!11XLEeQCc]BD|QzvA`^}l3DF ivj@aE>fel' );

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
