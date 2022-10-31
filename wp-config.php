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
define( 'DB_NAME', 'zien3dmaker_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'dnnydg2211' );

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
define( 'AUTH_KEY',         'D6gT$E7bQz*?8s=r|(Afog;q@ig[C+xn5XFST0N-l`XYM!)BufWBSxsErzke1SGr' );
define( 'SECURE_AUTH_KEY',  ' Ta5F}`MBHmS]t0](Nrgyswt@dHvD6u(rUJA{ppT(ueEhDng-op;5a+X4*}n R]{' );
define( 'LOGGED_IN_KEY',    'hIiy^5KsqL/6 DG?S#J5QO)Am[3ak6XO$>&_>rGC/@3g#EXl7g:@;mFAe<g*loTz' );
define( 'NONCE_KEY',        '^pOV.|H2cUykVd~uVB>x6,/pT#17hBj1v1AZ8z=mX^jV(xvj7mX[`b0Rq*21oK,@' );
define( 'AUTH_SALT',        '[4UEH%m>%Q!WzD}mLxz}?X5Ds1mgZ|8Yyi yI;Vcj@D#gJ2?Twz-Je64|_Fed*?,' );
define( 'SECURE_AUTH_SALT', '6DcNA[*,Ht_S{vVS:4&vatO$Ip4K IWXQQ?yFXZhID@e%An5 eYR3pWInr(H#s^d' );
define( 'LOGGED_IN_SALT',   'iA:Y|_B@c1|$++X.Orc+#t8]pNcW;_f]B)a2LE(d`Fb 4)M1Al2+gROwQk~.HWK<' );
define( 'NONCE_SALT',       '~hC,{4L^El:a,)D[G##3OQ.TJ5oOxd&l7H((u`S&HRr]T5d7&eA,~3g$+H1L:KxN' );

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
