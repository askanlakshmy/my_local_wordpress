<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'chopshopfx_staging' );

/** MySQL database username */
define( 'DB_USER', 'chopshopfx_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', '3DxG+Z-mXH!k' );

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
define( 'AUTH_KEY',         '&J(GXx2=f{bMpsyl$^e/U6cJZyGxrz76WUd#jbQYAzK&X)5?HI.j48M6{5Opm,5_' );
define( 'SECURE_AUTH_KEY',  'a~RBYIMuhRg}4}RpiO77IRyO*&6vTu6coM0?/Qn~o5QqclguT..:-Bo$ Jl794:&' );
define( 'LOGGED_IN_KEY',    'cnxkBw%5zcBUkf<R!{{^T`6{~k1$q30OXi5~#DMFqsd3EDIQ)(mz,TimPMP!xF,w' );
define( 'NONCE_KEY',        '&Kot3JJLx,$GX?v/M;3.OG~)~p#TQ;:S(lXiY+ZfNaXk,CO VwDe+le9XU-3hw7f' );
define( 'AUTH_SALT',        'tKh{=.r;kC[`_x^w }4C9Cb)`(ZFqp)Nmls8b=wG:N&PoCtMl+][B]A9zVFXe~`G' );
define( 'SECURE_AUTH_SALT', 'm-H~t?kc5}Pc/_%x2TYju}eB;15]hg$sEo#>)oadDq=^Yejv!Nt:zv6N>DmX9G i' );
define( 'LOGGED_IN_SALT',   '6YpuZydh4,;kWtD9r/)]c1pzl/9wTDu,m$(F<zKz@DFQn#W3;;[t{@D>1TuM+/dl' );
define( 'NONCE_SALT',       '/sJYkL;Ix;j,r1mi3{SeQ2$X$p0SKWnC[y(4^n8URKBg5A>u>m<<ad+K#_Ao}acr' );

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
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', false );
define('WP_MEMORY_LIMIT', '25G');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
