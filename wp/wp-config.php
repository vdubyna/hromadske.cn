<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hromadske_cn_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'wvge+]6E}bCn*^91`zH7!VM5zv#(5i@m^6F:bq+Adr!F8cnS.*=l&SC[+IoO]iCW');
define('SECURE_AUTH_KEY',  'yTA~b>7JRK`]CQr!;Q%F|7+)EP!pgYsq7|NM(cx+p]HaC9*.H>[T*6z-|X47N?ZY');
define('LOGGED_IN_KEY',    '?h@au5Be_,@[pnJGaTcZ5||w;{vaRI[xX<=/H6 >lDME1rVI}y[iTWmx#!RQxvpP');
define('NONCE_KEY',        '[Kty5.4#pkveUzmx@6}Nhl+}D4~g<mN~74YLp<g @b<nsOrR91+Z&d7M2vV*aiO`');
define('AUTH_SALT',        'Ki+xyuq|Q =2lEsJ6]p4Xf8+aaE[U9:=-|*D#sI-+.oO_39V|=M+cFh+ ePd]0:*');
define('SECURE_AUTH_SALT', 'sN!;{~!SGrW!+;~AHwEjE-/zQPStztblU{0Cn:A}d+`%EI15qbml5b/]j-vGV/Q}');
define('LOGGED_IN_SALT',   'T[-G%6fpA9NZ(+0fSP1qdnb$G)ILMS@W$c7#@^4ow5+a~![Im^gY@1,i2O5&CfP#');
define('NONCE_SALT',       '^zdZAT)x9]fqBB!j-gpv@:{-gz6CH!+~OCy+7l`x+;wZPi&|4K:T.kxGd?3]C3=y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/** Disable auto updates */
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
