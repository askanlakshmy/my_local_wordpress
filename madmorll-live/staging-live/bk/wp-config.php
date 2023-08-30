	<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



define( 'ITSEC_ENCRYPTION_KEY', 'KG5GLTh+MUAlWzo7YF0qcik0Vz1XYC9ndT9aZ3N7aHdZbUsmRVd5QTt8VnJdfGpuPHFuKmMycHZIW3Q6XjRuOA==' );

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
define( 'DB_NAME', 'a3a7ffd9_f196c3' );

/** Database username */
define( 'DB_USER', 'a3a7ffd9_f196c3' );

/** Database password */
define( 'DB_PASSWORD', 'FiledOwnersPurrStrops' );

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
define( 'WP_CACHE_KEY_SALT', 'staging-site-64638e499a52c' );


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
// if ( ! defined( 'WP_DEBUG' ) ) {
	define('WP_DEBUG',false);
define( 'WP_DEBUG_LOG', false );
// }
define( 'DISABLE_WP_CRON', true );
define( 'FS_CHMOD_DIR', 0755 );
define( 'FS_CHMOD_FILE', 0644 );
define( 'WP_ENVIRONMENT_TYPE', 'staging' );
define( 'JETPACK_STAGING_MODE', true );
define( 'RCP_DISABLE_EMAILS', true );
define( 'NEXCESS_MAPPS_STAGING_SITE', '1.40.0' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
