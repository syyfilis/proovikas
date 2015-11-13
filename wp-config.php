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
define('DB_NAME', 'wpdb2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'fpo:,|fE~HA)u+&Ee `sFQL&_|Jm:Dt=@J-SabnCP%-RnJRa(!}Fs6-84HD+*O`9');
define('SECURE_AUTH_KEY',  '-ZO-!,6F+w87[]D?%-o4Tmq+;K/_E|6{-xD`p{v-k*C;msL,AUS1,j:m4}=RC_9x');
define('LOGGED_IN_KEY',    'ThSAZ3|MRc#QmB728^{q9${)eAWo-AQ|]eG+;f`>UEXD.&BS5=J;V5Ln%!=6!j=K');
define('NONCE_KEY',        'U4nevi$5A<?`vhIP6a&:7R!WUu}gaSuSid>VM?kE+j/~7zFWFdC^9t(Bse|djO7M');
define('AUTH_SALT',        'w(2^#Q=zW;K+-g+z0(U,6`7cm`<i|@l?<dDk7|D/+T$& K9d|0i >ha}pcjrh-e@');
define('SECURE_AUTH_SALT', '}{{3zywA`C ~=.edyxEM/dRQtl{w^hR^-A6NhL,Ug*k;-!+Y#XaD4cNF^?>|C*Zu');
define('LOGGED_IN_SALT',   'a-Ex-D>y7Jk${M[q0,KH%/}Sb~7k~7GdDm/)gTh9=f1A%PYph+OZXWLK6RmE5CWo');
define('NONCE_SALT',       'MSkiXwRc;dt][U(5GlV7{1 [:C),vUv76NoIe7gmOs^Tm+c_+Q ~)TGmH?XzK#UF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
