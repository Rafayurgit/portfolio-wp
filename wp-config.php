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
define( 'DB_NAME', 'wp_portfolio' );

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
define( 'AUTH_KEY',         '[qSMfJSEdqVa}WOu=Cl:#c37z]dmz}o99r=aMu!zjEm&eOT+HGr:@40R*3c7m+g(' );
define( 'SECURE_AUTH_KEY',  '=hz=%O#$ADnW=qA}a%n*=VV$J-F`42#%`/wY?j/G.PEd[)2W^xdDLyY{?>qi71%z' );
define( 'LOGGED_IN_KEY',    'Zc4FJM}eK/ #> kFhp b=m `^812Ef!ur<mw9?|6**O,}9h4^d+zM2wkAF<vN*-1' );
define( 'NONCE_KEY',        '8lwti[k)nm-k-%>33s* }d-&kbss}(oLz.`77 -Z*~4VAPS8 d$u[JP!x%Rc-|3_' );
define( 'AUTH_SALT',        ')<Xd|j]#P1aND^kp_DCe[vjuXx(iU6-0@>j#ovJK`m%fSo=hksW|0l+Ii@MgYHEQ' );
define( 'SECURE_AUTH_SALT', 'aR.*N-zJd~ajj}/b<8[3jLR8ZJYRJ9vZl,+/v4Zc$$3p1xJk;+ k*p]JTA,B J s' );
define( 'LOGGED_IN_SALT',   '9@Z(TrEM]7~:zkk?M_ET@FB9lPEKdaH/eH)nj)Zj#5lQ>+n8?xdHrR#8a-u|a,f/' );
define( 'NONCE_SALT',       'XgTxNWMM*YE=4)xOI3_MPOUlEP+O/].j9$l`ImoNQ-O+o_-RsgUw=jpvKE=A4w?<' );

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
