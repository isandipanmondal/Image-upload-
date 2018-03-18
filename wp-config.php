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
define('DB_NAME', 'project_13');

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
define('AUTH_KEY',         '07zSK}Qd^j{0BJ~1-9e&MgE-[BKOhwWRB)8XV]sgm{c%@=~eN)oZ][7$N:Uem])l');
define('SECURE_AUTH_KEY',  '+*]NOh/Cu~yT{s0_UABA>Dm9B;5-ot`s*udn?p)(zI_^ 9q<s$b[qCYt&ntr2-<8');
define('LOGGED_IN_KEY',    '-DDNN/2ywos.o5M2xd`74Kld!wfAhm7n49PD~@IK}CNHLi;B-+!_HjHXTo5nC_{%');
define('NONCE_KEY',        'B u%s->z+9g]I%=l@<,xgllycnex=s0,5Uq/ioR|=2DDw_fF2OOEJ+E-|Ye#S:<-');
define('AUTH_SALT',        'bbIzOeDKM~l<n9,xg{Tux03<`MF0KbeH&^ }xs$7GUU*d%[d2 WOZA[J0iObK(YX');
define('SECURE_AUTH_SALT', 'JB.}NWvOzEmCbH:7HWV<9jLGTyC8}TVvH[d%K7{{V?[eb4=B/xA$c_Tgh,1_m%kR');
define('LOGGED_IN_SALT',   'XLQ&9(m3[o<9,X/<BR5`^d!8{w/8cx:7]J3alSwJFq#iewt(!>G[KZcTH ]aUs`)');
define('NONCE_SALT',       '3}[:P<m>Mu~=bg5+>; rdW?-IV{QJ!kI}VG6!xg/VLx!:NMsQ<WpR=6X&W^4]2k!');

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
