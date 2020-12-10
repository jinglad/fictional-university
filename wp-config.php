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
define( 'DB_NAME', 'fictional-university' );

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
define( 'AUTH_KEY',         'ZiPtzTn/@W8E.!S-Ck)(]9gg~U[(NUA?,_1Cy_pz7B%?j-S?wH[UCL+%^S7NDQ-)' );
define( 'SECURE_AUTH_KEY',  '~Y%IzCf7Q`);2GTMT{N5QSY8QLAs&>K,Ft3urQFXhtNCUv[]g8%d^`:4)-)W1;h)' );
define( 'LOGGED_IN_KEY',    ':tWZJf:/n`&V*zn$QN!7}^e)5UU,]h},bDyus+_x;wqf3sT=wL9{cB.gh,Q#frZZ' );
define( 'NONCE_KEY',        'l*-3=TB^]!)wOdoH`wB(z8iLeE(8NBiA]ciY*Rnkk0f8*Xl#pz-BOEW49yx>y;])' );
define( 'AUTH_SALT',        '#ShQvQ_O?jo!^|{0m=O/8YvIOE3`MR8v!P3k7E74p]LvC$ppl#43,j(#s>:HtGc*' );
define( 'SECURE_AUTH_SALT', 'Taw+yi25zqyJZ3C)}VL}rW#M;m:w:?Lzd#s/t8?Za3&Z? PXch[ZiThhk0cMnPlV' );
define( 'LOGGED_IN_SALT',   '_)dt0ac*!ww5ugUZ9rh[|@?myw kL~95!bOUwowQ)PtDf&}J53*4|.5yY<>tBQNf' );
define( 'NONCE_SALT',       'v7Xc*}4op[&=rx;q|XK;#>vm|~vp/ghH6LyBWuV/QU!uI/.n~rMu)@yN5;k+2~ZL' );

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
