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

/**
 * WordPress Environment
 *
 * The default usage is:
 * 	development - For local development
 *	production - For live site
 */
define('WP_ENV', 'development'); // Change your environment here

// Switch MySQL settings based on environment
switch(WP_ENV){
	// Development
	case 'development':
		/** The name of the local database for WordPress */
		define('DB_NAME', 'development_database_name_here');

		/** MySQL local database username */
		define('DB_USER', 'development_username_here');

		/** MySQL local database password */
		define('DB_PASSWORD', 'development_password_here');
	break;
	// Production
	case 'production':
		/** The name of the live database for WordPress */
		define('DB_NAME', 'live_database_name_here');

		/** MySQL live database username */
		define('DB_USER', 'live_username_here');

		/** MySQL live database password */
		define('DB_PASSWORD', 'live_password_here');
	break;
}

// ** MySQL settings - You can get this info from your web host ** //
/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Custom Content Directory **/
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/app');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app');

/** Custom FTP account **/
// define('FTP_USER', 'ftp_user_here'); // Your FTP username
// define('FTP_PASS', 'ftp_password_here'); // Your FTP password
// define('FTP_HOST', 'ftp_host_here'); // Your FTP URL:Your FTP port

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '5RbrxO4Vu|/^*?awo8A/cu?AEDuNM|wH7aSpNaqmAcT]JFEe=sn2*!k-R#O9.sAl');
	define('SECURE_AUTH_KEY',  '30`;D3S|lZMKBpL+k!T!|nYlSV^r.OiC|4xdTI;H=*Be@-[qXGkf>12mDp;/zeF*');
	define('LOGGED_IN_KEY',    's)#t|3gnCyZ-4t!]GY-4P;_Ixb-C.i%n++,p;GBl~3uJQKR@*.BLFpn0Rs0#0y.5');
	define('NONCE_KEY',        'FypLbMm*@(3+ n{&A@wM>{:V2[yT<[-)L%W- zvp(&V}tHG?hFpyp|&u#H,P*;c ');
	define('AUTH_SALT',        ',#{[KP/2XdqZ;a.2`:k}[&( q>l;hkf($+tUULOQ9v~pET]E9#iA&`P:d)|k:pmn');
	define('SECURE_AUTH_SALT', 'i$>Vc[K/StfIt9,+JZO>D}Z1* .R%;I2Zw@0w+,e=<*gNW(dH)NxW159Pc{m2T[1');
	define('LOGGED_IN_SALT',   'RK.ms|f>LG.d+QdY}BUVy4!hx6`!d/LJ#R{BMetvj![uyGj4c#m(0a@_hg)j1G`J');
	define('NONCE_SALT',       'IE*Ju|BS|p!%t.!UhLDpM*0Tn8{,g{y!c6+z2qkP}%+s;BlAVB-t|B+J%U#s__g0');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
	define('ABSPATH', dirname(__FILE__) . '/data/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
