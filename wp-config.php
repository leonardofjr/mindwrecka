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
define('DB_NAME', 'miguelito');

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
define('AUTH_KEY',         '{c,I{!_Yo,b*pHDvr$<Mcf1Kes4G|m;<CGkiR`R;$a+yeSB~WS8k,@#rL+#5,w5y');
define('SECURE_AUTH_KEY',  'jyyGW(r-oS4x7`th[rB8x$~[LXqs]DCyy$6KNa#CMGd_!n8F;^:W1=?i~IvrDeUd');
define('LOGGED_IN_KEY',    '!quk4hANv@vq|KnJck[:i4{5k23L~OD;kfZ^P|:Gx%x`_v~A$Mb:u`8,]G _ls@>');
define('NONCE_KEY',        'JK[N7uKy/7SW>?Lv?h.=:sE)uItnTH1Td0~}*D6Cp6B2&x+;P-OonXkPMW>z}ZHR');
define('AUTH_SALT',        'MAdmNzoqkM0@+wvMXAj%~7k`q~`/-ZJJEUXG(*(o;19,|gr$h3oc~`NE&FnaI~v~');
define('SECURE_AUTH_SALT', 'b30{bwS&_-U8v{Zi[>1(2O#;Awj=>^bn0Hc;PAizyts+c%%i8e*gmDoBlio[|1eG');
define('LOGGED_IN_SALT',   '?#~d>e|Gf=1t3hZqRFWVAWF+_Zx:lHI~()Bk_v1s~E{~LzNAa^H?}w=70jfGtVQ/');
define('NONCE_SALT',       'sr/#-0T6:qM+Y k#WFZE@2gSi!qn|SdY_Iw{MMaCsZ*,@# op6z_6>2XyfK(UkRJ');

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
