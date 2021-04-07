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
define( 'DB_NAME', 'ilianacasas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'fRPA|@UB 7L5&H+mBO:r>BA&_5^j-dCUN_^Bi<lg/&h,+V[Lk79IVql>I&0SKva_' );
define( 'SECURE_AUTH_KEY',  '83wwo0!TKp,~a)00(KhN4G$8M5~5P[9jB3Ju-?4ksGYVQ]JS~V(rR9w&.N]n<tk9' );
define( 'LOGGED_IN_KEY',    'f8,4bcX,+ cujOH!`B:)}5R6*[~9_v/0^/%A2Hf9CEiPiOP&r>g[bJFm4FY^}Ri2' );
define( 'NONCE_KEY',        '8uNt;#D*%h(NPO3[ST+@pLL`[N.-`Odr= 60yrn#rzpD*F7zcZVSgib`iMW6*opc' );
define( 'AUTH_SALT',        '3QiW3,=d~+Q>8GMSBHsmY)ESWIAo>s`QP/hz>@m)0/nY,uJ,~lgoC{!xth<w!:}>' );
define( 'SECURE_AUTH_SALT', 'i7YSB}aMadm)xF[pDu(m0C*rX(vZT7NIeuL+;nic|M$@`2BTNo,jr:r7p<N[%b;#' );
define( 'LOGGED_IN_SALT',   '`f0L,4Sv*yj`1u? gn8TB5p1mqnmlj@,D0Dc?o6Xoe2H gr}P1erBFtH-7Q]W]iB' );
define( 'NONCE_SALT',       '&Bowd Z/B(`BX:>d$t7l=W8FR%oc5@8vSZxCO1/O]IC[:{qLD?Fd_fO7c}B@ZJ#+' );

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
