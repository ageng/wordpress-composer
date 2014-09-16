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
define('FTP_USER', 'ftp_user_here'); // Your FTP username
define('FTP_PASS', 'ftp_password_here'); // Your FTP password
define('FTP_HOST', 'ftp_host_here'); // Your FTP URL:Your FTP port

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '- e6UMrTXGUL3/pTYB#zQ<-H|1d6-CPeBxY(_WD/VJO=w@c#4H1s4w|<R_l:AV`b');
define('SECURE_AUTH_KEY',  '#*AZ#Vn|lljbb-U VcPpPhgudh>}uRu8v2jNG*.x7dfe&wa12acT-x3%TX3|k`~9');
define('LOGGED_IN_KEY',    '+2)(N9v17KjBKQ*)f4(D<r+{J<u#+a5UHQW(`8o6?E?K5U[G.,.qr2<j+65a}{LK');
define('NONCE_KEY',        '|ZPkcciK`R/qFr[4+FQHUM>j%?J~c#S;li.LsOw|%u+g^^AfhG`t!<D/:3%{sN1`');
define('AUTH_SALT',        'yQsoZ#}PD8zsEp%.|OAD!s9#&loM(vMb6b$Je$Py~lHE, mQHV_ix0C[71~e3<$W');
define('SECURE_AUTH_SALT', '8!m<u96JCn-C#N|hM(tO+b=Kk|t`OY11rL}UAT*[|A_B|,EACW9(_7AmVjdiD)3$');
define('LOGGED_IN_SALT',   '.DK?t.hLt*#&sG-Q@}Z5~g0@7sq+QNt>g7l,kk&0zBlC.Y>fmlOIV46JWFMt}@5{');
define('NONCE_SALT',       ']DVcOeBB,)^|;lb594zN9)&q{Bbc.0P@((i;;#{R|TjP3jAI,xQ(9I.9.N]@ec;Q');
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
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
