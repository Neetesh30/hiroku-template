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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_media' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uuum$XMtM|%6h|,qtWRZ1h6n4;Y6^tWv^T<Zx;:hz.lN..oJDiml BERX-,TC)Sp' );
define( 'SECURE_AUTH_KEY',  ':.:e>a${J+)7VbL1y}4>LJS|Gp:Ed|-[8)^b,P;L-1sLLgm$ Q}c7/($fk1[U>[!' );
define( 'LOGGED_IN_KEY',    '=}3-k<By8:s,xl@&^K{_u4%U>jlfep=m`XROw`q)W3cdls^?{y-bGw#L?guSsX{2' );
define( 'NONCE_KEY',        '^ge:QG 1IzkcaDf|nnFUS^Vl?_?bY~^GXz7*x}|u^Gr_RYE6VX@[P[hh@,YD32JE' );
define( 'AUTH_SALT',        '@l=W2}/GZCMx,Be;+Er*q1PT8qpT%m194eaS7Ngozf4O{97vQEQ)x7xGHi:Yk;%r' );
define( 'SECURE_AUTH_SALT', 'KVl:;*@`wFe?M(:|WU5V+mMG%BEOa2ghb/=C[^P$1_E-<N7vN{S5L)tbSd h@__v' );
define( 'LOGGED_IN_SALT',   'wyMcWW]Db7;h8Tq]p=kp<(wG]L&)xDg@W?=SymAjGIsq^WqAP2TywjJY@O;c,(Ch' );
define( 'NONCE_SALT',       '&%>n7eLvUxLai+7|X`*-tSNjpK/DS_eH_wyL*_R@O@w^)Ar`PqF`fv@[lcM8o 2)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
