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
define('AUTH_KEY',         'mc4lS1592OwP4HX/D0XqN6jrxBuAUXke8st8iMJNPeVVvCq9fncbl8mMTk8hF6RfLFafKEZiTFmS9dUxpdIjhQ==');
define('SECURE_AUTH_KEY',  'GkvpnFus9mrhI642uHKm/xWdPWhPQ9h80Vb6+8wpIkiYHTnQo9vnyYhICDCrOcoEU/f/crx5tfQecfTXwFKHFA==');
define('LOGGED_IN_KEY',    'rWVj3C4ZRDov+9EH8D5ojF7wjtx3rDoCEKKzWlnNIRkvuqpg0u6vSYCnAdA/tBZRL0Zj+2mRHiuGPcJYUvnIRA==');
define('NONCE_KEY',        'GFFZ2zwwldKAZ61n+PhCO98QeNL71KsqCm0U/kxtRLZE4BCBmjwiGeWdT/zDJQTKQiNbOd4oDSZ5OTR1MFeYUQ==');
define('AUTH_SALT',        'KtrYnQl2PGPjyOpRAOrc8+WAqX/jYKonQL7ZC3+kulniWm10/TGztFfKkvXswz6wj3oiUVg7S+LPypgKJ7hdwg==');
define('SECURE_AUTH_SALT', '90+9xB/CDbtVxEriw+KQvqFyX9F9cQ4yT9YIsySMYeIEii8CZOQ/7cUjI5E72kgCvJL63OP0LYIZ7MI+1hs94Q==');
define('LOGGED_IN_SALT',   'G4ukTp96LvwOrrZBp5K2TKZ10JJP2Cg3j7cz9rM3rcMtEMsreD7O//CmviNDCSgG1ItTnJviQ+biR0wNKEQayw==');
define('NONCE_SALT',       'qjPx7ePhJpv1c94WTYyyGYcglOhb5w9KHNGZBy5PIgJSfKF27Qw/GIs/vTXMo++439tXg6pfKnL3JFGd11sJww==');

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
