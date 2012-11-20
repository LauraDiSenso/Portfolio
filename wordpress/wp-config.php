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
define('AUTH_KEY',         'YR)rvcn!W;j5v[V~cIfJb`}4 s{VgX]dV[4)o4C-$gj,[H?IBYXl-#E/eeJoP4gK');
define('SECURE_AUTH_KEY',  'Z)_2>^-fGnlXeq@7`P0X|:E_c^l38Y aN=zw #[pk|?[`~-RqF)jNcrq)jKg:I_A');
define('LOGGED_IN_KEY',    '{y+%hS7N$if^J1 -8RZGIPqLVOy|:-Gk `x:x-C%2:dV9+_3E<K&v;0jX3M=fQZ0');
define('NONCE_KEY',        'VQ7.c ]$Gv_[aui]evAWEb1olJF[[92:l|g39O)qrnCmdrky-+ M9)ir?Npa^Tkd');
define('AUTH_SALT',        'AJ3tm.=d;Wfz+M<fJ3 P7Onn/>Ph-f[YmdYyC8i0c:Q~|w-nqmsS41=r[1oeQ^ph');
define('SECURE_AUTH_SALT', 'rxLQ<j[R|XFJa<=PDq=.+]5LoJ(qD.8VjepjW(q9>CFof]<+3Ls_YC!$uPp]A 7m');
define('LOGGED_IN_SALT',   ']jy8C%=PG9L-af_-sjo@T>|kepR15i$=v1NKmMYX<Myh.&8 #k_{Frr!MmCDV{R|');
define('NONCE_SALT',       'S]o=>|[fG6;h|I6`R@=Bh$uQ+i|{xz%ms,^CT&.)ESCMmcTd7*{?a1&CCBit+]!~');

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
