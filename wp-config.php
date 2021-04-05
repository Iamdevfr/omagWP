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
define( 'DB_NAME', 'dbs1730347' );

/** MySQL database username */
define( 'DB_USER', 'dbu300530' );

/** MySQL database password */
define( 'DB_PASSWORD', '1C@ND01tbitchYO5432' );

/** MySQL hostname */
define( 'DB_HOST', 'db5002133250.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '/b?#<CUFcpgW!Eerk],*e^!*(p>*WHk-+ ;G/j$0W*C4(EW1^&@/#~AjLCde58{q');
define('SECURE_AUTH_KEY',  'p?#*D5 h!}0F|Cf<#I9`r/vSGv{`gN]cXMS@`>5d|Zl]e;amA#>ya4ZQ(vr.$Q(J');
define('LOGGED_IN_KEY',    'kDFSbA(4&q0!d(Fya%^rXSi.Y.L k/Gb!PX<|wryTj7V{evVF><ZFSx8YC>n&b A');
define('NONCE_KEY',        'p[dgcKDa.7cV||QD%)mS&{obk6tXFsOIIl09)KI&~]Y;q)Zir6/CZA-.i(!wmO~S');
define('AUTH_SALT',        '=^nz_QAgSy)DC|uLDI!LM]I.^5yX%;Vp@xi+:Wy-Rf=~LXU`+nte] Vlv8%.rb>`');
define('SECURE_AUTH_SALT', '(XLJ`s`|Jd6d<7BgmF/>z=`[/KsiT)REZXkCD~klb^|.=03ka|`urLwB8~A8sEH9');
define('LOGGED_IN_SALT',   '|#okGe7qSS2yiT$y!4;&fJ$me-o8e%rRS=@+3$=[9YGYv?j#vgUi+,2eo^joj|R|');
define('NONCE_SALT',       'lSz$/S|P1<VK(O>s~+p[edty$T6%s$P?0E|PlxYacPQ~^@A,I5pJktJgK|-QWfA ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_46e4fzeDZAD54d1az';

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
