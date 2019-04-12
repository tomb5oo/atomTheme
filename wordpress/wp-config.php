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
define( 'DB_NAME', 'atomtheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'techn000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QvY|{UZInt2P{T1i{?;%N}~$$h)tgcGHHuZj#;gLJ|%46&Z0YAF@ibJ|-K=t&A#x');
define('SECURE_AUTH_KEY',  '@0ZWxwf%4hHAU/k3o Qfu,$Hn7W1XAgIYotd+K9N&Yb8 ys5z39I}zKHoYt/T0n1');
define('LOGGED_IN_KEY',    'hHC9;%nP_|i&<spb>|BIy+_,*Cajq.<O,?--3:Lw>FYM)+%fl-uru7Zt0[!YlW? ');
define('NONCE_KEY',        'UFErx)wAATQ+}Wbv2T-Qs-%3l-E}]u{Drq!|!RiAs}GnGcB[;{+aEa03 |V6R(7F');
define('AUTH_SALT',        'qMY-y8>.|~UvCdJirvK+shaYR}w/|X|=+RKmsC)#U-Git-|MkxWq(s3]2dSFqcR(');
define('SECURE_AUTH_SALT', 'RI]f5G$;1C*sJvI1FZ+@S}=s;5w]cur#S]doyg,41elXoxL~7M]P|M1~C?*pac+E');
define('LOGGED_IN_SALT',   '&$GC:O !1d,:w9%5)[~si._+2~HLos^[ 9l9Lt>LSqur0oZNda;9G!UHnzLPPLoQ');
define('NONCE_SALT',       'cK~Ngp<T3(n2|.1auonkGD1j)V<7|Xmud(:zh{6cpa1rJs*P3MgP[kH#Y5]h^Y1}');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
