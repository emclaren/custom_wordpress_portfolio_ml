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
define('DB_NAME', 'mlenizky');

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
define('AUTH_KEY',         ',%p4>O+/u/:S]g<-9-v<BEpt+D)Fo%YU(tj3(b*PW%m|dq|c*_Fpl4,a-`/aHl6T');
define('SECURE_AUTH_KEY',  '~)juoW!D-^dPI/a{AgT-Lzq6,LoA*5AA7@$A3^?L1|LLUA[BO595@&ALG#wjK>5C');
define('LOGGED_IN_KEY',    '& ~@4u:xGfyv17lUN.,i+RuNzULp>{jik:|->v|AW#nJz_1T$wrPC1?;exzABAWj');
define('NONCE_KEY',        'Vj{ET4FpTf0bQLEW8[5LN]A(rJgsH_R4MpH^IibbJmYFEpwCu~0JoYFcPDVga+@j');
define('AUTH_SALT',        '+;5v=~|3q=9Rdc@A=Hk~Iaz(@KhxS(e~ku:or_$%XQ$1||c(WyxdNM@yEB)S$d&6');
define('SECURE_AUTH_SALT', 'g,ea-ocpIRDD{zkgJ6HX?6Ut^^HaX~2BC~-^.Z4m?*Kp+)i@7Qn:mGl-9pCPEO,*');
define('LOGGED_IN_SALT',   'Ro0Je^4a,q!4l{-Q9>C658`J[=DLPd+8+ 3{L3<%owo5n)Bd;4xG.m7u9=Y/cRi&');
define('NONCE_SALT',       '&[+gL)uAM#s1D99s&GG.0{xc E-D~8<G++{-0/hgBD<qLrzenOk@{+/=x:kb#|N!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ml_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
