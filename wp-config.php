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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'e:no | w35z|NY:kLb|FQE8&8Z3$Nd/JW]}yH EV7b{6GxY=k)XD>#+x!d<:>QC1');
define('SECURE_AUTH_KEY',  '~mn{pWErjsP^SvUl//f|fF!X<j^yFLCpKhs%XZxCN={=6S`xna5iZ:o]RcnUq&H?');
define('LOGGED_IN_KEY',    'L8JYy_#A+ MxfwiOj>.jpqIx|Q+q`tTr[gJ}$%:mYHf7&6|A3~}3ia222v~5_2gN');
define('NONCE_KEY',        '_$?+qTOA[.D1=xQM@I=w{gUl?aVXk.<4x8<>Mz&-=gei+<d-}e;)(~x/T.[[u4l{');
define('AUTH_SALT',        'T(.lD>o_dW&~|v5-QE|s+uW0c]|Y4zdeXS|(K(S#Y~[wVsPc+5MmX~s`5hSrt4u&');
define('SECURE_AUTH_SALT', 'R~z7vR(2^qRsw2uw0x<P1W:}@h%HWxVzIfVA5$V:QewRtnG0X+)e0Z#aR |06&hE');
define('LOGGED_IN_SALT',   ' `|;~bBR+V;b 6xRym%*@^D:;+%)hJv1qnl}JFarX,3WkS;N+N{fx1F}CA{[iU8f');
define('NONCE_SALT',       'l_ F3z{o~`8K5XN!DD-`nT[w7{7Yma%;&OL>y9X/Pt$gl&F^zhX}uy?bn:mrCto[');

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

