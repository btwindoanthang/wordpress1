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

/** */
define( 'SAVEQUERIES', true );
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '&fxM+NPBJDD6;r6s^Sh$Jj7 Z,4IQX$37{*dCBizwMuj*5??4=_KwCa%;dD}|HpU');
define('SECURE_AUTH_KEY',  '$36j`{@<j$xvt*e%6cz3GGg:|a@?#_D1tK`FG%f@uLioL@*o_E{p,ZEDFV/I:PkP');
define('LOGGED_IN_KEY',    ')xSB-`(z(4F{]J*4z+RB6ZM6y5_15yS)bhXX5zU{qEx>x%F]yWcSB7.6ivZ/3L&$');
define('NONCE_KEY',        'N[%Eer_ika2i+~YFpKA?fv-49~*J[E.$VS:,vd$9AAI9{#;HrnyU@Xe*%@R#[cxV');
define('AUTH_SALT',        'AeHcAQ:pBD[qf|@ff+MbzM95=ljmE9Dd9E;n:hi4Mo+3!RHRK.Wi<jiqf dXg?QB');
define('SECURE_AUTH_SALT', 'wo%]wnjVmL Q{F&44X%0!dv1n]5C>0q2%Qj0o9w[;^oA/@P-w+)PIBV7ttR>j$dH');
define('LOGGED_IN_SALT',   'xYbyf/S<!?96GG(sP-M6A.DG-H: M*OkY/%OK@{fa;d8:A5>9D9~qQHdPP)mjPhZ');
define('NONCE_SALT',       'Y^U#TNnN{bYKC^ cT_9<lUUI6YlfbLCn;c>VXi%K-[y#b-|yK|5%8YFYd&GiX?Uh');

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
