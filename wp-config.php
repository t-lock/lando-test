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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '1mD3&[1-@iF[r274pA.yXL:6?d0GJ&~uhVS+&*`o)&!Bo4vC&bf}|04Qs<7?*`r(' );
define( 'SECURE_AUTH_KEY',  '7`+QI?1 Hcoa:3qf`yy-5orTC=uji?>6L&A9`Ap&U<0RZ?6ha0G868,9EOTor`D0' );
define( 'LOGGED_IN_KEY',    'D|OY~WpJL0sdv54V u.;tiNT<&Ce(UG*]io6i-GKFo?3o]7X{P0z&#,pNzEPH3v}' );
define( 'NONCE_KEY',        'N7BZzx)&~ZYU< NeejJ8>.=5aw&/8P]Z)HQwnU.1?Z2bM!,eq=jhkpnWz{M]1Xh9' );
define( 'AUTH_SALT',        'vE,,fAI&Tst|q?ZRPpIb91E9z*@F]C)Ih~/y5dlo#XXR28ZL&6HCz|l31M?:qvwh' );
define( 'SECURE_AUTH_SALT', 'P!6@L^JR)%D>0W9aQ0$FPtdd@4gr44UtDlHac1;jwZTw;+k )U0kj_lFCg5z*_gZ' );
define( 'LOGGED_IN_SALT',   ',8(,9P5nzh?bKH_,7,<(vEVB@JC(B>XU=*hW!gf]IZtccj]E=TN~7}lyNQGHrx:?' );
define( 'NONCE_SALT',       'V,#m1>uMEb`)Q5W8Wbs6RsBU&4ju{&HcEEChLeoXwBtvKvO}Sz%+T](AZ0|j,a#q' );

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
