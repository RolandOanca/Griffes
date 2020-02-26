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
define( 'DB_NAME', '2019_griffes_roland' );

/** MySQL database username */
define( 'DB_USER', 'rolandoanca' );

/** MySQL database password */
define( 'DB_PASSWORD', 'r0l@nd0anc@' );

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
define( 'AUTH_KEY',         '`Y0#`ZFMm[w+lc@:2^bU,.N_O|<alWlE7na(aq(e4P+iEEt9Y,TXX~L+*Ojztc]T' );
define( 'SECURE_AUTH_KEY',  '-g,o8k T7h`elg,Obcm&^/0QgxwyY0sxJ5@-)=x`HAiw|pqKJ~)2(( kil5@u~!Q' );
define( 'LOGGED_IN_KEY',    'tY>xw(*^Zo]W53?Q[TCB%DOl6N(3&Z2myj(Q}t0=css+,q<E8BL=FJQ.~dRo9v_^' );
define( 'NONCE_KEY',        '3T4>,xdFjuI+p!3]3DZ~pQR{0kU5stg${E(Z;g@Z(bka,Ek3U81DwUpEm}0m)I$G' );
define( 'AUTH_SALT',        'Y}dC3}|MyfWVEYRtfpE$;E?A.;;NGcw~|U}#*HLlNZF{zO&I,uO-+%X];w-3bgq2' );
define( 'SECURE_AUTH_SALT', 'MX?6T8GHam{[paBhhGT@.??_B.Mh&jKRw4jkW]eQ>:pm9E8lbcm~hNY T/&/r|80' );
define( 'LOGGED_IN_SALT',   't!>sv^Z<)f$*D+o]WmC(D&=T^n(j6;er?BbrzOUcjmGlYTy(^koG7Ez A>fpybC]' );
define( 'NONCE_SALT',       'A`hRHeoF{vllm6G*EoTn:F|Y[$M]jb`b@eGF*qB7Xls},78$9Q-iy!rLt%:&XgEm' );

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
