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
define( 'DB_NAME', 'eronumaj_eronume' );

/** MySQL database username */
define( 'DB_USER', 'eronumaj_majiero' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Majiyebo73@' );

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
define( 'AUTH_KEY',         '-B/<)581/9SY8b0e5KRC}MH#~k~`ithkOX2&g >?LW*82]SlsE| D&s$812+3,y ' );
define( 'SECURE_AUTH_KEY',  'jw^zD!5^(5i^3yEy-X;0nO}D;x_1v8^.) _hZd}bv.YI@nS&($mnO7-sQ:&knh1s' );
define( 'LOGGED_IN_KEY',    'A34QC<677R$T8BjCHe_0?#Tw~i|*-Zbg&Zv}jQsq=Ks/jn1i88`~)r-i% ,zR 3+' );
define( 'NONCE_KEY',        'ooRTHCblqM~yN^4B*r/W1WL?H!%fvEb~%OOLEvdG.RHR|E5;zo)T.IxZ[NA]Z-I`' );
define( 'AUTH_SALT',        '@,qD$Vd.W>If~#/@hYPY8dIRX{vX>7nzIe0uu3,R/=%k06Q4_uEL!MUk;tGOdJ`P' );
define( 'SECURE_AUTH_SALT', 'K*{D]=DUrxQRiZ!H1=X2d)qd]FcitsNp`2zXB~RW%h5?m+OlXko ~-CyrI},u]1t' );
define( 'LOGGED_IN_SALT',   '8*gxa{2kLr8EiMj%M/3V))bo$*[fjIIl0$<</ggItg6}2O$?~5:>A6a}wmfjHc}K' );
define( 'NONCE_SALT',       ')^Ms;qg+ &DkK-VN= `ouqtl[0g6XK#R$.;YR!]{+~X8UMZ({<}*4FC2Q0me A%P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'em_';

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
