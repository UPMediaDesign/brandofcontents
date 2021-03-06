<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'upmediac_brandofcontents');

/** MySQL database username */
define('DB_USER', 'upmediac_tboc');

/** MySQL database password */
define('DB_PASSWORD', 'tboc8039876.,');

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
define('AUTH_KEY',         '_i+yxs?5s^~S|2~`j]y:!Nz`c)&GeaMN<7N6m+j(xDQ!.-}+reE=4f|!C1X3+=@3');
define('SECURE_AUTH_KEY',  '#]Q|.|}<dQC%]6lt>}b]H;|)oa-}m}ATK;UV~3eZ_EzYp6C[X6 [{bJ8`sZg~C-_');
define('LOGGED_IN_KEY',    '7_YArd ~d zy.IOM6dcPvsiQJm0,|FyL4v/oqds9ARCj7sS$IdN(4+A?g.L{oPNj');
define('NONCE_KEY',        ':.}iyVLr0b;*;K<---F3B|I)ohG-jWr$2mbxl@/OMq$DAd%8(Q:{a^:gWr+~q|Zj');
define('AUTH_SALT',        '4 |FTouy+w`j8K%^$y5MhAT1Qrz[):)ADl,5[Xl|./OFp$,Qq/]l&(v iFx1HAs7');
define('SECURE_AUTH_SALT', 'GI-x.UVj-^{A(*-Y{a-I]5qN-lIA]-GR)qsqq&7#sHf+1RpyA8N_&}D!&6s]xcjt');
define('LOGGED_IN_SALT',   '4XUr}*kZO;j3igk_bY)-b#0GYh.YM<*g);-+FKS<~s&Vkn2J<[,dZgk++~|X54Uu');
define('NONCE_SALT',       'ZK?e-YMPs*giZzOfPz+ouJ-A|-Z|>o/{q#0wr)}a:,-,oTOpx%!?+,,<+czBwxP7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
