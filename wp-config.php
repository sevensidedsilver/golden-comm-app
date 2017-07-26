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
define('DB_NAME', 'GC-Trial');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-YKvT2jgo$]h/NmG6~!K$a.v>9XC(zq<1skE-#bDC.-0Q=$N{20+{S34VL*r5%dH');
define('SECURE_AUTH_KEY',  ',RHp*mHi+9:Dm2zs07%2HGWa9Z8}hh|u|mA[*5 l!7M+L%v>Dj@enG*Fn^j3iaoy');
define('LOGGED_IN_KEY',    'tYPiBR);aYa~X-B,^@arq>=4}e.mO9iT+V-h+]X-48fI[;#tU8*rN|0h5}[n8yk8');
define('NONCE_KEY',        'j1zoxxzRbzPQAQ}M,IP#kEHA/|WmVAoK|@_?1(-5`qo(AecW_8,5aAk%i42tYC1m');
define('AUTH_SALT',        'Bc|)+R237&^$>ofr+Y3@qEC`REi@6A*:-?3@~!>D6GyehJ:]U?I<-|Z`Xs`DO|-9');
define('SECURE_AUTH_SALT', 'GTUjq&|t^!72GqsRf|$+B-9vAa&ea!=Y+;CJ)&24.e71vyv0zAl.t-6mFi^g{DJ&');
define('LOGGED_IN_SALT',   'Ra>CIxy9;WB^1y,-gs1_|KfAgTR_jZ/cwwLgdBZF8s>kOMIdlZ.vE):h(_[>(TeC');
define('NONCE_SALT',       's}}4V_`n*`N=G6]D,udO#16I0xB0sbdy# [J=!:|FY:/*KfIJJ]w_kzJ)|ft;iND');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '23fwasfs2uii9';

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
