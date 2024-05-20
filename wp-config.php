<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'metro' );

/** Database username */
define( 'DB_USER', 'metro' );

/** Database password */
define( 'DB_PASSWORD', 'Metro2024' );

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
define( 'AUTH_KEY',         'Qsi6Y$M<ciHzhr<gPiG5,/ZH4,2>:]g)zkr2&?rw`qFg:EPNx3Nt:fMfX1AT4uG_' );
define( 'SECURE_AUTH_KEY',  '5+3Zht$r*0+QDh6ZVQzs#(DU1LQ>lTLgWb+kJdr9K*FFME$eGVmHWAVfEsvrt9)]' );
define( 'LOGGED_IN_KEY',    'M+QeD(BOEer0WXO!W=N2E%[;(Zu~<-3<|wg /U Bq2JWSYFlk e:dVRxYR#a^aPZ' );
define( 'NONCE_KEY',        '20[BV%6;{;*Z96,<&}9?#FVSsUh@av=lwp~3uu:hbFZgC(($gL],Mo9*_{sv+4i3' );
define( 'AUTH_SALT',        'oW rDFZVtvi1:NQ1cVi4Tgi(6@FweYYsYLe&T`n{$&y$EwH;lq|<YE8m^]5z_`tl' );
define( 'SECURE_AUTH_SALT', 'HJd^|O:n^1_,5K//MW}f2y9H3<>{1a|]r]XOwV<3+rCI<%1%_Z0EHU|JN@-5cRx)' );
define( 'LOGGED_IN_SALT',   '$r3fan.mwKbl;lI+#=)%]I91^%-4aY<{x_xo4@6UgUt/RGo.7PhM*2e2lD1vh6oj' );
define( 'NONCE_SALT',       'i;46YY|@gLuNqHU691ZaTZ_ix3o?D=Hfg:y$An=MOP~`b9YE?TNPxxDD5V3+TcEU' );

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
