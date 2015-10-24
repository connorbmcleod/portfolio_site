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
define('DB_NAME', 'connor_wordpress');

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
define('AUTH_KEY',         'n|W&WL.~&1!ev5$N.Jtjaj#y?9FVQ=Amm0@Ez.X7#e-,u}34EKLF+MQ-i&&1(?X0');
define('SECURE_AUTH_KEY',  'Pi]3P+Ba7F||&WR7lM[S(1T4Z(+!c%nVp3-o+mulG@=9hQ;`DXfWHIc:1clmX<LQ');
define('LOGGED_IN_KEY',    '`OZIgC!?  ROWrMG4N*$5Xc.tzBhC^&w nN{rNWV/tt+q$?|A(ICmA_]x<^gY)T$');
define('NONCE_KEY',        'mIP3*7= Jwwx-!u*p!mnX-DY^8Pk5rJ=9J_]7cV2_ENWidKf.AELZ{aYD]PC-sd9');
define('AUTH_SALT',        'N*CN}[]Vpjc|]+0<%SkG-SyxPmb@-x_#%.~X1Y,*y$+sSdX[9k]g1h7,qF^[D,Z?');
define('SECURE_AUTH_SALT', 'Yv)pQm%UI-ugJ,w^2x1P!|-J!#7&Ty&/mguZEs|>#Z0LBg*?Z;+t(6?4D]@]a;xP');
define('LOGGED_IN_SALT',   'UXVVT9*3+z3Irw`<A08D0(3(h|0nV>g~t4U#T+yOB1IW-bLcsmF7@5|7q(!NQ{aD');
define('NONCE_SALT',       '8Y@y3K^RlMHPB$a(r*vC(b*MIN+4%4xgW>S!ZT]{?O2x^O=s[NMZC6N94+cyQ0@=');

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
