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
define( 'DB_NAME', 'id8554356_wp_477bdab992dbfaab0a5b72e874518264' );

/** MySQL database username */
define( 'DB_USER', 'id8554356_wp_477bdab992dbfaab0a5b72e874518264' );

/** MySQL database password */
define( 'DB_PASSWORD', '5e6846994d53cd88ff139eb26b1fe1338b614dcb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '0-vG92Z3t>D~G6/ P5aM*pgG<>7dUtc/9ZocgpZRxCIZ|^H%FS$qFM=-FSM2@F0X' );
define( 'SECURE_AUTH_KEY',   '}D4tds$fsR^p)v^&*,YQO kVub@)m:ZlbiZAd>Q%ZpW!iU$vx<@K8<07z)L]OWvK' );
define( 'LOGGED_IN_KEY',     'aR>r}$>jcT)f9PF@(}]G$Re}efpPAp8ke*28+oZxf U1EQ;y$u68L?1-BT2e[S8C' );
define( 'NONCE_KEY',         'wFZ`mxNtsVqbQ?Og;47,Nu/1Lou`X_@ E$VxU,|K`rb4WlO.I;,F ^k&.5?rs)c^' );
define( 'AUTH_SALT',         'C3FW&pw`%,2w?L5E>^CHkuJrm+0=LR{=mkDbC{bx|7{]N}c!oj5m3-#>fRaUGHpQ' );
define( 'SECURE_AUTH_SALT',  '~%#YD&zQPC?z>nwR)XoSy~o-ef^_xH:|n#w8R{GaK6s-I1O<BxTygbxK;)ch=`ct' );
define( 'LOGGED_IN_SALT',    '-JUyT8JK-bh!shrn4JIX]2K0va;+ufE/X9pSX6-fD{eaVOnB.q;zU]02:-0B%MN*' );
define( 'NONCE_SALT',        ' I.69(s(V;^ghIy$}8p)kGrU#$f+Zjg3RW[NUtd|-(ZX-+jUm&lADlH%B,5[~^j9' );
define( 'WP_CACHE_KEY_SALT', 'l<9>XuqIUle@T4_@GG0_5RaJU#HWHs)^a;.uUoFus%#vN)$o@I(uTN*jvU+Ba{$^' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
