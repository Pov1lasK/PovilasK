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
define('DB_NAME', 'workshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'Pfj)e(o-8w&.JAuE>;{3>p?ZHMlSl.&mAZd8w;j~a@sbXMKx2sIh*$D>;zkF~<9l');
define('SECURE_AUTH_KEY',  'J)C-Nk;=xD^[}xJHY.Aova@}&Is{j/s0{P}Gs|6gh>/#QT=b=TgpER!HO:N^RPm(');
define('LOGGED_IN_KEY',    'Q=ms.-M{t|MFTwb-F:Yp6u}buVB&xkiDaw.IHCHQTCgxWzs`cT;F&e426KZdI.IK');
define('NONCE_KEY',        '}&lI9EJrwy4jLN~]`Kywg.8).,eVokoP(2U`kvu$cJ}$no3u6e_$ft9==&@+oS,7');
define('AUTH_SALT',        'qkb(t%#}IU:r2bIFc,]QgoA|0?9j1 /Y0BsqpAvo 5T/f8hDQGHr<,_  hRKLM.4');
define('SECURE_AUTH_SALT', 'Bj% gj9JWr~TkdnpiU^a=Yj <K>f+33KYw/:$(OlZW[xzPrZ,0|c Kk|iv(nxdT=');
define('LOGGED_IN_SALT',   '4obWJcFJOv0XY%v5Eml $VS6k#e@LU&W(/C]I*5R+gL+aH$a^}M/|AG#/`1<3Rot');
define('NONCE_SALT',       'K5i4W3#g<H0@ *<J/D^BPmngU4_n9-~-`d}3#.Yq_w7^a>1R</g{56@JNuT(UXS(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ws_';

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
