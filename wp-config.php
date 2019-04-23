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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'projectwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2-UnF[a.pDm4>d;t@r2NF_oo[djcsWM1r5[60sb>;&@m;f]Y(*uArY5v@gv1lis&');
define('SECURE_AUTH_KEY',  'MM45fSTeK!L,lg,>_BxO?aBa)O,%JkyMu#cx}rj6z13xI7*z0Lc_YXBm.Iz@=#qw');
define('LOGGED_IN_KEY',    'N:k(TC$V$:+`5mx[}exD#EKIOQXC2U^gsP~@S#c0kC{svrv9d)gmmTKSiO)r=Vr9');
define('NONCE_KEY',        '@^Kw<-E9W`QRKO#P^k?g_d?e7WR6=<-^z59BF<*+hAxDH5eZ[+~;<`Pjg7.=,m7O');
define('AUTH_SALT',        'z$0qjpr`sQ%9mH#k!=GlacsBc*H]wf9K: mHFc0 skV1)B_mE-Eq0@gd}V;v$FE#');
define('SECURE_AUTH_SALT', '1ye2J4d.G|<yMzFd<O_D4hod7P-WJ.;^b.Do$}c^hs*X,Qtd/[N1IG*y[]mK1?dt');
define('LOGGED_IN_SALT',   'otsz?L[4u[G*g*~KDmX|b*%7k&CV=9OohY[>3=O2@rGKCMlb.:pMvGQtwGfIa6;y');
define('NONCE_SALT',       '}rUmZ>%biO-~r5Jh9[ON9rv14[I7Wu5~*eqD0b~s-7J@/)&:nEViMnvi$9>xktsv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
