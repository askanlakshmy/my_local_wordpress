<?php
define( 'WP_CACHE', true );

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theyouthist_wp');
/** MySQL database username */
define('DB_USER', 'theyouthist_wp');
/** MySQL database password */
define('DB_PASSWORD', 'Gx9*bcVhq#YA');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*P/W[1uJZRD(dF`?1}b.{q >U[U[cfi&pa kg1m;_py0@ona|$>:qR:_dWEi>w3l');
define('SECURE_AUTH_KEY',  '/Zh,Tw+-@Z(LDC&TW2{2+[=D=4!/_?20i%v4hYsx>)W(p_[;]@I~_%.*JSip}ayB');
define('LOGGED_IN_KEY',    ')bYK>#uFsW+qvC1jNPc.TqcB|)i;*2z/@{e;-))?G~~gu$M~uQIX]3pY/p^,fT=0');
define('NONCE_KEY',        '#!~pM]Ms|`2*s{*w0ahzdmqJJ>{j|v-O]+vEq&D@wzjG@Rab<gbkA1QHb(TV=x.I');
define('AUTH_SALT',        'q#<-(Pp/c]oN+PJM7hqIsB(%7!E{|]+TVY;VK-Sti3NIuk!_TCAXT8d+D^JHW+<-');
define('SECURE_AUTH_SALT', 'MYJ0DK|j3Gl-EE*MoiiFNZoTHD/,(v)O{PN3t#$EOxC|MwUVv+7?(QX+|& E*y.|');
define('LOGGED_IN_SALT',   '^i0O;^0)p]VS/jnTnQ+K??Li{_@szN%lf_KXgZxL6rT5!G+T#)CWAcSw4=!HD3@B');
define('NONCE_SALT',       '}_|?SUOes96U-))+H$D9ijL W!L9PLb-|EEfTj*C-gC-QFgtF|L!8i.kevQ|r3as');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thist_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
// define( 'DISALLOW_FILE_EDIT', true );
// define( 'DISALLOW_FILE_MODS', true );
define( 'ALLOW_UNFILTERED_UPLOADS', true );
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

