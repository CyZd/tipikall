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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tipikall');

/** MySQL database username */
define('DB_USER', 'tipikall');

/** MySQL database password */
define('DB_PASSWORD', '.d6p.Kq61S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mevostkvbjoun7nyoudtzmkapbjj4ex8jzvvwwvn0uouzgt6adpcuzmpvwcejwms');
define('SECURE_AUTH_KEY',  '3kx0cebsew9cxftpxhos6kcoit6aqisbnkifyzx9yfuntoeedugg9iklpa6mbqlu');
define('LOGGED_IN_KEY',    'euwrdzeeg057hv5km73tr27s32dndsupflnmyncplxo0m93y63qjmdkhh1v1fcuy');
define('NONCE_KEY',        'xbwytqhghn49gxlul8l9uzrf8jhrd9mingavtqyi7fzuzvnjakwot6rihedj00tu');
define('AUTH_SALT',        'q8kikyjdvoc80rmilbsj4imnapivkh7iv7z1fs6lnjorb8rzr8di2vexen5vprxd');
define('SECURE_AUTH_SALT', '7jlqmijwuflodhmzonhwt2bm1za2s4exbegosyv7e37ka88fiubhaedfm9dftyuq');
define('LOGGED_IN_SALT',   'hj0qkdwlqprtccvb1y6ef2tacgorcsp1de9rei9njudiaxvztmmn0t1ulz8bsgnw');
define('NONCE_SALT',       'd70v708gn9gnm5rnstlp1cjjljjc272in1dhqjrqeyz5catfgmbumyvnqjl6nd3l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tipikall_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '127.0.0.1');
define('PATH_CURRENT_SITE', '/tipikall/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
