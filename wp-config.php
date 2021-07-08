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
define( 'DB_NAME', 'cosmonews' );

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
define( 'AUTH_KEY',         ',$tUyUyz76B4EFzp#DnT<b^cs`c9QcA-#.wk>D.=>wPB^:A($PeV1A-?[]<A6uC]' );
define( 'SECURE_AUTH_KEY',  'H9Sdg{$f{A0bE9F=4wr[sNp$U2g7kwdX?qcM-%C-{C1E+uiY&Q4Sa4rKZ<X9Bd1`' );
define( 'LOGGED_IN_KEY',    'k|]Cx$ujk|o5XN:7w,vT)Kk$Xo;nF{HE7$T83MU]V:QYrL ({vUP5(V8#fIjFXv%' );
define( 'NONCE_KEY',        '(Y{WkSZ=ksJU4$9XEs,?sG]~p{1>cr2P_y4YXgyAXlQ!r(AsF8(Mz%Nunrq2|P|~' );
define( 'AUTH_SALT',        'zl@C18cP(9ttbC#~}AH>BHx?qep{[Yp+qu#w,IdNePt}v!4Wn4 Q`.,M$%ZfD9&0' );
define( 'SECURE_AUTH_SALT', '1/^U#sj**YKu[#d 9]uAe`yClWHms>+(Zz|`TA{#bXO}?@iG8`>,Ca[bEt A86S~' );
define( 'LOGGED_IN_SALT',   'Ji&rd1Td.YYml@>Wb*jir#N{Ep>U{O|{o}iJ$nNjJG=rPl%(3z}6e_V03#X(3Wj4' );
define( 'NONCE_SALT',       'NcHU35SWF2iS6Q9/:9cFE*RQ>Gq4EXSl2p^b`d{)elukt}7zP>YwZFd;OJY4WHC)' );

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
