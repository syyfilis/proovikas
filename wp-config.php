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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'testuser');

/** MySQL database password */
define('DB_PASSWORD', 'test');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'kdi*y#Jj7F-V|c7qbbZwLpZD1#)>UtzW=~6X=6Oe^S2q85V-a<M:P0-T9xV^qUlJ');
define('SECURE_AUTH_KEY',  'EZ{(2`$]8G2sv@dyt_|S%Wpe~?w{ara4yysictd~/Cu|@$^oF|A_$E89g2fbI+$s');
define('LOGGED_IN_KEY',    '~!>?%,e5Hiqnw^5|## VDT8QHy2tf?=,9@3{M9RF-6nQzpyYv+/rR1Q) ]Ite-iF');
define('NONCE_KEY',        '7?%;r5bDR|y&F9SHP+-5-q]?@{ciz-tO`(L!P)k_t+/fRE3*,fJS}.q=nGV*1X@V');
define('AUTH_SALT',        '7GLLn-h4+%)hZLd-wqyY(V*20lK^-BA>JwC~)0Wo)^e7PMHq{D)SO|]i(py|E51J');
define('SECURE_AUTH_SALT', '(D|YM#H#-}|H|v/!ZiK>=8U3QvkD<j7BKIijhfV(MP*:5(u2AB-=?k-5SRz9.&+P');
define('LOGGED_IN_SALT',   'jnw-7t?TmrM0b2yHU<nkytyY|Xq]oJ ^:hR26#e,E;57|VQvG--+3-K%wU6ZZ(|2');
define('NONCE_SALT',       '%jwvx}N!=-{2, +3jS5{>$SJ[P;*|^L[OKAo*DrOsC!tKJ+v@0uq-[t#eP[$+@!3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_proov';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_HOME', 'http://local.dev/proov' );
define( 'WP_SITEURL', 'http://local.dev/proov/wordpress' );

define( 'WP_CONTENT_DIR', '/var/www/html/proov/wp-content' );
define( 'WP_CONTENT_URL', 'http://local.dev/proov/wp-content' );

