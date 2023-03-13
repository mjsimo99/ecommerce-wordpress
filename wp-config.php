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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '^(| A}qD7+[VXNK;DI?rRZ2NB9-F!<igI<MI^=|2EJqq8p.ap av1!kTDGm4Lgp3' );
define( 'SECURE_AUTH_KEY',  'lh)G_ }pdMn5kDRHkc[COF0Xy8Yqy*quUg$n}QCCb.!wh}KXAuc~SoDDkZczV<|/' );
define( 'LOGGED_IN_KEY',    'QWoA3Q}1aj=;s.yodp.g%I)]f< ,mMe0O+e60oFzAGw?yEDH:|LC6Hz}+DYNUU4O' );
define( 'NONCE_KEY',        'Tt]@}q:kpyM8,LIF58Wttu9.2ux3)E]eR_sH%MYjaDelm9;v[=oAkx]V%`Emb~{E' );
define( 'AUTH_SALT',        'S])!Bu/P{=E7#*&_@3J{V}PiQfSUC(5|x`L~p%_Ya%AH& EhURzPd$Mz$Qyb[Q 2' );
define( 'SECURE_AUTH_SALT', '[!WDp1^%|/e#@~N+Gvb#u^y`6ZsTe=v5)TMsazfO1)RIK>$ nD#L+Hp>sC`W/Fu^' );
define( 'LOGGED_IN_SALT',   '>2L`OpW18htLyCbdGqHywBFC,B<Y*B+Z-n|v6zqHNa?#DaN0koP=qN4&@!`MdI#7' );
define( 'NONCE_SALT',       'K0:<38=eGukyZ.!=}Ls?H5Qefg]RR5~@[}2+Qv4oE9j$K5WQ-cc-75<jNvar:%{B' );

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
