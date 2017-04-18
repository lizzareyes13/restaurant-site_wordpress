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
define('DB_NAME', 'restaurant-site_wordpress');

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
define('AUTH_KEY',         '#6iN]EVi&yL-:cDDx-G`G$tMUB/->oLcAkO=^dqr|&BPVgp~^t1kZ2P6!g:Gx_;{');
define('SECURE_AUTH_KEY',  'r3QDT (@NX-D[<oihiJ1lw{<gIpEq{McZEx2`La+p|;pznoar4y9#nK0n/%{VA?n');
define('LOGGED_IN_KEY',    'i<yQ0Nv1Hhe$ad=T-Q]YA*hjjI~x;iH.ED-j.?/?3 :tH%c<<e[c~}Bj?b=!+WFP');
define('NONCE_KEY',        'N?vg|5Fx#hX1Q1A)3S_ngNGkP#6@MhaaJ4QE)c2qf|@YS8H;FiK#oCB|w8hY]w<^');
define('AUTH_SALT',        '(*gY2%OgTya>jp&HLs7kXZ3/BK2@SL>mFQrv{fS9YnU=3=$WK-TX`: [?JugPoYF');
define('SECURE_AUTH_SALT', 'baleKw;):}{1HY,rZefBO_ueX>K)DrHuS>{DcFWB(~bR|&Oxm`7%)Fax1%*))z?9');
define('LOGGED_IN_SALT',   'ZwSO13]tSgk&7?L@/NN7fHE-L&K)LA--7/+JVZ08Z>eZaK*3is&v^ %V^v*a>.S-');
define('NONCE_SALT',       'i>5ZHi2(UFiO+Vt#~;W&p9DIefC*1cka/#RRIKFb$i%Ih0:<-bn,?SsSB]KO)~x8');

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
