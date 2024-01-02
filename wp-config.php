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
define( 'DB_NAME', 'derivcok_wp889' );

/** Database username */
define( 'DB_USER', 'derivcok_wp889' );

/** Database password */
define( 'DB_PASSWORD', 'tpY-5vS-O@7(]A0G' );

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
define( 'AUTH_KEY',         'vbazm0fjcbmasciuwryo9whlfvozckb32fx4jj4uukmszf1zocult2zntvsw2sfz' );
define( 'SECURE_AUTH_KEY',  'bt3rwdyrnbnkkn7hahqxhg3vylxhuaaesg0ntcngnfdw7mb64y1uxwpkt3sbuntn' );
define( 'LOGGED_IN_KEY',    'cf7hg95ysj7zfunorwki0kya0yinbv3n5nghn9yexewjxy2avr8tbwttc06tstdz' );
define( 'NONCE_KEY',        '2abyf7ujhjkk2oqwuy1ulwvlqw2gosz9ingnmtf3gfl1lzahvnz0nygcwn6kthis' );
define( 'AUTH_SALT',        't743wmwc64ol1icbmjocm0uz99zcgnb9cjspt3cua9fqhzlk0yma0bdcqx0wx2kx' );
define( 'SECURE_AUTH_SALT', '28n7hjg0y2p4etkfbrwhep9hk0raybvrvmxepgmyrfuz0lsryffzn33tbvo84ovr' );
define( 'LOGGED_IN_SALT',   'hyltwzbnawg6khowvejhyeyfjzjb5i3jrdvkbw9otudnknr8bxfmrpvofwdcjxk2' );
define( 'NONCE_SALT',       'tnnqzquuld3bg3spkmhn0vf0yozx5acnsfcwgiqrs8wyemofmupptgbdybt22wvg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpws_';

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
