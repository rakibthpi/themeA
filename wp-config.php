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
define( 'DB_NAME', 'themeA' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'G)}6|#hL@-uZ2!$Q~!Q7AQ^%c+1z2(SM:,=a7q2Exgk}{Mz0+V6zmH7d_QaqEDpW' );
define( 'SECURE_AUTH_KEY',  'lRsp{2^Rd:T22thjTR tnE}V}G9=3w0B!.kyF:2=rSD4U7JS@H~|5}PJx5R/3Zfj' );
define( 'LOGGED_IN_KEY',    '[ b_:%da~A5L:&Wx^7Q&?B+*$C/QE|vnr#/|/pk~[ 23y-eatnWD[@0M(y9A9P;q' );
define( 'NONCE_KEY',        'V:,34yyf2gQ5^YeX6;f~wob55Qm~O9_)l=,/hd3-ikB%&_/[VZDoTfqDs+I,KdpO' );
define( 'AUTH_SALT',        'X. pu]Fv!m1c;ZEu@E3iLQ(iN[t(X(r[d#>Gm)PK|nId8/KWAg?-85f2%o~an!6d' );
define( 'SECURE_AUTH_SALT', '2|})(i^G}.X=FVQ`e(%-OW:.~(/L%-`#8**jgK}EG`..[+j`^/`}.TEb=?JOgpi,' );
define( 'LOGGED_IN_SALT',   'sKIh`[BN.[O<?g:!:d$k5d{po>!P-pKJIKOhC;e.0x`9>J,i*5,DoupDLW( [5#Y' );
define( 'NONCE_SALT',       '$XFmxW7~22Se1LCH7H3:VUrQq{*e>(Sm,p]?R`L+Z6z:VM U&bGYST7xGHE oU.y' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
