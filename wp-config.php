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
define('DB_NAME', 'sarajo');

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
define('AUTH_KEY',         'u]C+ohmL?{ DM+CtcOcdS9YqXvvcb^=dIrR5~W=5lc%&u*|7yrm>^z1@uZn^xl|?');
define('SECURE_AUTH_KEY',  'iflf7<0x_rtEc$*y>>/9>w:zt Zfg<L0:nyWbR}smT[#G-1t;.aGQ88;B]/cc@xb');
define('LOGGED_IN_KEY',    'H!mqAXMKi(F_|3 KaGu(wlTkiq 5vWs:wC5f?]Uk:4p!i!l&0@!uu7?+9P,MNV=2');
define('NONCE_KEY',        '6!ydD}rix/#;~n8kV3y8iMRpr Qr#9uvx |hbMNC={deN%79P>W-HkLTWJE`1hc<');
define('AUTH_SALT',        'R,RCVQI~2enw`[sFf{E]j|R_X^wS3V+uFT%;.}!JpngVc%>?tOg4K{GJbl:Cv Jq');
define('SECURE_AUTH_SALT', 'Y4>8P:qkAQc9HZaL1A|yXlO9:]Q.yV]F[*!vdb{iWe-pEXEkDLMbzVmk`WTcI^7(');
define('LOGGED_IN_SALT',   '8tggCfd?:KA]X*%LAv^;wTD[%VtztYCQ^D6K_t(f(4K3A.nO9_gZY[c&%itiY/Ny');
define('NONCE_SALT',       'cM6=u3M;?;!-Yq:m|H_,Ex`z$cl~|k-l 7{0b{@0D^5-~l*p2ihMRsTj{XdpTh7{');

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
