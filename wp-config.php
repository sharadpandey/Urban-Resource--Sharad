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
define('DB_NAME', 'urdev_imark_db_urban');

/** MySQL database username */
define('DB_USER', 'urdev_user_urban');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '$50?37A^KEl8#-=7h+Hn 5R~VGP3~xQ+q(`3Z;Rj%DX]kUD*%FD~oR59VQMi||!M');
define('SECURE_AUTH_KEY',  'S75;0>sp+CUDnc5y4{xR.XCxrlO| =a$0):s;L793z<3CoOa3 6/l_-zgWJ(;%WK');
define('LOGGED_IN_KEY',    '1py{gnE-M{k]jsG~^rUy1$(u1,)~Vv-#cYrQiUI&#Qo{TS3qVA(<?Pc]CjgLmU`k');
define('NONCE_KEY',        'Okzu~DV|%Qe|%7~^u5t]^T^bz-6N[u=j3N~$e><0{O6Ut9imY&vELV<;,5TrY c(');
define('AUTH_SALT',        'f.B~w3#gA,nNW(DV4Hv+1D#/2C;$YJG4*sPLbOCb^;T0VSu,+)&vHn>UW5MTqizZ');
define('SECURE_AUTH_SALT', 'g6k2yfQNM)Jd:qI?H`7aumC3L?j<U{|w=:F,)LgSA9wDBSMF<>zW~nVsS,?K2-HP');
define('LOGGED_IN_SALT',   'DM-@lFN*bW@+td36{o6iZjbBE_]S#TBk-W~.N1a<FkEL-5R?WVTcpF?[hx>O.7,A');
define('NONCE_SALT',       ',yEmL.YJ(kiF|= 8jjDJE:Npotui4um0>XjuJ ^s:K{kyb&Zqg+Wh@oU=3 VUs]l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'urs_';

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
