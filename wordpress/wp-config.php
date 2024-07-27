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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_name' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '{SS{*7=Jsb<WTMBre{(A;V.{?s7B*pa3hzyG|iGn; `1K%[bth1!%l!Pf] xe6D ' );
define( 'SECURE_AUTH_KEY',  'bp>57>Yt,dyVemn$HI*[=:$%d~Zb`sX3eO</0CV!VP@+Rex,zF Z$;kbXD,&oJW-' );
define( 'LOGGED_IN_KEY',    'k&#HH@-!-mQS##qD82pj[[q  QyhOv)c|:<y%^p6fqR% yb^&k;cW^AAp `iG8A ' );
define( 'NONCE_KEY',        '&ieEx.`#Ec0bQaLOtl_BEeN:q,WDM&Fcl:GZ-8s]o8|[M$1p<FFnz6>gyh>%IeRy' );
define( 'AUTH_SALT',        'fzH%x5M_.+(gq9].@z28hy/hMSz-i{>jjxY )Jmx<~ZQ$G4>eR$D,[:#>9X7U~NW' );
define( 'SECURE_AUTH_SALT', 'g}>i/n}/@D2_$d%{8aV1:NPyFXk-)p&f`B*wx?hS.6m/;,UXHVeu1#7Bd~6y@w#T' );
define( 'LOGGED_IN_SALT',   '4Tq!};g?!MA2_aP-vHaWmYH yQ+vGgTsz>{4o^V0~P,_+[:roUD|oav~(P=]16D5' );
define( 'NONCE_SALT',       'nZ{+nOKy/uqG&vH?q#8?gPcR!Ze:q-)-ZG$oN)y%}sZst%6:~`aS+l=}wx4uO^yN' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
