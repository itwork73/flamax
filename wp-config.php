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
define('DB_NAME', 'flamax-ex');

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
define('AUTH_KEY',         '%!-2atT4^XB@J+g!2VB9rX{mz3UNe5fC1Ixhs{v%)@E2B_<%Jr;%!V{_X%F(!Fl6');
define('SECURE_AUTH_KEY',  'd3bh0@(5V[-t@QGPB%-C3O~(DQ_}[-pj1ZCPB}hS.*B1)=n^tJ}qoEAH_P /8L73');
define('LOGGED_IN_KEY',    ' -0@wmryx~ k67?%^Vv&yR>}($Wtret4E; wXPznR_ y`U68MBA1wQ:IEcWsT8>2');
define('NONCE_KEY',        'y$N7ckKP5m}s;/oz[!<]fEQl[m_*1<vfZYy2Z9MJER5X58]x{&aBj|RZ2HJFB.I>');
define('AUTH_SALT',        ' G6o_Hvr?`( :A^L&}QB#LP<@gD15b|U[5.?Jp[r;x o$|TR%Z.Wd.tT(1exTJF<');
define('SECURE_AUTH_SALT', '84L3{vou#pSn][tkG| OdE==.Sq#A[hdaw|rLSHh[^v@(H }^Jg}5 ^uQ.i!Tg4w');
define('LOGGED_IN_SALT',   'oH}exl)tgDiqyQ,HHh``?T?QY#w!,*3+,qqLbov,xBe(lh_TO`jHY#:k.m hRc!Y');
define('NONCE_SALT',       'r=~biwQp+Vq2pl@*nzg#cTBU2*Y4Pa}bsg:ni6b/($l>daK{!5&QDS~CC]ACDNJf');

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
