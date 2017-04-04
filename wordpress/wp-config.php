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
define('DB_NAME', 'ferro');

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
define('AUTH_KEY',         'tp6_4)A{_1J&N3QhiGKMpOViQ6y5ERQb9Y7n{Ja/l`W.tfB_/~z6e=Ni)w`XlZ<G');
define('SECURE_AUTH_KEY',  '!c0L]%+~61hBzBO!GczjGU>-H1{058D|L_ZGG}n,IX2KB1:7~?1)kcJT0+@hH(T:');
define('LOGGED_IN_KEY',    'LxDYbi8PIKo7r u?Q*NO:w8_OsosNrMtA_B{vy*H[((PsTV)h1Hddoc_Z!N<q%%2');
define('NONCE_KEY',        '[rOn&os52]9,43FmZ0j_j,vTNi3{,@=b)Xu[1Q~Nk1D##oaS9;IbgzQ=gi$Cg.jm');
define('AUTH_SALT',        '5Q:dexxfw#_p2gEUN4:e]5d~m!Y7hwhk(WRQ02SJ[~#DMD0)%y:P3;$MNk=Z 1q5');
define('SECURE_AUTH_SALT', 's,AOdy2Z22j{qv5&!ADr,5obPbAU+3(ZGAnky{UUi;XD<+_W3t[ qkm*m.oI[Xd ');
define('LOGGED_IN_SALT',   'j`++NZhwh%|jT[Zlq}ua?r@aV !c7y&a<N:K;==W,{D,G)UQ/yt?z)!<58g+5-bA');
define('NONCE_SALT',       'V(p0CKVvc7FZOjo iY&OIuWp0fW)uMZ|d.|g+v@}3SpvZHlUQ>6CdkuU?[Ici1e5');

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
