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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '8`7x(KzE%wF[gA)(`*|d o=E+ln0=pa>ke(*R]<S9S`LN1^cCca{Q{3x0m6g;cC9' );
define( 'SECURE_AUTH_KEY',  'qh}0hdcO.+)*!9AKpVZ!H0<a}mZ=l/}AZ~mGCeLFJ,FbK#^JxB4=bqS,A@I [!w>' );
define( 'LOGGED_IN_KEY',    'mC8ts&U~lVm?OeM?yI`ZOVpy)XF(Mp(I$]O[-NofIY6b,~D.vLjB_Xq[;oNtqh_l' );
define( 'NONCE_KEY',        '&7{bZiJs{b0T8(xbF(-Hv0$MGTw>t^ztb{e>97.@}p;+cel 2%8+OQRWg,5I3IQ#' );
define( 'AUTH_SALT',        '(b9eYTao!(5VWV([LEKVWB#X{1s2iBnp]baL?/4+lWWpM)VPi_whBA5>NXG[b]]6' );
define( 'SECURE_AUTH_SALT', '*NvIb-QjOuvN$DYVqK4OU$O;u^)iE-;?yq1yDEK-BJ]sVku5,~:z5V&b;$%)b-rX' );
define( 'LOGGED_IN_SALT',   '~(GP<,?n%.C{%|oJjYsTDblPY0=Zu.)azTZG.A[g(F^XF+?|4tQQyVRsz2ITo/f]' );
define( 'NONCE_SALT',       'odiQX+J3SjpO|EmB6yEFFjaj3uOqLTG&Rn+4,Q ,vdTszs_]w]vKE$$ol$@{-CFY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
