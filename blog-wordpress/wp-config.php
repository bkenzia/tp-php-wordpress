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
define( 'DB_NAME', 'blog-wordpress' );

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
define( 'AUTH_KEY',         '$Dm~`RQI6{FG]C a#4k5zo)a~&fk]b%Yb}wJa7l:J$R}jfhMEY/K+BCG$l3wArjr' );
define( 'SECURE_AUTH_KEY',  'yY @VB)ip{0*iUm(3Xfe,1*/sl]11U9 n}K4g}d=VoOZ,aY@0@2Zd23l2_bvxd2-' );
define( 'LOGGED_IN_KEY',    'FA`x(ACq7=3#WQ8ls5CzFtFX:En;(qGxtn<).6{RJL_1 -!5@6,z[IgC$}<m!z}a' );
define( 'NONCE_KEY',        ',i+O`E^{p4oCIbh@Bap_#e-y`fz_!PJWs6OV0n^1eul_dx,^}%X^2Y<dS&L/VkrI' );
define( 'AUTH_SALT',        'KHC8SKO ;#TAbv^?Bp#4XC{bRZ67f:Z!&m_R3paue gFnHyQ&d5WrB>VXFP~4:|q' );
define( 'SECURE_AUTH_SALT', 'jeNn0X:~3IlF0eUr)%gLju< r]>E32IX1y{W9CwPWc%<}7$BMS%Ox1dxiCo)@u>[' );
define( 'LOGGED_IN_SALT',   '&BqzEj(9<0QXia)2(Trt|hx:.#kP=Cmk92z=SE{6utayYx5YwiWb0jp~KGT RayW' );
define( 'NONCE_SALT',       ':cZp`jA8oEK-aSIeyPO3;s6Hm_/EX2+E_]RXmA|$%m#y]=AR]/&.^?iOm2xcq@EM' );

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
