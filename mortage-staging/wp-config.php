<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'P0l+QCl5cUB4dkZLKDQmSDRYfEBkLk06fj8tMUMjX105bGRrXTYvUG8gZ18yWDdZXnIwRXZPajRnJHx0bG5ZSg==' );
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
 
 set_time_limit(300);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stagingmm' );

/** MySQL database username */
define( 'DB_USER', 'stagingmm' );

/** MySQL database password */
define( 'DB_PASSWORD', '6_R!#COj7^4n' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8(kjj2w4tlpE!RH*/dh;Kva~=QI;Gy0jjZ9am)=ai1btTL/^y,1ayEuSKD^r+{ZC' );
define( 'SECURE_AUTH_KEY',  '06kvku:@18i*7!?i!W[~*@+yuD=$9q%0bzQHH-,@9;%dipqF_l-)4O|AC75>HsCF' );
define( 'LOGGED_IN_KEY',    'i-+rE>3:eYEmF3sV`2fV|s/nFp+%KTy3rWIr2[m#!$7UXc5>,< <[tj}b_yln(ZU' );
define( 'NONCE_KEY',        '0.hw[C,2b#]Y+I^1KETT%ULEI)y`)g[R)1Q)87e6cvJxga)5U@#*[YZg1$<Vi#Dp' );
define( 'AUTH_SALT',        '~v#Vr)k&m;|l>vY7dwz;y&5BEl~h[u)pCjvLw% #&So,q5:QVQdL8Y|psE9/B:;x' );
define( 'SECURE_AUTH_SALT', 'M]!p8t$3%TVq $Ajj]da 4/p#4%_GHhp*>S$QJG;ll^nWt0*Dvd~-):N&ZAP{(/`' );
define( 'LOGGED_IN_SALT',   'B$A]6lk](!L.,D[H+M?vQg.NReD[q}v)b<Vx,,n@6c>6!P_>1&{t>qzIJ+# y39~' );
define( 'NONCE_SALT',       'Vb@]imO)m6ekaczU&N$^uyi*q-<jA2x&GO<;x*vs[z|JbDET2Cv7iW7{aMmvGw6|' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
