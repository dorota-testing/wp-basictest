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
define( 'DB_NAME', 'basictest' );

/** MySQL database username */
define( 'DB_USER', 'basictest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'basictest' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'v]>%n`-l>FTT&J;4iL4Pq;`Q^6,tT+px{RB!Q8NW{,MI >A-V8J7Oq7MOb%>|526');
define('SECURE_AUTH_KEY',  'F(U(/eb|h-@*dj-|d;JK-xZ5RvM|xCr3;,,x0$a6,(JjHhhy2g,tF+y,@*tKxjlr');
define('LOGGED_IN_KEY',    '7lxqI|0TG-vN[5gU}Q#Z-x{ZYrGT1UYg|P(}ST-C8`4 E&=0k3(T&zm?q8q2UY~N');
define('NONCE_KEY',        '[#EH)?BrX>RlK{^PjiG+&|;eeSr+O`-fl`$hff|:1V^h18aTQMh{Ro% gfa2{e+[');
define('AUTH_SALT',        '[mqOJHn]?cs>)g5~oSOWI`V(`mDu1Hz@}9dD}x8X:2/hu%_2;->H-bR% |NH,?^>');
define('SECURE_AUTH_SALT', 'sk7&=Q64n&0*aG&;v[nud`NV11a3O(FLvs65vb/mI-/m$wch@Ldx?D[BG:yYW=LZ');
define('LOGGED_IN_SALT',   '[LMGh[sr2G3?#}-}_N2w|k=;|c`I1$7l?9O%+ML+f?--#Pb1*jpmU <Rw(%Xiu^+');
define('NONCE_SALT',       'wNv* I3|aU<L8!!-8-x>e+5kt#Aj.Ha|<ZTC<Io@zi}$-Z[K,3D8CF7!{CR.cccx');

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
