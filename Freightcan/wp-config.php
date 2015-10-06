<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'opineco_codex_opineinfo');

/** MySQL database username */
define('DB_USER', 'opineco_opineinf');

/** MySQL database password */
define('DB_PASSWORD', 'FEDwin123');

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
define('AUTH_KEY',         'ZkB$vAi~Tg/n,8%Rk/.@eSPRUZMp=~sH*lN}Mb$p9`mWD17;,&[j<m.mJPt6x|l[');
define('SECURE_AUTH_KEY',  '6iN$GU|(;]8}eo_WIL)b.r9Y1tAP7DJ0Kb?/FBek(k` 1<I76Qo79xNAfi0IXf8h');
define('LOGGED_IN_KEY',    ')/=9isXtPR=ujtiYw^@<e_CQ$t&,$QvYYI0:%iDU%%h++4X=P7Tcy0kv;^9j;)c4');
define('NONCE_KEY',        'i)yM5/M@/a0EjCl=R!|Ccad(rS[,le4,zXN8W*ry5be7w4Uj]VL(md`Hb~$Xg1zr');
define('AUTH_SALT',        'ZxNMj8b7a9R!}B2Gtg|Rmfb{:~dpY9p-n7:/h{4GVtt%3Fs _|UZe?Z.}(XtI#uk');
define('SECURE_AUTH_SALT', 'GIv8#N(qp;03J3?S$D8D!$eF*@aBVJV,r6Op*_H8SwIooz*arA`ZdS8m&]I(.C-F');
define('LOGGED_IN_SALT',   'O=}PNI4X3FZKfm]lty^8C<@lx4I]kCFS#HzZg(TNYK!b_sj[u+%azZ-#phCHw(px');
define('NONCE_SALT',       ';Tu-<siS:<O2|okU$-+7P.sx2q[)TE}Z$63-P1t=tDzTeq^&1mcz&{UNSUaY:)m:');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
