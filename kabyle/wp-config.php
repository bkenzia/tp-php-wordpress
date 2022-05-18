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
define( 'DB_NAME', 'kabyle' );

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
define( 'AUTH_KEY',         '9Cz1EVRbcf_C;3X`@+KWgG{8pIFj4cDqXmdA8$3N`8/cO^EP t9I n_L1Cb9H~x^' );
define( 'SECURE_AUTH_KEY',  '=t.R:w9GUh0j; A0aH0tXq=B2ntK%wrn,GgvgOv?^4JZ?d<j(y0U,&V09^0-a;Gi' );
define( 'LOGGED_IN_KEY',    '==?1M#xkKmK8$8d;cq1dO#?]y:x/k!>$3W&.OOROj-<*jn(be*]Ty[*p[@]}mjE$' );
define( 'NONCE_KEY',        ',.q/z{KbJ%n%r &<Dk9^f?mwiL7KxV1QnNC<8rDplpjOO@| 2hhvDnAh+/+cG bo' );
define( 'AUTH_SALT',        '&&9M0l0Zo;e6/MbZfS1x/!%5=s79%zJg ol_d5s9n+@32W rqx(GCSx&g]I6((LK' );
define( 'SECURE_AUTH_SALT', 'kGBTImQzq/5o,UE^gcdTN6JYWUF(:U:M,l`=R3cL?bm$8`F)Pd/mWcMq+b,0_+8*' );
define( 'LOGGED_IN_SALT',   'k8fRp9}4)&qls=HjLm5+bV-.c T}kuPw,nIl--7:OSU~yWw;yp*NW{rw`xOfVR]o' );
define( 'NONCE_SALT',       ']D%j[6@R(*5hF3$q_ijnPH`_Kv3jg[sXo=}K?E|^RW.h$c,t)?iR f$DQ(`J7@6r' );

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
