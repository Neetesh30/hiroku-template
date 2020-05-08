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
define( 'DB_NAME', 'cBqK9FoZ5l' );

/** MySQL database username */
define( 'DB_USER', 'cBqK9FoZ5l' );

/** MySQL database password */
define( 'DB_PASSWORD', '7qM3huweqN' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'g-DD}g[9SeU!*./JXE)R!B:y3g&{^(_WdzETxbMPWva` oYc@s~i/9%j^qW}cJr5' );
define( 'SECURE_AUTH_KEY',  'e(NLb3QorTHa|~Y{A}(|W55 ax u(k?9ld%Ph*8ki5phzODOHfP*L3%;eM9Hl+a[' );
define( 'LOGGED_IN_KEY',    'UA<sQSw6Sd/>NS!g4qXV(3[G0Bne]JjyF#=O{S4RrsLGz*LcyY^WGruFoX^Ojn7p' );
define( 'NONCE_KEY',        'CPZ=`/I?9[Qj)j/u;;P+h=FQA)*m@,CX:}uM!TG8 )~rNM&d#O*dLNE,O<f[,;X@' );
define( 'AUTH_SALT',        'U4k_^E-3EE-|Y5!cGH7!gV*:uxww/^Nk,vdc5~_J?~D+)0&/$N7+8ZTP%T]cZfty' );
define( 'SECURE_AUTH_SALT', 'Bz:GD}AMZxa[}SiX;7eQVk):,Iu7VI5Vn6Hs TjZI]_uq(PZ3nIT,ImBxOysqMlv' );
define( 'LOGGED_IN_SALT',   '`xURV>$35+;7*zq S9xNqxW5A,_QIQ`{7 ~;1 NmNjX-qED<oIpeh}n}!0a/mTv4' );
define( 'NONCE_SALT',       'kAfqgfj0[K:g}%}{_OQ2@- gaQ-b`QHZo}4a^D<?g_Kxk%Rum,VZ96f=ASkvw:F1' );

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
