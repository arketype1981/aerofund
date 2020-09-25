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
define( 'DB_NAME', 'aerofund_db' );

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
define( 'AUTH_KEY',         'M41vd|~rxTvXC&s~5%nX}Dg{J=LnB`yq.{UbQ=aBmtss9Q)q~DoZK Xwx^GNwe@F' );
define( 'SECURE_AUTH_KEY',  'm^fiupp`cQX d8;~P`*u=Hs}XdolSJL]dtNVmQ$<UU#lJ4hzRX5Rze}9a#NZ^/&K' );
define( 'LOGGED_IN_KEY',    'Kr$#3B+9>|Y@_:4fv1?wE!9wHLk0vNVq1y<7>t.qLz4X3jPz1yPFV#|7f3,K8T<`' );
define( 'NONCE_KEY',        'LaT:*?^Ug(7)VMQ&-:&#Z$?-xSyNP=ZN#{7n7#;MpJ|;9n?CARFEz@2EcZG-O|c3' );
define( 'AUTH_SALT',        'Ez+n!+>[/>53D#ShTq@a38e#50&rLy.o_vu+By/Zc0}fFJ1oQg:}/ia-+=6D[CHi' );
define( 'SECURE_AUTH_SALT', '1LJsyrCjz)|]R=/LF#>wC;@]P9[-z$1*:[N~0*XTm4x=[jp3J7V}1|l:.o?GGE2z' );
define( 'LOGGED_IN_SALT',   'bc]| e3#iabQAoItS133VgX8VRUn(Ek*3t,=r3H9QgDWFa:45g>-~OFe/Vz9px2%' );
define( 'NONCE_SALT',       '6BQ{i@y$=y,IiXE[tRli],lm4i*V5=X]?0UJhwdqIYi<Z.>T7{W#;qt:Jqa|sW!j' );

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
