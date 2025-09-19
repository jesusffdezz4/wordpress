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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

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
define( 'AUTH_KEY',         '{jS@~7hB2IKUm,2;c1W<nc#&8xi5q8[M`U:t&Adr1FQvL$Q5MYKw_`y)u7FmZ$y4' );
define( 'SECURE_AUTH_KEY',  '@ZeCr^fKN[7d~4U2nC<X$vb>_-gb~u];L CMNG_l!XVabJteaOdJmH[n_-`U(FG~' );
define( 'LOGGED_IN_KEY',    'RN<;GcVn@<D4E6XTk,Wix*}2]LQnjp&`jPb8OO^YXsT} )sY$TZ%uOuw`RtkT8m~' );
define( 'NONCE_KEY',        'Bg5>kObg55nd&MfVl_E#g{27n:i}->c<<};,WJy[=/_L7/8mkE%+HO+[K7O?B[Jk' );
define( 'AUTH_SALT',        'CXmcGuO+EsI$iZcdEn<zN~0kI`JmL]edt8JiEzodK$<`c4djCxbFb7lc41b2kkou' );
define( 'SECURE_AUTH_SALT', 'M4^g9Y~d)ksAIqy|hRKt@{TE;+W%O$vL&|^A<w|~r(;Ma|HxrrtHx*C|acqWMhkL' );
define( 'LOGGED_IN_SALT',   'JV@nTxtw>aViaa_O[QDc>1C0{jy oQC}lfvEOT<,VwYqL%+7Q5U{m`^Cz`Xz4zeq' );
define( 'NONCE_SALT',       'jt|>9Jwdi}sQLrf;:xVS&+P,k0^W=r>3N>t39U{`wyZqcK +E4RWBPkA3KeAGih>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define('FS_METHOD' , 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
