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
define( 'DB_NAME', 'Antalya' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}-e%q*KZlnWwBKZ$lpXuZY{?b 6nE%&~1)N_6w9l[AT8WT?vKid}7ZrA;]KvK*en' );
define( 'SECURE_AUTH_KEY',  'qdV@{9zSO8V]&^(nA^$rz|4ITsuanM0,XV//Kvq}p}?S+/GG||cZCa@AA~%jFQqK' );
define( 'LOGGED_IN_KEY',    'TTmQZ_4FN$#moH!@3^4;ph)0|^YIG`+M=plFJZ$>bTg4hq]CAtO,(%EXr]HW&2+#' );
define( 'NONCE_KEY',        '|4lw/|Jxx1<!`v980L3rTPG+VOG*L gt%to}*9Cvyz79<19Nv`W{e^;S>u|S:k;/' );
define( 'AUTH_SALT',        'l5513RWiH9>*B,wtPHM)(A3.coD2Xy%j@0#(alu/coS^E*VRDkTomZDk9u?D:co ' );
define( 'SECURE_AUTH_SALT', 'K9a/c5.2zN/r^)KtNlRGvM-yx}}eUHiz:fW8&3aW6HPmrVv:.ZZTv7w^$9Fe<[H@' );
define( 'LOGGED_IN_SALT',   'yp;7aU<P[,^Yc#uZO^4saA)Qw/%PMdqtDPg!sOq(Co!u#y}Ne<;K8e@f7>h+ffW)' );
define( 'NONCE_SALT',       'wiLv`O#kf,r{D<88FK}n8n?qZB<z=U-lA.~]ek[U>H*[DuJJ(#?(b%S}~B<kC fU' );

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
