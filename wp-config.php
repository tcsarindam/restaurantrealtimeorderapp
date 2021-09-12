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
define( 'DB_NAME', 'gloriafood' );

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
define( 'AUTH_KEY',         ' yO8_%t:GUXIG9 tSL4.x j/DY$S,>HLbCSD`/<CF1Ck;]R9q~KA ~gP/G=}Zy)]' );
define( 'SECURE_AUTH_KEY',  'K3{vxc[-8w81L?`mK.LOqO@!dqx#26?umb~a1V0=/m`ZJ7X.GMS?zm96LSLbt%fK' );
define( 'LOGGED_IN_KEY',    '8Ut#&wYYkiA4;S>j,V5!}Ol2`2Kj(,.T,2 YKU}d+KIj{q?s+T#o9H~G/yj3OR(8' );
define( 'NONCE_KEY',        'r8Wq4<ooMjhEGEGf:}pOAij_-U}5*;zCMc5po[ItD{}pK2;JYw~a=@]n=A,W.E&~' );
define( 'AUTH_SALT',        '.7w>ORyAga*T-kd&AxD+[ICfFh9 1.w~M YWU0xd$%seaI{`hZvj6f?)K~SXU,t:' );
define( 'SECURE_AUTH_SALT', '6 EUDXw#N@qux)Vb*rKldUrz1>fdAN]-jW6J6f;J-9nNVog=S4:*z.>hU:i9l4XT' );
define( 'LOGGED_IN_SALT',   '3L,W[g3zKuC>f?D4vDXy:+Pb328tqB`i(/V5Aqo28byU?+{1a7EtDIzt7xL&dX$^' );
define( 'NONCE_SALT',       '+O-.hcla$(%*l_IR.wK-]BTG[evRB5BELGvda.F}Xiv4JfP7RsV(m@2-3F_oma)h' );

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
