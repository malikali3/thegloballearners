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
define( 'DB_NAME', 'tgl_db' );

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
define( 'AUTH_KEY',         '~ROq:Uu[LyaRn75H*V^y5]SuRp$3)rR)XUl.N<RQ[3mfTh^QyFJyvU@83w*2h0S ' );
define( 'SECURE_AUTH_KEY',  '*-0uDan^2Qjy7JR@D<SC@yQ+PFiwN$+tj!S|YH)>qT6ij+bNf)P+A}%m.Li9tKJ-' );
define( 'LOGGED_IN_KEY',    '8qnD5*>w^R3rH~Ml~.`DnId&nqTJGY8p(jZJcMb,OmGmTm-mVatx,Na7+O*.[#DC' );
define( 'NONCE_KEY',        '%|]K{bUGOT5%OD!|c$17mXN`cj-K>gn1Z-36yfwF]f(JM&yqhP7K#T3-~(]FQfw<' );
define( 'AUTH_SALT',        '?wVwoMXk$_2#--^q}w8L~@Qsyma7:j9aw)Tt=6k5@YKLB&G|e%v4hmRC?{YQOF^v' );
define( 'SECURE_AUTH_SALT', 'uQ,mK}Kln)@L!r5{F^zjtnd.tD n,lv}mkNP;f9ZD<|3}fhSp?+Aa$!2ouC]>pO{' );
define( 'LOGGED_IN_SALT',   'h}CW6o9j]~.6>Fl@:lx-)D/+>w2(*yc6x{cK7@2Z75li(gdl-N;h^ji^hu/qeO[D' );
define( 'NONCE_SALT',       '[TwR:l~l>ICj)~N&FEm3p,YJ3?zU[BvhUm9vj}}5WzKn87[6h&83$2loGsT7F5(N' );

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
