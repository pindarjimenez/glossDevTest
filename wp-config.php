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
define( 'DB_NAME', 'wp-gloss' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Jmbx0X3XlXP8ywyWXO2x4JeNRcqm9ZE9H5LiggLRQt74eGbWfQnvZXiuP0PdeEA7' );
define( 'SECURE_AUTH_KEY',  'YVdhJ1P7gzqCb5y0dKpiwExKJ1N5QQ7eF0Mui912f06sOpvXPHGQgviEOmibRo82' );
define( 'LOGGED_IN_KEY',    '2ucBVbzZRfFxcj0CLeuP7ljyBZthQuzY0jzzXn6tEFWqUyzfMs7k4T0HkY3pnMkb' );
define( 'NONCE_KEY',        'coydIWGIGxtQiqHz8lMPhwrN9vhPEWGDhpbIcmVo4CTGFK92uB7HuIMaPjfMD56Q' );
define( 'AUTH_SALT',        'JpFATP5K64BHRXOoqV0U4j4suxFJrC0gXQ3yNGTEtvzd1ml8v7fjXxYw2qiRsj7q' );
define( 'SECURE_AUTH_SALT', 'bM6PhpLmnfWmT3rYQIqfyltoxivujThqOjtlB9uFUGcCwrOYET6YCDMaIE6mT7kK' );
define( 'LOGGED_IN_SALT',   'NheqEeG3WKg1MdgFvwsqMLQCpJe9tbKeKdWInh3hlDqS7lDpuWa1Ox3BE4ZNLwvc' );
define( 'NONCE_SALT',       'zW5m2hOKMvwDvuetpmfsJxa87RSFTuyFJxqG98yuNngZM5Rs1evqAgKNNBYc5xBO' );

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
