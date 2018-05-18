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
define('DB_NAME', 'id5643107_agricam_demo_db');

/** MySQL database username */
define('DB_USER', 'id5643107_admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'mZb(LtfIt? f{TUA9ZJ/CdfwD [6o(h3W5M4/a7u0,FL>w~$3iZf5WIw*a9;*.d9');
define('SECURE_AUTH_KEY',  'RBX$wF<y{9+eR4+udA#!VrorXE &jfH8Te`E#<zAV,!HMvB!3PxdpwVUY]+86eL;');
define('LOGGED_IN_KEY',    'fTLVIIp,rxI:X7qa*<p-US{]Lx@/Co-dGg<B_d1,IgYLr) i7^&7y|QJ@}RZS>)0');
define('NONCE_KEY',        'S7OS,u~j1BVS.?z-g$)@U|!F{L5H0PY+&.72{E)QIAdlR,g/8HVj<1|,|)DzZ]5R');
define('AUTH_SALT',        'q`$+vNG#j;xYx(qH,$MQJm:xf@^G!%|Akl!9A.l Zy3Bjmq<>U[H.O9ZhUByY[mr');
define('SECURE_AUTH_SALT', '37p/cF~j?td?w!Ec3[3],CotoQ}{B1rOj*cZY#)wo#_Q[<dfbl%:%2zXvssRJ@Em');
define('LOGGED_IN_SALT',   'Ja)e-*[a[<hx7agw2r}2P3;e+=q4*:76,q>rj8x0*=e*5wpzCPa^g ^48b#UDu67');
define('NONCE_SALT',       'fx4Ja1e,J2C3@{G2yO#$7,t?:xp?W4_Wz;!pH(^`jbjc[(d{bmRj*O0qgjrdL,-,');

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
