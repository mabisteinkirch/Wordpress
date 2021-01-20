<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'cursowp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NL0l:uAqq+/<q+,l&bZ-LUQZe.LQssAbrclQiRfh)eYn3t~jDR1&RCXE:}!/;*qG' );
define( 'SECURE_AUTH_KEY',  '# #xmtM(4a3ImUB?zNQG+2-.v[5S{KAo/>52V[,I)MDQiu*3dt1z5.}l?4,?&snk' );
define( 'LOGGED_IN_KEY',    '|&uRX+s4(}{)=p]_rQ.tRU>,.;?ovF9]@oRxjcj>=zvWWp4we^~7qK,9f95pnHi2' );
define( 'NONCE_KEY',        'ebm)@`.Z/qZLU~0Q7GJ)wdTR@beiB-GBC/QOdz# u54+6QoUQ4;CGY gmpjg3oS)' );
define( 'AUTH_SALT',        'U;{AM vkR;|55*vr^ 260.zZzp!#p >C-H&fU:g!cl5^CjGA]0W8%3vCiH(vIQ_[' );
define( 'SECURE_AUTH_SALT', 'G]&yc&w /~D3o?C|M<l0-=##gB:CU}/6._&Z73H,q=^exp3J`!yg404=wJ8<}6J}' );
define( 'LOGGED_IN_SALT',   '*_^k2B>Fc4@=)G]8Z@0kZ8Y0yY9J.M}vd<5EI{I7AzH_lndfxW<YX*Zrm.cUh0dq' );
define( 'NONCE_SALT',       'N>vSi!#TCIH[~+TqeM}#_|./R9ecX@,=- c>pGg$({PASLcLnr-!Sg{7=2&^6Qz^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
