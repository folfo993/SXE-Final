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
define('DB_NAME', 'newbase');

/** MySQL database username */
define('DB_USER', 'adolfo');

/** MySQL database password */
define('DB_PASSWORD', '121267');

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
define('AUTH_KEY',         'uN)2+#P9Zn_]PAqlET?Ug?Vz^ql~gf6r3g)A;CBuk,Qrxqt:>~:yT-^h9|/w@u>`');
define('SECURE_AUTH_KEY',  'Z7z@r:LiS0cHJy+p]puvI&(8{P^>f[1`c&<nk6}j B!K_v-1^c?QH0bNR /ZEnFD');
define('LOGGED_IN_KEY',    't,y/K~v|4@4j`cDc]rLk/YE$bFj(D#N![~[qi9AsXG`1<C`^jqo0r17KFf5oMSrr');
define('NONCE_KEY',        '1w|r2=K@.&pd*;/uGTE7>a02E57]DD>s-Gc0O$VGiTqf!O{zVcspvZ7n.@<_nETW');
define('AUTH_SALT',        'c`;0)!HuFY~[(XD#7b8RHkWeWoBU22SM3-Ebd*iNAZXyZ7?=.$U%ScW;))kn~q/y');
define('SECURE_AUTH_SALT', '.D6[[1K4icjERw3E:`x#0;qel0wCFMng!~!%v./t{cK:-D>;nE`+4vuj-kcjrdn9');
define('LOGGED_IN_SALT',   '2w/`=_z#`If)n9s+<kdR$ G8puPg$U#NyG3S23gQK6f=rv46n;jnL+r[wD,>_$rl');
define('NONCE_SALT',       '~BI8On/a1~=>JuDbloe6&?)?w2Nw}+>o]{U9UtR@Iohhp04&Utor(I`#ZRF;nD2(');

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
