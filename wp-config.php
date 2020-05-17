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
define( 'DB_NAME', 'JustinoPortfoli_db' );

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
define( 'AUTH_KEY',         'x7R1ur2#ga6L9L)VFoy],$ivEyYA)6h&HbC)*qs84XF1>J4>;1S`7%rB%Y25 A^;' );
define( 'SECURE_AUTH_KEY',  'aU0etpJ<iK:5yUK%c#nH!J-.y2tam  ]<#y>Z6CIDxUFIMb5==q%{i*!prAB}K5%' );
define( 'LOGGED_IN_KEY',    '|Rgzvo@,}-CnRsoLF}rZSS:y@Lg PtqGA*4]4,wSPmx3GRM=AzEt^og]o5Pt?z>9' );
define( 'NONCE_KEY',        'RJw0Ro02~D,MIq8Agl.tX6M}1)6<SVUnZiT$liKxz5& 4{X]w<?/1A09[e0doV0F' );
define( 'AUTH_SALT',        'SGluKPNNt8)jrm:ZVGo;q`D[7N]XD;l@_,H ;{60@^=Y5- nw8B0qd_{RV(xqIEv' );
define( 'SECURE_AUTH_SALT', '8RmsFB`>U2YoIjSYcF)Tf[B`7_|1G_VK5X{bQ=4o#Yk+GF7V]JTD4]<Nck^l rnI' );
define( 'LOGGED_IN_SALT',   '^OX;n3Gg:7hl_B{BO+u}@<bs ,yCf =xlNANh`ByR6o$}.nr5)PV~lwK:1 GK2?u' );
define( 'NONCE_SALT',       'QMk$*yk`Z<{krZGS;[iNx^j%<8Lf>$c`xHpj`_$KgVaz!zgNKn?).|m>ac~:.1xq' );

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
