<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_e0a87448cb9d982');

/** MySQL database username */
define('DB_USER', 'b6873de8c62f45');

/** MySQL database password */
define('DB_PASSWORD', '01f5d0a3');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east-02.cleardb.com');

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
define('AUTH_KEY',         'rzfp-0?zq|T#*,d34YZOBEtnL-{6J-YOup vR5:Mj`m#?h$pzjn5L#^=4u.Wow,1');
define('SECURE_AUTH_KEY',  '=v~a,914>|.Ez|f_Rj0ZJ-ed+|d|~ (0FzxtK8FYD+M-po`/YmA-O(O>vf#TH+#h');
define('LOGGED_IN_KEY',    ',OVRG0X1$ME[`5~0$+<vU@jdPPX8(Sm3RQU,I-{xV+0#HS469un-91d4XS.!?Clr');
define('NONCE_KEY',        'aW6FqZ*`Kzmke[JlXtxL45}Eu+(?p0A3t`Z~7Kj0}SrvZOZy[6Ia(n:FCdw3?g z');
define('AUTH_SALT',        '9cYG``qX_4J)HP68ohP&:n-G-vNR}]FeR+|Uipo$>z-1xYO3QyVb:OX9|H#=o))E');
define('SECURE_AUTH_SALT', 'Hi<UU/<{sh?z<U[!;YiW}LvOOt~Gt^3Q3b_[T;HLj=tc~kpgF|D~C 0$||{p;4bN');
define('LOGGED_IN_SALT',   'Q=kkIcoK(*.G|2+e%X-vv#rO5Zwo0TK]GZU5rIGXKy))wj=;;J-!M@mdP`&52,t~');
define('NONCE_SALT',       '7AwR?-w7Epf6{wp<&#[dWUP.GaGG+$_h[=`qn:c!uyzx]INo(xG6+&{OcO)yi~4{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_ALLOW_REPAIR', true);
