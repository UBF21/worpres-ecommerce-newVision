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
define( 'DB_NAME', 'newvision' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '~bN>}$%Jx[H0M5W-A}!c W)he:QUPd5W_~CL}AWJd,@u.2_ma,ui{69sjKg:~9%>' );
define( 'SECURE_AUTH_KEY',  '|,1[>B!wi0K:Tb|,aVAgBy =g6O-iT9Jjp#2Qo;c<6srb_cFYO8y`]DVpl4INnEp' );
define( 'LOGGED_IN_KEY',    '902*mE[wtBP`$t+G$hb~@~)-Z.|1`f2HxEmS$`BwSrU-@Hx}5m!M6DopOF0Bk_Ec' );
define( 'NONCE_KEY',        'vy*#3YFb+;/jnT>+E#(2ZI7hd0F|y#yI/d99bOpuZKZizj|=$>yFn/N  %:78S )' );
define( 'AUTH_SALT',        ';fiT7fUW_tq!X{Z[8P=AyA5sjttjmU<zow!4(Tr,F((X(oMLj]/<z((!L!|b6D[/' );
define( 'SECURE_AUTH_SALT', 'fBAF!71zTkulD2&5!i}Q@ySE7sXWP62P<5[l6ct30gi&ZW;t+?l-T7%Q[_FRKUR`' );
define( 'LOGGED_IN_SALT',   'Z~TMOWK0BI^7<#KRGXE:vN1ln>wJL21IVrzvOn+&F75)Oh6es;1<]<Mwiv]J*=B3' );
define( 'NONCE_SALT',       '8Hr;uvLQ]j`.Mx_Zb1r0v7IV#WSP5q#d|?$-oE}-OB}r%S!P%T[0x5OM(c_ aP?g' );

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
