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
define('DB_NAME', 'vietnamguide');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gjvB2)v^ :W;u[6 G>pF:lk+C&H`=x}jCZ^d[/$OqeJHQ`< ..^UEk{q6+@(AtiP');
define('SECURE_AUTH_KEY',  '>r_Kj#jj6MXuX*8_(F!jvh7a#g<OKl4{o9D2 +|}nIi!r:%vAp-5+-`a& i;#>H5');
define('LOGGED_IN_KEY',    't(Uj>E2~+2V&mv/aksrkQ_kfo)Ty~2<V]>i+ou<:pivhs@Qn$:nt{6+Q4S09zp2W');
define('NONCE_KEY',        'Z%|`@|Ecn. Cqyi)o]Eu?$`1DMa>t|iR[1$R$uLi4f|IknR`>Jy-~F-| |7L|o#v');
define('AUTH_SALT',        ')^0!H]iO#}oz(kug`HG<bw+%0$3rnsp=drp(?14WU[BDBX>;+nD-4-9%`9+pvZP4');
define('SECURE_AUTH_SALT', 'UJ5u7,Y04r1#>upf3(U=U&37%DXY7v@2Fl(,v%eu.n[z6sDUs>?PR4U+3,OP [.d');
define('LOGGED_IN_SALT',   ',NdE-t+-g9TUKW#N[o~2jw=.qXBK|!RZ<]WD>AjJ[:(`&wQNqMLMVG)^88s5R^XX');
define('NONCE_SALT',       'I9XAEa[mwed8:3hj=/9~*?C2 [tRx3lKAZn2d5kiCP#|v)z1lBD.+{UQ,iIpA#!|');


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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
