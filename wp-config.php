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
define('AUTH_KEY',         '4QbkwzPGnyyE4KaXc0L5fjElrqT8+DMp99V6i6ouIY1RXzcgGAgjKM0UlVKF5P2Jeuv808AfTUyaPuWLs2lSVg==');
define('SECURE_AUTH_KEY',  'DKc1LbXrll9VeZYTM9Y1R0Dn56DIbqFxjCT3F3ZiZN63B1Pc/U2GDpc5ZTg51jUG0rsyrsKTCj/9IJTh/vfbMQ==');
define('LOGGED_IN_KEY',    'BTWl+eMFWh9RLR6XxHfS7Hb1r7cePcAmfZ3vBiCRahIaScdF/B298+3daUna6F7fK7vqEk7r8boyoqqiEcieIQ==');
define('NONCE_KEY',        'xNbBYcsTWmxK0WyDwSKQCAegpORWZXT2BWN02ES7C/JjRPXqursrTJ8sxZQfZi/D2eu+gwHcGoXmz5ng6hAi1g==');
define('AUTH_SALT',        '8DM1M5HWkCzig/4QTxYKMJ87V/Ww/qYmFXkAWUp2haGagT7iivYQURJWm+/Axme3RszC5h1FhjEcmaHxD9xmOg==');
define('SECURE_AUTH_SALT', '5taoOEnGSoOngMZIELS2ewbHELPxeL2tR5YzeA41OEABBnNB0SPIFaG9xmApH0Sj2JVdRebhMPyUR0gYc+lKaA==');
define('LOGGED_IN_SALT',   'dp8Ex4adP7u5evS1RJRJHYffTfhCE6KdnARX3knFGVx8LSEwzAArkJ877XM9wwtUO0MX/6WppvZZVVfxlVfE4g==');
define('NONCE_SALT',       'O7nj4XYt8yVAsm2S6W5kHTi9CusHvcTxJJWHkCGMXd79ww87Y3q9ISP96aAIF4dtetUuHAsipv/zKhwiQ4rFvQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
