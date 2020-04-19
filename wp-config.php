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
define( 'AUTH_KEY',         '3^0o3}u9Rv^AeO=W.Ayx<OUqd}Bz]OUB*@<vqqww$I}y,VplWk[$5|+q;rcyt@$B' );
define( 'SECURE_AUTH_KEY',  '0(*7wJ~Tug^b5>HGEWis_Cc{s![ ]5S.]v4!&eWM,rf}-fB%TIGh(+XT5?]yN=qD' );
define( 'LOGGED_IN_KEY',    '<CU&9kbu0BM%yU~ Ftq5s>8&0]o[Bdnn1}2Scmz5Bo]Vk7[kXimi0}C~:zsvop$q' );
define( 'NONCE_KEY',        '(T*}ca##aXe ]cDza>Z_~szrU(y(<:~RY@Eh/|uVra2tMw1.@+FueNND8/J5VlVp' );
define( 'AUTH_SALT',        'u:tB$Km2VqQcdR_0r[r4(-;.U=-&zKrx*{-DJm9MYFl~h$2mp6ool]Jfz<Mw|I?N' );
define( 'SECURE_AUTH_SALT', 'WI!+1+jSCkto[#V}9kx~s2^k&ICZf+{WVp+aRIS(2Be.ryh8;7y&Rwb,,)9Gs*. ' );
define( 'LOGGED_IN_SALT',   '>oOj,q%Zg(Y$5)% <&4C0l;kuB+W3|gD<BwQCm0pwFWK[vK !l4f4;_v:2N3/R{z' );
define( 'NONCE_SALT',       '`E}>Yqh&86c+u;uN>K.7m>XK|=G?LaBaj#5o0d?p:AQKN^!</_t;y~VStU1%eT`Y' );

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
