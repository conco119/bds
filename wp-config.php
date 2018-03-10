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
define('DB_NAME', 'bdsoff');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'semQ~Y<v0m]hKGkTqaE%*/@Kqg|qR4#yejea/2H|a(e5-#0gi}#G)S}]MfybKvIa');
define('SECURE_AUTH_KEY',  '<0ztdhB=yn8]w|bRDc`_:;oY KVQd+2E^1IBGq-JVI*R}TPoDnfh >%rP;k<*Ub]');
define('LOGGED_IN_KEY',    '8a2L?wPjYRyTf5TW7hrow?g6`nmX($myvyWRF##?d=ejc})m<[8`1h 6(*x-]+6B');
define('NONCE_KEY',        '1$>pPqbo@If,yu|y{(]QMes|h%r:wrZ_Q TaLEkh-4o(!@9Q{%jV&gaFxByYVOi|');
define('AUTH_SALT',        '}T3,9 ij{Gr.,^X6n!rNbYJERCr&7{S0@UbXQqWZ||/I%e9$cdJKm[2:N N@31E2');
define('SECURE_AUTH_SALT', '_;b9NAay_E,]AWeBxKW.Btn3FG(S]2~w<~O3Mr?p_,^^ Xd.#F!:2$5]Jca9.j-J');
define('LOGGED_IN_SALT',   '9Q]mkm!ZJ#TI<26Z[p?BB?$0(I|!~jvAKT7>|;ti{WOx5{hb*TE [-^7?.h:A1ie');
define('NONCE_SALT',       '4n6RhBl^YHb0uHN2*3{HL9Scc|~o|uxU=hj$m0)TA4y+MTT,s.^-!w{8=5FpoX+e');

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
