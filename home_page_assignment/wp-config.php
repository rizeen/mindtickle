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
define( 'DB_NAME', 'mind_rizeen' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'utw!u[{J-sw?IoeFnY(b*hce[3+:k^&19ZEJ!%q@scYs75HBi[H&=9qZFX_l#HU!' );
define( 'SECURE_AUTH_KEY',  'aHO>>l,2T6bv*C,ZO@9=h/:dRGK6|+ykqFU!(t_t#^BHaZdO:&N8GE+]Y-]VHD(z' );
define( 'LOGGED_IN_KEY',    'oPewf/u<+`3t_Rf%L$8T]spNF<H VCCyC0gk@G;P>gh4K%NFd%w4%?J (zv-&%|N' );
define( 'NONCE_KEY',        'TiY$ChmDRE@{r)>=y0cuabQ ~#64wq8JASYnN~8u3/t: [W!Q-xdDX7E[KAB>O(b' );
define( 'AUTH_SALT',        'u*SsZY4@FI`G*M&{_}{]PZS`UFJX7Dd!0)Ka}*{q!,>e*f@q%0JO[V$}/I>@R.Zg' );
define( 'SECURE_AUTH_SALT', '~ 1TRJVaw]7&_VbuRR6op]68[_<TI+Hv7|bZD<zIbs:/?&P!!*2wUwf!S;5>?!.>' );
define( 'LOGGED_IN_SALT',   'vs=ScL0;f2Y, E7+jxPuB iz~oJsl2Q;A4uSJ9Dbh<65xon`fF{N7g!JEr:MMfX7' );
define( 'NONCE_SALT',       '$nW-,Qg>sSfkd~~?$9zp[82&2Y)Ph^WQs_)Gz+@FoA)O%*HePVB S^vv< TOuTkz' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
