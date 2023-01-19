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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ideals' );

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
define( 'AUTH_KEY',         '/{KH3^M^|l.5AV~$8r=W/&#<(m&Os3NMqCpfM_!KCb5o5Mi?h%KxzE=x5ol%Y%rZ' );
define( 'SECURE_AUTH_KEY',  '6;SMk}2{A=n2ND&mi3JGk+J2`St.%`^U;w6P7m Rvpr9TJz)X_$nAVl(tJ!jK&ll' );
define( 'LOGGED_IN_KEY',    '1W:#V/-*Z4Dfj}i^)r>r?)%`_up3briCy#%<Jbc,`;QAaz!Qi~`OxK>?L$V*1?E!' );
define( 'NONCE_KEY',        'g1!X@`Jy%$un!B_1}zSe7.pE`[h-AzZ4)8Ta?o*1-E8<b^Uv56;DWx?.=f`sozv]' );
define( 'AUTH_SALT',        '0t;p^!Y>ln)SzQE9agwa0!%W>}O(^bJd~EmP4lz6>>!+c`AgS?ykRjB,@/^Hg>3~' );
define( 'SECURE_AUTH_SALT', 'aJOx)[H6dJ;+?OBrh89uMva4KH4O`X=o^VQ;`,N:iBI2)z:8NK(1?>%_7J4g(I,{' );
define( 'LOGGED_IN_SALT',   'W6xzAt<W%lsPAw 6WWft!W%k25TBp.Mel Ve0<uz,>Ij}j c&_/}V-U%e*`K)z{g' );
define( 'NONCE_SALT',       '_zXdwc@`d|IjZ`R6U!BFOiI%k$3Y(sm)dxRH&x:nDM$]_2LIGiyqPq,jkWhHw4`~' );

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
