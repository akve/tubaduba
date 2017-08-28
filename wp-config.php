<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tubaduba3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'z.* kRz7cJ)jP3(6!=yF-*pKho]o|pMAJ55fq]5|[#hW:yr|51Q^=LnfNYtR.K%k');
define('SECURE_AUTH_KEY',  'ZZ=+Ot-sH:D5lV[?C0c@&422=Xx$g*0RXp}t)!WFs)(+22esFq_74Cw[Y#PK}wb;');
define('LOGGED_IN_KEY',    '){y+-53_JA%f.4P=R+^@gm]PH7Q&p^|U=EG->Lp6_cvT25C-u`1U 9M]Q2>lwWar');
define('NONCE_KEY',        '^jTlP?n<^|Z+VI&5E}[jXWi@WdeI)4A>i6WBUh(6fB.=jVuS{A1Ut.~C47{8L^$#');
define('AUTH_SALT',        '9B:psB%k`I9o4e^h1A1-c/F|P1)g_>D8+%uF!b}csgz?T[$te>4Ju.&+_#}Xtx `');
define('SECURE_AUTH_SALT', '|FsxadLLOQMPk~1Pk4q_pT(=xLf7vTX#u80quHgP744_{<nZis*vk{?wJdHm@pk<');
define('LOGGED_IN_SALT',   '$!T~5$/A?Q*x]i[kFo0K@=Tk])8<6Cns=S3;#laa##5DwWn?RW%oKC4$ AApHH;7');
define('NONCE_SALT',       'l$A;6qUa_s(nC1@>Y{G.7I;1y<)lK-Brg9Pi`9+6!:;Nw2|~`ju0>u6X6M.vcvA,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpap_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
