<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', '{{DB_NAME}}' );

/** MySQL database username */
define( 'DB_USER', '{{DB_USER}}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{DB_PSW}}' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1TQn-Jc`e(Fr(gn_GBAT@e8j/r~^Z)chaWId)x8Bc&@u7{pnGoR2n1]Sy~HkdXj6' );
define( 'SECURE_AUTH_KEY',  'aNadM><4W@mB_~ j>Q?c4?9yxZi;ygFvY/MxY}`j9h4yi}b!6cod4#HqJBW<<HB!' );
define( 'LOGGED_IN_KEY',    '/DCPe!4O943tS|mF49_YEY{cdHDX}co58/*xU[P[IHV/?r6 .FTyLH-W&|jK]8ol' );
define( 'NONCE_KEY',        '6HxAkx$8mnA2PNg7A48tDp9I<aUawPG|1w8LWxc^?Zv;S6N*R==@hDmp..gG<vw^' );
define( 'AUTH_SALT',        '%Hb7efpd,,}/$=,?,wZ$$>~(aMowqk!ezqC]v1D6LEIu&R+%M*f?LY7y#${vay[V' );
define( 'SECURE_AUTH_SALT', '81qaEup#gG2FqTu#16+g|P.QSpb!3i)zB}|lQW+>+0!3N.~6.b]lmhAs7iXw}p{i' );
define( 'LOGGED_IN_SALT',   '[nAvDL^w9v_1zS=JtmOx&4rn&aX$Rd,V;~s+<gxb<beX,87]`XK p`SZ6tOr+I55' );
define( 'NONCE_SALT',       'DD+KAtCHdpI$-4N(q+E97.Vfv][k+E$A6VFU;Q: jWoeALXPi&P6Q4UZ&w)a87oz' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
