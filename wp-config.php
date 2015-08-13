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
define('DB_NAME', 'hidama_wordpress');
//define('DB_NAME', 'jamesreg_wp604');

/** MySQL database username */
define('DB_USER', 'root');
//define('DB_USER', 'jamesreg');

/** MySQL database password */
define('DB_PASSWORD', 'root');
//define('DB_PASSWORD', '525600minutes');

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
define('AUTH_KEY',         'D^^7vTa0{m*A$S^U9`ZQ{xjjk!)d~nt+CSRru$S9am1<r*R8}>_]qN56[GV,DEFf');
define('SECURE_AUTH_KEY',  'DDKP#]#(L}q=Eh0RA>Nys|a]$-`er(ZEW*@FF!BBA6a51`UHDjDa>Z*C`/n+QHeM');
define('LOGGED_IN_KEY',    'g>>D<`-l>I_3]rE(+rvoll:t<w+`QN$4_@#!CM6m}QaBMw+}5,2};{tsrVElSed;');
define('NONCE_KEY',        'j+BUb+Z|J3R0,wnWcHYOwFVUscWKPY7!<]i51XiWPMkd1hkF|Ucptm8vlJf9Q8Ix');
define('AUTH_SALT',        'f%tQQ;+3?qg{-%hb}PCfc=_2K=*@HNDiSgSa7G(Yo{KeUY8s,_oP?CY]cTZ.If9/');
define('SECURE_AUTH_SALT', ',WplOo++0#)mb3%:+8X]|7)AR$RM>J-1HpcsO`Q;B{AP{u_/aNGCY)$?C^M~LjCM');
define('LOGGED_IN_SALT',   'I|)$+eGwJG4&xZbk,!ke=EU!Nt+JIKd`DWMq`l,OD(_]x>c7Y`=&i=Mx%[Wyh$k(');
define('NONCE_SALT',       '|[KHyiL},j]Z7#L5[0e$X1[y[nw+vb(gQ2S!u4|GAt_zTh>-+;&j5sW[BTOJ0iv$');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
