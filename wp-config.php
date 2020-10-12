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
define( 'DB_NAME', 'jongkoding02' );

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
define( 'AUTH_KEY',         '0N=aT}pIXR2P;|mjaP[G0j7Q0)<g<%MJc7&P?L{KUrkO$Kn;)[pV^?!K){;gDu/*' );
define( 'SECURE_AUTH_KEY',  'JkeYL$Tpj23C)7A_+wQ&e!%$^H?o)Ja#4;I@1rPg>j`-vS<b6$:Y2.eV|I?^A]B#' );
define( 'LOGGED_IN_KEY',    'q5F(jq!-oz{M.TSQkwN4A:HnF])S.f8`s,u+?/{D~B!ES`C3x2z61==i%*0X5qw3' );
define( 'NONCE_KEY',        '.t#&$G[P~f?oo:6tD_v7(f?zDnG2Ir,M%Z8>Ne3J5F<v*6c#@<@WO:B.dP<?6UkT' );
define( 'AUTH_SALT',        '/|</&?TC_IV|a$Q,Q>g4v/.q+~rA% 2aHVB}lcV_]Qlb  3bf1!G&Va/|,IK^6 Y' );
define( 'SECURE_AUTH_SALT', 'bwp8(ktlny}o3{)&^edVL[?&W(@C/VG#5l3t?a(bqTT JM6$(dR&DU13ZQ;PGk~R' );
define( 'LOGGED_IN_SALT',   'FKLV~7bb2JNyCM0yU/4aW_?5=^Ty$N*ExNfZ2~.&_FUvRmLMkNHOm`t,)t_.8v,q' );
define( 'NONCE_SALT',       '? D&J@C0Y^c0G*T67*A>.*DzV#i@h8ic_N9c{T5j[.OjGDx*@E#5:-Oz[woh{zm+' );

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
