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
define( 'DB_NAME', 'wptestinDB0qen0');

/** MySQL database username */
define( 'DB_USER', 'wptestinDB0qen0');

/** MySQL database password */
define( 'DB_PASSWORD', 'cambioooo');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'IMPORT_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'rFN7J0^4!}zk@kvYFcoR8J0J0C[v[z|sZg-kR8KdK1C[C[5~kw[whOZsZGS9SD[5_');
define( 'SECURE_AUTH_KEY', 'c7,B>4!!}zcNYvcJR8NZC[4@0C|s@k@kwdKlR8:KS8!:-[5~lwds~lSZGWhO5_:lS');
define( 'LOGGED_IN_KEY', '@VgNhR8K0K1C[w[-!oVh-hoVCWhO5_:D[5_lw]wdSlxdHS9S9H;-#9#t~p_taHSiS');
define( 'NONCE_KEY', '}0@kvgzgR8JcJ0C>C[4!ov:zgNVoZhN4OZ[-|8|s~o|wGSlS9G:GS9#s~1~lwd-hO');
define( 'AUTH_SALT', '{^7,vbn,rUfQjQ7JFQ7>v>4^nUgzgNYFYFR8,8>4!o!}@oVsZG0CZG:@1C[-h~oZ');
define( 'SECURE_AUTH_SALT', '~9#1~p~]xSlSeL2P6H;_A#xe.tDamTA<2P6.q++iTeTA{x.6.qbm*qXEPjPA<2M6');
define( 'LOGGED_IN_SALT', 'cgVGK0!4G:-hs[wdhsdK#sdw_pZGalS9#1L1~]x]x_patalS9Se6_6H;+it<teLWm');
define( 'NONCE_SALT', 'hhsZGZhO5G:H9#t;-htap+hS9HaH;~]#2*l#tamSiqTeHP2AT6D<;+.2A.qxai+.m');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
