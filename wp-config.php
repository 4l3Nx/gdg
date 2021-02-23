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
define('AUTH_KEY',         '+g6CdmDddEqdDaIRNUEV+yDAD0y1CkPv9C9ydYZJRJBEZcAE3J1S6NgI0xOu64bANNmPULqAwasArUDfUx96MQ==');
define('SECURE_AUTH_KEY',  '/O+SyvWIlRm8hpqVqkcdtXsHzL16PgAOQwLkHvBStDyuUeg/MKcy1UZSRNcPRGUVZ5Ap0BnyVnbI8iKh2DLsUg==');
define('LOGGED_IN_KEY',    'qPo4KpjqWB2cz25/woAQx/k6EcYHolcWXXh8LckcH5r8cypUxK15VqzBisc+28+nKXXOt+rJKlEO+4JrrD7P2A==');
define('NONCE_KEY',        'rQ1PYMTK/zLD/2JOj9qK9hGozAQENoK/LKBfKuK/7n67yjnpsJDAsNgCmHsVuOGq0ixqsJU/A/aZmm3z5gJajw==');
define('AUTH_SALT',        'vU1Tvgq9n4GzDWSKcK+DAGjxoQL9aX/s3bONU/HrzlcejuEuQATb/YjeESQaGsJ/hAyiMrAZHtnoHv9zxR+uwA==');
define('SECURE_AUTH_SALT', 'x0EkfNg1kMS91msTcdTru3uRsgXYBRjgr8FYc8om1U6cR7ljKwnJRtfmHfqtNQ4mGmDbC80HqzFa6pk+8vwzBQ==');
define('LOGGED_IN_SALT',   'nlPihGm5WG1P7hXCzAQvwC7mlsVs5fiC1VXFt2x17kwyMkuanS5SmIc3uRtnbZJIntqj4HHBgOFXWzKWgTy9Jw==');
define('NONCE_SALT',       'cNxHpCNUGQ5Lbh9yce50iZ0Y3DvlXyynTDaYNsNBCrP5OleTx+NreYjx/thU5n0ulA27j1L6gmFfPS3pf7IfYg==');

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
