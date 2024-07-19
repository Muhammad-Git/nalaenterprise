<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'staging_nalaent' );

/** Database username */
define( 'DB_USER', 'staging_nalaent' );

/** Database password */
define( 'DB_PASSWORD', 's2luox4rz8B3' );

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
define( 'AUTH_KEY',         '@Q-% LFo%P{B3@iC[kwVRZg!$%8f{IDV2p$l!/wVIFi%o&vHr(o=&@#s/WM$4PBm' );
define( 'SECURE_AUTH_KEY',  'I,d[pT/yXTUaKPGr+3zEW yrJ:[KIohkB b!Q_o%?I~gq<lRdbq.vj1E>aQQFfy$' );
define( 'LOGGED_IN_KEY',    'znb-Pr{a7?+3()F|t=dJwdkT=nM>i?3&w_%Lk^$Odcc<Ih|OV46C<jG]rGQ5V,=.' );
define( 'NONCE_KEY',        '-}-efwn]Dd#P(URQmlGIU#k;)&]9.kX($wSbu%yJf-&Zjumvt@GufSu)?L;:Z0c^' );
define( 'AUTH_SALT',        'E{(i(7C!f:w>d%5Yz{0!0-8b? `Z5H_;i5Ug-hv8&amwNI*PD$JxGOv1p/GA7X<+' );
define( 'SECURE_AUTH_SALT', '3;v7wVtYDc[9$!u<)2|(HZRpYa{Sd_[p}R.g/3Z)v|wv4Om}#^[,oy2],.?t{J*O' );
define( 'LOGGED_IN_SALT',   '?zedcfSch??{BE?tpz;K$bCt][!K(EKki+{!9..3*aPQRodw#a.jP*PHAAn;d|1L' );
define( 'NONCE_SALT',       '2gkXd}i0q@PckvG}l eas{#.`*:*-z7t=,ah+qMLCy)QUwc3,j)1%U}>:|#V:~p.' );

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
