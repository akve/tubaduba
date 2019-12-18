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
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuba2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A^9f,5m6M5:H{.b]CSe^DI)B!5!+H^J/O;smPRC)-qOZ[C>kEJl^M- ip_Q!+DXx' );
define( 'SECURE_AUTH_KEY',  '^OW#^%iWuTYbE7ipInXz$YFAVG``=T2($eKu5Oe=Qhn5*)Kb3^gdem64[kQT2|A>' );
define( 'LOGGED_IN_KEY',    'dfEs%%uH3S[>V0!qJnsoYJ>QjPSoIeDxu<ljdY7]7!5}N/]MC@@pw`kM%5#Dcu| ' );
define( 'NONCE_KEY',        'oYgK4QMnHma-v28:)R&gwOHr1V!}6T,kM_Kk)+E/z)05Bt~I+yExk<A ,{wMeT!w' );
define( 'AUTH_SALT',        '2bQm.atB5kbAYFxVj$:u;tcZ6[[F^aZsSlTV-0+xSPddG5RF+42v$ ^n1)3?s+JC' );
define( 'SECURE_AUTH_SALT', ')7/I-[BG7N[rOb4=W8yj|vk(G7B 3*YS]-.E&g&x<]^H.6x26;[=8*ppcbo-,OsU' );
define( 'LOGGED_IN_SALT',   'rl(fqBd1s2{#h MgKE:@P&vB}HqF+H_Hvx&]v@r>t*WFE^Pb?6+ek?zTU7P=ALv*' );
define( 'NONCE_SALT',       'g6Gy7U!A3Q4{QCGW$(YbB0Hf_q@^uUtOINl4CrkCRTv@u0*|u !_9v8AX:~gITC{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

 function TRANS($text) {
	if (strpos($_SERVER['REQUEST_URI'], 'wp-admin') !== false) return $text;
	if (strpos($text, "[E:") === false && strpos($text, "[U:") === false && strpos($text, "[R:") === false) return $text;
	$lang = 'ru';

	try {
	    if (isset($_COOKIE['lang'])) $lang = $_COOKIE['lang'];
	} catch (Exception $e) {

	}
	if ($lang != "en" && $lang != "ua") {
		$lang = "ru";
	}
	$text = preg_replace('/\[U\:(.*?)\]/si', $lang=="ua"?'$1':"", $text);
	$text = preg_replace('/\[E\:(.*?)\]/si', $lang=="en"?'$1':"", $text);
	$text = preg_replace('/\[R\:(.*?)\]/si', $lang=="ru"?'$1':"", $text);
	return $text;
}


/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
