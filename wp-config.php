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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woodland_wonders' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'homerxcx1' );

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
define( 'AUTH_KEY',         '.6x@Yj&M2JL5zF)]5UOPwxg:phE/{Ux;TYdw !*e`fR2 e6K,DZ5J$S>X}UiyEng' );
define( 'SECURE_AUTH_KEY',  '(LjFGA8<+C~l^L~2CpoR5pG<KbL>^Fs1hl-dZ?B_A c~}u]1_[I Rm>6d [AE9iK' );
define( 'LOGGED_IN_KEY',    'm/Ls%8=~0v*uPc=^tFBu!y+j/lw?RBzn K?Rh`7U}1(d=Ii--eh)Xd/nZ2XivDGz' );
define( 'NONCE_KEY',        'V]E5]~%xuuD%cEj=T1+M[#FNdNcN>m4OA5gs98>s!@H%cK@XlvphbKH}JA/@-za$' );
define( 'AUTH_SALT',        'Q(H~Q(L}B8xSY^.Qqj8]1nE`r .;%7%Gf(@cE>A}+AR,AVhC6Q5E9o|=tt]hZnTR' );
define( 'SECURE_AUTH_SALT', '_4^y`}!q~t55Wn|%<vZG(u1S}(2nTM+v+@`jZc.);n!WX;pd9?7.|<TZ T]b/(4^' );
define( 'LOGGED_IN_SALT',   '}dI J[N~qtf?bgC0.>W*1%Eoc@3j+UJ6.@z#++x(A3cnDH`zy~4j-4<p0+G[(cf@' );
define( 'NONCE_SALT',       '*Sw)=f{;AaUj+;-t!vmo|~3Apg36VSg[@+Sa7y?!93uh:;EHxv%/JzrgiO2pyb(x' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
