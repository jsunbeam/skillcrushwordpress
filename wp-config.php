<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skillcrushwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`&r 8<^xt*BW/+11C{89N79uV>x*n9lce9Z$}L{4#j4l8Pd6|Q*{A]7;x?<9Ylk~' );
define( 'SECURE_AUTH_KEY',  'Z5Fiwt +M5=mziDG2:&=>XiZ,&$GI[mdl3T2bD(GOLz({YRVYBO[:Pf dxeC06Vg' );
define( 'LOGGED_IN_KEY',    '32e>S!=7t!K]?-hsTQ4~zJ@P?hA*)S#>3`$08v5af*&~/p&.uYjSE>8&x*5e>w/u' );
define( 'NONCE_KEY',        'R&cQPI.SP(]Nph,-/q{nVhtZ!~m-&6R^Xh@#9FwsXwWu3] A}u+O!4C++o3,Q^C]' );
define( 'AUTH_SALT',        'ay,bQ[.a WlJP2(=!LQ2>8`@Acz[#]}YlO_nAa4.`aW[! IX%OGi81IG5ndjeZR]' );
define( 'SECURE_AUTH_SALT', 'r)CUUd|Is`f2QdqF3nt0]yVBL3DwPU!i4X #xsX9:<xFB^:G nk$G]%x>d}Y]8Yv' );
define( 'LOGGED_IN_SALT',   'Q?XV3w|sw`!U[MAb]#c}I1X2 eAXd`0^HU%z|kOXN<_BPXxt5?P/F.*)@)!}OZVr' );
define( 'NONCE_SALT',       'lpzUT#`)hQ`Z!M(aoFtlIrW;oHI.a3V %$n`38k[)eHft9U[7D`B4$t+|ZQsF[d!' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
