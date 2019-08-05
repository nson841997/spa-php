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
define('DB_NAME', 'spa');

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
define('AUTH_KEY',         'D;$e5]<$!{MBU%%9>dDf+xfA;[,)>BZENo!Mw3E=+y>%zAi1}xoOW=YnC]_T(Wgs');
define('SECURE_AUTH_KEY',  'Ch8(C:4y2AH4/(+TBq}F^]h#&;22x2<sA8Eb4I}9T3?jK!hPq+Y$wGmX;^1>t d5');
define('LOGGED_IN_KEY',    'e70 ==*IAzL+qIrG%;yk..X%A+?`Civ;6j5g`CC^ld-q&y/M7m+9un0Xt>^rY/xg');
define('NONCE_KEY',        '8TCP^F8kcMN~82J_RhU%_<}pIF>$>u?O:Ay%M(H:oHmGNfg6Fq<=b^~~E.`H`RnW');
define('AUTH_SALT',        '`XzFxqJwMH`N@ sSysVN5`5IqzO-;^ovD7x|)9>Bx#_iCm+alaJ66#fnHiwO )oK');
define('SECURE_AUTH_SALT', 'Q`lhSPV{Sy7xsRzPOp^i=B(KPcSh$:y6Y%gNa@KSu13NFPD{3X:V7Cai2acB>WWl');
define('LOGGED_IN_SALT',   'fLXvO1Xz4qSwf.:]0f@AAXV8W6c+]>`]z)`is[GHi1?tB?&9,.r>>5L47pszp,{>');
define('NONCE_SALT',       'sfw&x>i==3`u;^gVL;;L(L$u?-8znyMV&<L5XNQ!J`8xJ-[/J:UC:&::y!Wdybh!');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
