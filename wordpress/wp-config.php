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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'mAFPwk72JnBo`9c$1?{Y`.SNARV6M2=]z5J,o49=hT0&=<#_:9^5fCb$aw, 6!:-' );
define( 'SECURE_AUTH_KEY',  '#-g,d$+8f|G65H)8f00P-@1QRLxSWCV+nQhx`+|M@y0;|< $Bhb!BN3j>&[K6xzF' );
define( 'LOGGED_IN_KEY',    '{L]/9/YuS!rjr9m122D~0,+[p{[H{g(:;F1#Og-@8iM^]fz4T$;aN$X$~geu iqW' );
define( 'NONCE_KEY',        'h=eV3ZjS`94G}Z27eh<0AL^hD_r5dIln3Ju$mPdzdJXF-%Poh{EfI5_`t6u}p$MQ' );
define( 'AUTH_SALT',        'Vr_EClP,}{e*oG#Q`m5hU]gR;A3.X@5)X>PG#^pY-O=WiG>_ouyS3TtFy:IrND3K' );
define( 'SECURE_AUTH_SALT', 'c{|s^C6@VYuTkq|qq>an.2wtd>LeQwJcg]^3ak3~G(|D[_d,fbX#->v&T/-<Qlrd' );
define( 'LOGGED_IN_SALT',   '{S!ixj@l0UvnPhLq6Bt|>fm#2y5mW-I@k}ELfq)W0#dnmLyc~cVZceE$Wr>H{tWI' );
define( 'NONCE_SALT',       'x+|,|0h2fXOYvST+]Nh <dS>NcR}Ie0 E:MvXXVhJJ=6}o;3&4%:>: w-Nkmfj|0' );

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
