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
define('DB_NAME', 'db116_kafui');

/** MySQL database username */
define('DB_USER', 'db116_kafui');

/** MySQL database password */
define('DB_PASSWORD', 'Rm@x8bAUwCKmc');

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');

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
define('AUTH_KEY',         'K%$gjWL6atIL011n(%JTa6>nbFkkW<v5H<e9x<l=D&j*Pc6lf8*9E|$ILNtmT),w');
define('SECURE_AUTH_KEY',  'g-aR^4toEe~q!UDq2v&HMQ7a<lsfwDFz@G+csKn(|j3U/>/oT:hd-Ui6gka9 ;s@');
define('LOGGED_IN_KEY',    'ugQ6}9FCY>$!AEV p9ZGcv7{-@/x.cD@OpHqe2T<uSmxj:b_.kg{1L)L)+wYvx!*');
define('NONCE_KEY',        'KGC)}:%+wfU^qBg+-5I^^;Yr5>e1}j0nkt!Kb:b$#c3gX |M}+r[Q:|Oh?s^o&vW');
define('AUTH_SALT',        'VKaNWY;zRb=zyi.C2Y]#%L/NHy;-6pU.6_m{Ma2,eD $,G@k2v[*oE~;{8z}$-)]');
define('SECURE_AUTH_SALT', '*dn}&FTLCQ*Z$;$l(/3/9VocDfnAx;ZYL@M<Voa0e^v;3=<?:9#ooMYj?]O)Y{xY');
define('LOGGED_IN_SALT',   ':{0?hgBGF)I:/&$p]DW?w}:)$CQ?#:,;TDI-9V!AUD-;JZRh3XU]bxk(C]|=X8L[');
define('NONCE_SALT',       'GbF@Xz[LZSpO:<ryu2uv J6C;t$FbB`WcL[5JV||%-m}HcEze81ruqjKthC4,fZj');

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
