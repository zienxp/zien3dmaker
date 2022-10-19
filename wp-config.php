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
define( 'AUTH_KEY',         'SBOM6zH$iTnqmS!1`A!9?}%JZgmy@IUE]n/yw?bo<9y0(,aWj!/&xaD5(/N|DWP@' );
define( 'SECURE_AUTH_KEY',  'kK9F.XnEAyXNevmm^O?xGl1pO]L]kq`K|21dn_XJ2aY!#h^u.N^?SCh])l(NZn;`' );
define( 'LOGGED_IN_KEY',    'Qoq1y}(+.6`*vUN6O+@aN@o_P 4j$/=76*]WZ<(Wy|F,:+Z;=pz-z[g9#Z$C/.`H' );
define( 'NONCE_KEY',        '.#[[JK.O{;Q akHCRRKHeJS>tq.`ISZbr3F3$154fdTF{u2124QMaTU[3qew&vn]' );
define( 'AUTH_SALT',        'S;sZeWVeW_63&)Mjb<V.LIIvl?b1ObyXe@U6xa-CP)K<zcp;cM|K;75>VS92t: p' );
define( 'SECURE_AUTH_SALT', 'vOYu2$&r?:VOJYAbvNY~)u^.[+cxmQz81U_LQ;zy7AnrWe.fMzl./$[&;oGTF;gB' );
define( 'LOGGED_IN_SALT',   '3JoN?CB#z6-Ihkf0%ub?Sftpn>:t%K4z1!2% w6 dSV0[H#P[9{KSV~>wvZN|#/o' );
define( 'NONCE_SALT',       'mNH(:B$V937Y0x{?;O1 j@SRxd3n$sjfK2dU:J_.4jDn<s$Q8OioUKs-kZ/}$j)?' );

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
