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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'fLXfcnpywZ/7/KXl3nxrKIi4cgCByIAk8oTd1BFaF+WG2xdBdYjmreiL3XkrUWrGBK37lC5YWLi2CTZChI5DVw==');
define('SECURE_AUTH_KEY',  'XExJ2gpRzI3NRYogY3XJvFF+baKoqeOstJJmAjHBRAsYRNd/NTLSsSMHRJPAoTYMROiQEokjPYlKbdElkLLcZw==');
define('LOGGED_IN_KEY',    '1+acu30xhsYwDHW2+dxvUgiQKGyb8RrQrmc9Gt8mN17l1XwcBrdCqj5Mlc+NL+FFsF0biOjrX7+Uh+54B8tYzg==');
define('NONCE_KEY',        'E+DS6GzPuNELkiQkrzFEAhTAsObTvOmnv2UwK3s7MMxgHEqvcuVXmUFg+yuNRClfRJJjQ1NJsgiY7uEainIcUw==');
define('AUTH_SALT',        'EcD68FEiHZums1l7lG35gOQto0HbtnhDGdIsXWYa4DSRpKi33zPm/Ibj9FnA6/Nkkxy5S1lyxTrDTHlsCbK+Og==');
define('SECURE_AUTH_SALT', 'QlqfiKRPfqh3PFlxW6S5r4nqcSqI3nX8umqB6+jP9UI5UQ3N6jZUbR8sZjg51EtkKX3ZdTWpLLrIHO8MvW4dAg==');
define('LOGGED_IN_SALT',   'gHbh71+ytqcJE4W3OypFLHzQk2X10lggPObJI3RuSGCvWK4XZErKFDb+agSTSh3hMyzJHb1XrGPqbxryK63UEg==');
define('NONCE_SALT',       'Qlf07LWXVpbj/Fyj/GJ3Z0cPResLunEjJx1eNuocNmcH7eGq5jAzjJPhmZV4A1kEpi3dw9G7h7Ap4WYr8SL7lQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
