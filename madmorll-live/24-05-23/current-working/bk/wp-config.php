<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache





define( 'ITSEC_ENCRYPTION_KEY', 'P1V6PUcuNTAyVFN4YjRBOjFWPXZ9bFogJEVlSz9kRyBNW254aWNzNDckUnAgZWNSPz1BQTFeMlk1e3hjYnNoeA==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ac67d552_f196c3' );

/** Database username */
define( 'DB_USER', 'ac67d552_f196c3' );

/** Database password */
define( 'DB_PASSWORD', 'Hoagie84Soused13Flaks52Decamp46' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          '+3w+]4=TJS~zpZ|$ /y BCX~QEO*(5lWLjtU!CYljoK%LZ=6[bfcDp8iJ~BURwQX' );
define( 'SECURE_AUTH_KEY',   '>/yM[Nr)+ql=g~!Zu*E9aWyAoFG538bM?m584>*o[Ufql?Dz #:)4)]tVgGksPXE' );
define( 'LOGGED_IN_KEY',     'FppZtvyAX*D.S8!-,ry_fD?lV@9-AIqg,FQBC%b|Kvd#-7.3=Sy[S<LGI9t6R~EZ' );
define( 'NONCE_KEY',         '<c<W$;,q+P2]lsWrFrA5{>|4$+0!$>AYmMharEU9Qe*IqQ**g#z{c!:$GIKX[q0;' );
define( 'AUTH_SALT',         '_i{@QYe@E{{~bd:qB>=6Quv*$ISdms|Fr~1kqdGhE:Sk_I-q=b3~(CAcci;,sMA3' );
define( 'SECURE_AUTH_SALT',  '`1|L5|(H>:nP[aO<Mkays,KT4LoMN.t]N=(1P!NtT{y+e9ENa_++fe&dBBfQ7W`E' );
define( 'LOGGED_IN_SALT',    '/kaf~JS1]HiL`_Mo:Sp!cf;=o69wRgJ).ZlQLvRrM868XMb]?gHET}Ev1 ot2{S@' );
define( 'NONCE_SALT',        'f].PhQ,;2To(RBq>Zb$|<Ud4Q?AhB8X5$~G`R~?V]o)gPN-qh[(m!]zdm{Rnlwz@' );
define( 'WP_CACHE_KEY_SALT', '.g_b[]J@l,NwSj/Rc6{`n~M;p{q}wn2$]HwFwEv66_Fu2HXtj<hA2ET,C>dayvKp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DISABLE_WP_CRON', true );
define( 'FS_CHMOD_DIR', 0755 );
define( 'FS_CHMOD_FILE', 0644 );
define( 'WP_REDIS_CONFIG', [
	'token' => 'c071ef057aaabcbebfea21eb37196713e844c15064fdc5521239956eab71',
	'host' => '/var/run/redis-multi-ac67d552.redis/redis.sock',
	'port' => '0',
	'database' => '0',
	'maxttl' => 86400 * 7,
	'timeout' => 1.0,
	'read_timeout' => 1.0,
	'retry_interval' => 10,
	'retries' => 3,
	'backoff' => 'smart',
	'compression' => 'zstd',
	'serializer' => 'igbinary',
	'async_flush' => true,
	'split_alloptions' => true,
	'prefetch' => true,
	'debug' => false,
	'save_commands' => false,
] );
define( 'WP_REDIS_DISABLED', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
// define( 'DISALLOW_FILE_EDIT', true );
// define( 'DISALLOW_FILE_MODS', true );