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
define( 'DB_NAME', 'blog-wordpress2' );

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
define( 'AUTH_KEY',         '5LO4O;_lbSd;ud$(F)I4qEe.g/n&Yh!1/8rKAAit?G=Na&U kJb3{Gy^}:xJHgj3' );
define( 'SECURE_AUTH_KEY',  '|~rJXoDMe6tupGFG~>Lo;u-9V-yNxmhezpQ*S8xUW1:y`rg+_?)=[SJ+)7VshY*U' );
define( 'LOGGED_IN_KEY',    ']))ps4k>y=n- G2 OHyr|P1!pJLYAnG#45:k<uH6|o8#1o24,IN`lb;M0Sn,Unh/' );
define( 'NONCE_KEY',        'j)E18WuX5]a}VLXL*]iT[+NaNz|nb1kq9e:<?5cpUY#%>J!ar6cwK%=OFLoUzj+#' );
define( 'AUTH_SALT',        'o%jF3es_Ls=ZfISB=P%4[:!+y+psuc_M`;HsW*)|5I6C.p{44[A:UGx[@R~tCM97' );
define( 'SECURE_AUTH_SALT', '!3Kw|#<$UL~;ERo3Po.0yW>V2bX+v@b~qOt8WC5`aK{Td3KZv%Y8s`nQ?oYmQSh%' );
define( 'LOGGED_IN_SALT',   '9etw)$y>Z+yU+oCv(+>MpgPV[T5Jk}G.)kGe46skTD!Zl;7fe|&OX}.2`.edndFf' );
define( 'NONCE_SALT',       '}pbllRhVsIfswYH*E/XA%4|!RT.,K*T/^gFb+ak~}5OFZs1sxd0Ai_>uMhE_.u=^' );

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
