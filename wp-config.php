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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vertrigo');

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
define('AUTH_KEY',         'y?N]QH?H%R0$vanF;@QCO }4xnpzm0FRAh?jg$_:>9vO#_/l;AFKf<!Ju=:q`8cJ');
define('SECURE_AUTH_KEY',  'A$B6s-1spxBI={ZEjBxQ6CG+v`/Jb]6!e4O?3Fd,+[<e/tW2r~*=)H|SJ`tjOFT0');
define('LOGGED_IN_KEY',    '%&E^9g8bHO{vA@T6ZVBOuu4yB/{A3_&7>t%y#{!^.+ftxx,H,-S2J?oPdP|Bx#QJ');
define('NONCE_KEY',        '0r)@.Tvc)5xT%:RZpSA.KI q05P4*[]l)4AY%R*uw?` HSbs2][OIgSl1HUK.$8m');
define('AUTH_SALT',        'E:H*LK*6/9W8q]r&s4,[IS.fuevyZ*zStD[ca1/S C.S#9aa1f;=zs_&|3f`9UE;');
define('SECURE_AUTH_SALT', 'vB{+q;m0=M<?}PH*a)TpDQIH/)r7=<cg[[+`M.B=b5A9VamQyEgVm`#_lk%Qg4jz');
define('LOGGED_IN_SALT',   'bpq}#MavGxU~C3eS*3LEV(EYnUC5#cgmNZSmYYEMAK8y73Xb2p:mgMiOH_VPRK%s');
define('NONCE_SALT',       'hpX.nt{`his$mD>)],ISF8gWKp&(J-|=Mu*7/Sm|W*Ve|>YryN{_tE_O5I|,^3-d');

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
