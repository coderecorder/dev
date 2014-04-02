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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'prae1990_coderecorder');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'prae1990_cr');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Rec0rder5');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y.V{NR^IuiJ!}0`}^dy~K_: k*_y`D54+,Yz}Yw 8GAk:Vj%jnx+7n^cpiG>FCsB');
define('SECURE_AUTH_KEY',  'F|@*_Mih>@2-tQLOf#c2~>3:|-9_+G+H@{hKNNuz&P)+@b6}~)MsccikvmpIR6~#');
define('LOGGED_IN_KEY',    ':SjwI(gFkQfU;{KfGPgGqAQ-3J%Fs6|F;Vzb{qN}>}r%)Q#1KoKSiRVO`H7Ql>{H');
define('NONCE_KEY',        'S=s>r8(1w|m iz#P~kON|cSobh,[8TM|aFj&_`iQ!_N3tQTLL<^psYq<RE=HUUBp');
define('AUTH_SALT',        '(eJfBeYg1t]BWJp[H6t#f{8{+!}3(SQ}bT&W25<u=]k_Urd(iM.=lJ4:imw.6kO]');
define('SECURE_AUTH_SALT', ')Od8T>`9-Xb$SGM~WsI-vZ Z)w,y/kQpK>>[G5,+sxo*_F$|ME ?hLv!s4l8?+.>');
define('LOGGED_IN_SALT',   'BHhiwfcg1s+9Fx`J;M548 U9N(k_,2$XsunxzR]ZLPGVM~m2iyLy99d7X9x}kU&6');
define('NONCE_SALT',       '}{&+^CJgKr;|EjR|guQB~#$jvbYqI}=iO??-eV.jyfd}m`++4&$l7yVR+?HR~Zw8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cr_';

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wpcms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/sitecontent');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/sitecontent');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
