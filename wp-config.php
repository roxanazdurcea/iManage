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
define('DB_NAME', 'iManageDB');

/** MySQL database username */
define('DB_USER', 'imanageuser');

/** MySQL database password */
define('DB_PASSWORD', 'SQ96S3HPZJgcBYaz');

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
define('AUTH_KEY',         'Ih&UPmkm^2(;>}[_XhgO$#/z^Rhe?G:lG;J^A?vf  evFn2{73^,=j2]@c^h!G3$');
define('SECURE_AUTH_KEY',  '/qZ^%*:mzpu/MNJ/@H~63}&tj jD[t7a=;A>N=?*bgbz<pg#7.l1pi9kT-CC//V]');
define('LOGGED_IN_KEY',    ',9ae:nrN*X<?RzylybcTbF(J&<P9Reu0ZXI,yCHGC?zgAL tvydJCT^[%VB88nf ');
define('NONCE_KEY',        '/go2jmXE>37zBMe}apVh@nt)@VtQ%mPm%==NWfnP6J|oGAlFuq{jCc6]2xIXd_:t');
define('AUTH_SALT',        '+=jD#:teB5Cp7d~t{ V<.d]E_jJJxCjWJ+{3Aw|kT>}T?FV_r( _@N0&!_gtEal3');
define('SECURE_AUTH_SALT', 'AGD<g7S1Qc}%SD%rz<:T4E{L8I!w8fxHMZ~[K+T5)/2g.%ZMzjm-+oX5-]rF_yB]');
define('LOGGED_IN_SALT',   'K3#*|cn~kQzblb8.<0~l/6~Cx=rl#8tlt~7b` :%(O_;lr8jnp-@:U%/uCB^}_Y.');
define('NONCE_SALT',       'fo!Ts_Hm)4F9f`fv^&/eUn`=gzBwz&O]393[H^%^DJXSHzI&Y .=>hC]-{w9gWkY');

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
