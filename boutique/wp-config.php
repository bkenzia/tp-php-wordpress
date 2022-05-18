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
define( 'DB_NAME', 'boutique' );

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
define( 'AUTH_KEY',         'F==,#=6<-L2ScKLuY[)Nq^/uBg@C(kS,$WbwF0}(+q{[7%sIaI81x]_j ,{Qm2C_' );
define( 'SECURE_AUTH_KEY',  'Ri;lS64uGhK?LUDs:LlR QSSqHdh[z$ITXjqy0bpW8_0_dO&sk`cb9*5wU`oimmf' );
define( 'LOGGED_IN_KEY',    'RFM+MW!i~h^N)P:+R42%|Fn<Fz4Z#JsD$I+(+=Vo-(ft/D:yDd)>((:DJb%0Kof!' );
define( 'NONCE_KEY',        '3+r= ,`<j37y@bVjDLD<2r&=t>YTq`rr@>s#9fEqK4Lfh@d.J.ofP5Y3FYDck7!L' );
define( 'AUTH_SALT',        '(}o:I%vtB:3F{1;<PF]l1x1ZbYDJR5}-6kp`CKt*<5V*J~k#GO)(yz7N+NnQ9R*f' );
define( 'SECURE_AUTH_SALT', 'W{k_A?praBkoNJ<AK]w#CDh1Fyx/ov}!!uO>P.Hi}br=!-~${(MS#Xa/;[8eb9{#' );
define( 'LOGGED_IN_SALT',   'uvbpf718`+oS/iL=KqAXm85tXMz1T8`({t_.hzK `%&ovt+NGnCF9i<y$0eqT,u%' );
define( 'NONCE_SALT',       'kw[J)%O-=ba1Q1,(UC>lA8B92p5u1~l+9A-+Bd2mi^O-p{d_|x@1*3:AykI^2ID*' );

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
