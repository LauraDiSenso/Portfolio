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
define('AUTH_KEY',         '$Gn^H=ZvlBkgVU>=L2{?r>RJu=9Zi|(3T9Q.K?PqVB3KfzP9-kXpR/PH_/]kLW*%');
define('SECURE_AUTH_KEY',  '`+-C6,wPm2Bo12:=&3Ve1~j/t6Zle SdQ|BMxdd-5b|<m1[oZD9/y[YAAOKzWm(1');
define('LOGGED_IN_KEY',    '_R:*(V3Q*t2:s) ==Z!Gw[n{%K1CWnq!!|X>-q~Oxk-k`$-!#Gvi.8Ve&;ON41_i');
define('NONCE_KEY',        '[hNI18+oa38h55t0Y_a|Q$`H4xSLW+-SL?cj6m=U+kiy!nv@W@z1~|c~KyFX=.T2');
define('AUTH_SALT',        'Dt6z&+WsbS#UN,I):*5-Blmi_.02gNm@!J5Ki_.i,)U@`3JW;|ikz?RR y(2.B::');
define('SECURE_AUTH_SALT', 'c|w?) T_,,I1]X|xV~ZB5):vSj1fqysG358-}B]pN3$DeKk=:x0D8|oD%:uJG)8d');
define('LOGGED_IN_SALT',   '?l942,^N-bf0<B0]}+U-`ZI9K{JUmj!vLT`LUg8P+LG_8Bl/4YM<eFcv@}W2pj$}');
define('NONCE_SALT',       '@kQ+c]7X|yyJ)Y2_Yu%5DlS}RSo.>-mg^SKzh4%FHxnp#DpR#|HG8^nea~+/ZN0N');

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
