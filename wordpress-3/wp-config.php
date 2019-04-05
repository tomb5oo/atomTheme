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
define( 'DB_USER', 'atomtheme123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'atomtheme123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Erw&mU92XvfCi*+iez/v1s-K* J?X=.,3kL;V*5_Q.5mFYh6PHybb%f-Ym*~cu.r' );
define( 'SECURE_AUTH_KEY',  'C;#dd[+8s}0k)q{U%QZyd]tvAB%N>#&-0OS~NNPCo#X9hPSiSGQKZvYaFU8;L73e' );
define( 'LOGGED_IN_KEY',    'n|/tpu2r=/*LVip?[2ez]rw80r_C:*vD?xY_ a3})ZL iyrqNW<4D3w%Uz1@$FV|' );
define( 'NONCE_KEY',        '~!0+U{O85{G,`:ibeP3U]aof`cj@5zeu4%e=osg|/%ReeYju}lMbjO#m[c>M+ID_' );
define( 'AUTH_SALT',        'yuM[ve!f#Kpw:]5&UmKuWx6/|($XA>Zt}U=FavQ=)O3$O>[5N]I_=|3o>HiZJ2M/' );
define( 'SECURE_AUTH_SALT', '&KNR^I$;m?d_5n.@{tMmN84:sD[a@KL(+w-!^xA^i0o]I&}V^SZ,6<i3NZoG4zY~' );
define( 'LOGGED_IN_SALT',   'oqOj3nO~G2!}qhotb~@M!F#dY~K/dX`^<:iPIKi8[#AqoLhlpT[KB<I/zO)981Z4' );
define( 'NONCE_SALT',       'V5 nO.9dcxyVIBK1!zib[<E`[OP87FOFfoefz^K:tSjb)(b@m.zB,<Z`~V+H)K8Z' );

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
