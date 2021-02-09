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
define( 'DB_NAME', '8bits' );

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
define( 'AUTH_KEY',         '[8(mG?-POCA:)-G?dV2V]kDeyR%P?kw7cofFPBU&,aN=y=w7D?I8>9o1$a4k+lw3' );
define( 'SECURE_AUTH_KEY',  'ZLf;zoVwB,IgRadNPNU2Whx3U1%G!,>Rq <@9BJjW*9IT4-dnLES]ED-xdPOHkFI' );
define( 'LOGGED_IN_KEY',    'j7_ml`cE`1kS1IYszX?hqGN d;K77oKloivu?~6ENEF/,q,oCA_xjPZ+,m$i*gA1' );
define( 'NONCE_KEY',        'uXs2<sa}zz}IJrl>fIC}loX[276OS5*#G|F_B[kaA>@P^w^Mn##Z!TbuwcazJ&W-' );
define( 'AUTH_SALT',        '5LpDKW:IjWku8bD2h=`lL/9ty*~%SB#ND6R)PA#>3~rCzdl2v <;NAT%_[$+e$Pm' );
define( 'SECURE_AUTH_SALT', '3F0:k@4e&h/R@[NS+bL,}U{/ ?N:B1,2F:}-$j(A|HKND;#<:}uds$a~gr0DVy<_' );
define( 'LOGGED_IN_SALT',   'U(eV@S>i(eZ})N]H${aZG:#x&(=G?z)OEvl $`N:XcjRU6M=9=_(`/u ML<|Cl #' );
define( 'NONCE_SALT',       'u9R{_v*Yx51sn%ZY#{ibL]&m9F88g+a1f!p[Vo-Z_xNj8%OS0yj2Mb=Ir1^FA,wr' );

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
