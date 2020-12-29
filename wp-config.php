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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WfCNuXKDkrHwnR/Upy4rUIPX+rRsdarzid/xEqW96EDqx719vznufkZnXncEpJasUEm8Ero9aQ0cV6g0nafJ7A==');
define('SECURE_AUTH_KEY',  'WX6fpIyENvbZ1Y+R0dO4uZp3XPnPZj/FKDtr72e8GOcoALXKqiYxSrdGkSpLrvIHkxPyyd7dAgv+oAViEWamcg==');
define('LOGGED_IN_KEY',    'S2UYQ0eG244KW/5oDUNbKQQlcWQlky54qZ6f6iU3YPy+KJqbpNZNvx1wGm7Tj/YjHMVOOC/nSSNl9ntWD/+o3Q==');
define('NONCE_KEY',        'taCE+z2JOBePCdPDmWpOLT4j3gMUr7W45ffVDew4a+CBPRAxXAuIBbF0wh+Nls9afY66Ja+z+dFy2kC+HVfa1Q==');
define('AUTH_SALT',        '/Jq/xfn/tPa/obsJvC0ZzkPN6UwIZaxM3XjzzyJH1qOsU90/oK7LXYq4DRIfV1O5B+HsRzXBlEeXBU6byeDFtw==');
define('SECURE_AUTH_SALT', 'UypQ7pPs+2u+xW2NKF72/hSIhNADuHQoVt7nII7v1rM14pRKElm1fPzkXRQu8G9KXuCRZG2d8f3b515b5Xem8A==');
define('LOGGED_IN_SALT',   'ZFQyHjUHh4w/cOP0xIT26tzMtsqj1Mxjhd3YCHGVsG/+51aaTwmKxX28e7EaiX3iZflYFsYV6GhXnp0vdQ2yJA==');
define('NONCE_SALT',       '07B3jqqpzTcQ7w9h3p5s42hOC+L+jHwcL1NVvW5b2YrALg+ma5XF3XRDXucy0PfDMfTvGIm6u9pCkrj/1tA8lQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
