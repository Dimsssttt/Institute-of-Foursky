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
define( 'DB_NAME', 'Institute-of-Foursky' );

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
define( 'AUTH_KEY',         'tLQrsxOfTGUybs6KxguKJ9Rzbws1E5EObNw36ADsbI5hAhsvGppH8EFVR8PmX6Dp' );
define( 'SECURE_AUTH_KEY',  'dCv1le8GAaorVjU6up8ScUR7VWo6InDdQTeyCX1taMxdMNb0mgIziReMuFmaEBvu' );
define( 'LOGGED_IN_KEY',    'V6Ue5zAbwYTFfX3Pz8tNQQqnaSz5O1zHSYd47kZw64Oid61R76CLn86W3WrUGgDQ' );
define( 'NONCE_KEY',        'Ec6e531SzN76vBAuVTXcyFvPqTGDq6ANyEK6yTwaeD7dEMV4QsLzZa389J1wCkRv' );
define( 'AUTH_SALT',        'RuRQWrXt58tUNKUbD9SRexkcGnkoirz6p3vm2lM1g4oI6MNvz4NzQPWhrLPbCHx1' );
define( 'SECURE_AUTH_SALT', 'BSsEAQeEtAvRbCdu1idOoga8Maf1ReUHhFJocMkTkyxVBMzZf6QDcEytW0biglNc' );
define( 'LOGGED_IN_SALT',   'b8l7e1iLCNAPIomG8qLVPC4L2igJa2TG6SWQpvUbog5h3WXSfSFlZFITcnqsuo7f' );
define( 'NONCE_SALT',       'EvV2xS1jPmwlwh6o2UpIZwKAhuaB0vRz3BOJoqx8m8R5tANst68WYC6yC3o01pvF' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
