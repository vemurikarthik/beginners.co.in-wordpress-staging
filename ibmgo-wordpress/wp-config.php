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
define('DB_NAME', 'beginners');

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
define('AUTH_KEY',         'K?Pk#>%x&mx|+!vXe~:J{G$7N{n1-bl?UUEi{s_,iD(<eh!T;W28bI||de?{c-Pr');
define('SECURE_AUTH_KEY',  'Z6C++|vR+* cxE!-{3:Rh-0v+1cWA8I<Kl6?7em@_hiAj/YU-%s1{(NFPJB-VD=T');
define('LOGGED_IN_KEY',    '%Cn--3F;HW|]jq|/kG,8?pm3c>5}s:Xx]pI2e5|^-3(:T0G<MBo}-l;x.FiNuto&');
define('NONCE_KEY',        'M=x|[fI5$O.k>;%&a(?+Mxa(WR|<p2KL/T4+G]s*+T>8bFm|9[@G[E)?u6N4YRvF');
define('AUTH_SALT',        ')T;Sn-nQVN4GLz{B)UM;H$-a,M$K47a-H+nt}X(:lX+.aazBk9+nj|0=#$b=IOVl');
define('SECURE_AUTH_SALT', '.<+Y|)()$A5CO:yRS.crc|,X)/2Vce=gx$YP,#=mg&Tnfo727lyxC:@=6tyIfD@x');
define('LOGGED_IN_SALT',   'a( &tIjX^~}8-D<7c*%b_uO)cB$nc^t8F/2n#hW9Kj+7iR#ruUx=Xvst-W=)2Si-');
define('NONCE_SALT',       'p`w5N:7b/(]wad-qfCLd7sK{iQ.{7P^F2Q{as3,cB;OwO>0l`VyxP^4kLd ,~ o|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

$table_prefix  = 'ibmgo_';


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
