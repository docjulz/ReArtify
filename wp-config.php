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
define( 'DB_NAME', 'Amalia-Art-Shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'kJcfS0xFSyflaSKkEgz0pGu61uABk4z9SNXsC1BwTqHDIzD3A6LtOEncEhiHW9QO' );
define( 'SECURE_AUTH_KEY',  'm9DgWMnxyzNRmUx51ocOUnbdJrqPoXqMA67zQt1rwT3SonVICxN6etEUtYTZFdLE' );
define( 'LOGGED_IN_KEY',    'J7TNEQvZ7O7RolqIUZdHkJwmWwSUVBhbDaYQLemO6Rr8j7PSX0cIuGta9AtGY7zi' );
define( 'NONCE_KEY',        'czbxyPa6P2AFIr2d0NTHcHC6E1FIPR8MVHsFSNjyFUp6u9mo7ixMuZmvyuVKlaxP' );
define( 'AUTH_SALT',        '7Dfg3TD8iqzNPASsIijS8TYNIpnD5WjvZ3NIvvWZiWF3vSaBolYvgmTMos4SklUa' );
define( 'SECURE_AUTH_SALT', 'ewHtitZC9pi7khn5qECD4dqvVMzAusakWMynVNWgVuzZrX6DelWxpheyXrvx8BZT' );
define( 'LOGGED_IN_SALT',   'q5QPnl3x5IOBnpkW3O10ih5UtpjIOmmAJtJ58XjMyJw6cAMUX3cwnUX31icMhiQR' );
define( 'NONCE_SALT',       'JVlt3OsjeEUtvpeisBD98P5KHAbaX6eK08HPUTtMdqytCgXFq94qZ1rV3SnbbSfm' );

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
