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
define( 'DB_NAME', 'vend' );

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
define( 'AUTH_KEY',         'uR9pX6>(jicvCQuD[Q[nT;gve/rY]=sW]F%}Xs-}eZa=I.{B;%{Md/]ur2?pY)$n' );
define( 'SECURE_AUTH_KEY',  '||vO9e{9N3u.aHbd8Sqx)}e$b5#D >CWL=V!w<AAbq</Vl) nH`YH^fmjic;Dc<:' );
define( 'LOGGED_IN_KEY',    'Yv4K&G1ToVA6~Ce=x~b$*o4^C1E^Q?!<KnIb4)^XYe9#$j$$7E0Iv!?1!~_]@/|y' );
define( 'NONCE_KEY',        'KCfb&n@CNq+FUdyqkhF1|.ZUxD0x`>7B1fus|n)8@MvSpt^}@n%;GAdx1heEZ*xy' );
define( 'AUTH_SALT',        'q8xnQY5m L<r|.+|J`} ;=X>lEh@ s}t>DU&!*HnCkp}6h4%V~7[eZUn}FMBR%(Y' );
define( 'SECURE_AUTH_SALT', 'M<=Iv4f1jw.eF6tsYn#,sUwH+#aLn cxPjzMXPQS8]E y%5|Tz`89>6[GCG?KB@D' );
define( 'LOGGED_IN_SALT',   'anRF@bfDdE~e6y>x 3_7|s*!BPwvx8bVZ,q>+)4oK7,o#D-zA;QObvg/-R~_fWI*' );
define( 'NONCE_SALT',       '128$Gy@2fW_F+Vv^&%<*d3|kU$q^M/;eF_rK5ZAG!My},1DAWnUp[5P=_TX[^-u<' );

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
