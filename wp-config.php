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
define( 'DB_NAME', 'wordpress-react' );

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
define( 'AUTH_KEY',         'Be*m3!Az^a`2@M.YCe6%32hOBr?<<:^*o$KFh7~;/w9Wu!>AhlNXD80VDuwNrBq~' );
define( 'SECURE_AUTH_KEY',  '>cq#evW&62HS9iy_82|e-2D-ybw_:oHvZ64)=o{WrQ9QyhC/.i9`qFb4V2A|k1Bh' );
define( 'LOGGED_IN_KEY',    '2C;XfU-<ZE5p4q&V(LatkN9elc[REd-$.sp2sD`=g94|-B.kK<m;2H17}i1o2FS4' );
define( 'NONCE_KEY',        'l;w?;~vx{w,6k.ZA)P<7-9pa@[#&KSIa>PXUj9eju|t(m~WQgK/@cwcYEG+vD@3/' );
define( 'AUTH_SALT',        '~hiHe^*2A_`>tbp_x .p,pJ8a3DlYzBq0L<P/1hdedgO3y#Nvi#I@Z}A9EL!P,$@' );
define( 'SECURE_AUTH_SALT', '!T|fl_]N%Tw$>6U^S<wCu2oMbMn&u7.ckMgd:G<!7:opuxGHs{CU/RX0zWQt7I|V' );
define( 'LOGGED_IN_SALT',   ';IWzdlZ&:}z UzW4/W]|?)k}8et7,.*n_uy #?%n3#yR7*FY?{&PR^]7N5sPe3`h' );
define( 'NONCE_SALT',       ':/$1Q=gK0csut4]r5SB=3ngE PCM.X0|.[ZEx222_n2K{v{zI:l9d51qn[bhqo*6' );

define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);

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
