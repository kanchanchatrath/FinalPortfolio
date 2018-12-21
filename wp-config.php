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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dr_nn}j=M!Xs^IEIV71c <yRpf$FxfS)@_YM 4qIT>N}x<Pse=>lK>gE8j7~XeNx');
define('SECURE_AUTH_KEY',  'y8H,!SM?`epym&x1%,YJuty#>?]bY-.ull@e[KiVjE+[d-bS{Z)2&-2)<Pcn,Mwe');
define('LOGGED_IN_KEY',    '.VNJ-xH}H.2z))oKTUU.btx`6wGn$8voLZ+K<RBCoAObZ7^^`4hnr3n@yrbm@3tK');
define('NONCE_KEY',        '.wd`R]8|SzH(qTh3Dn<xU./VSaTs*D;y*]I}n Xsh[e1ci8TC#9*Y`>:i );sU;h');
define('AUTH_SALT',        '4op>:deP#%.d:rBCs|hQOf2eX{J91ye+JP<GYFf#(ccrP8SxwnsdG5:IUw$-rV0N');
define('SECURE_AUTH_SALT', 'GxbIPU!N$&jtsDKEV]W &@(yTREt|RC[T0i%K|chX4j]5W-V?a!wv,*IPP:ND. w');
define('LOGGED_IN_SALT',   'LvpPdl`6O9hWuhFBkm%EuOzd]R~]Y:PJh8A[l-uB$z4Cxtozo*btiy{YvLLC_[B#');
define('NONCE_SALT',       '#))eb^lHV3(iM7tjRV ,O3;,}5Y2BT)3,{Av&r.=.V{#j8D&nVf4VB{Zq7NNms4u');

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
