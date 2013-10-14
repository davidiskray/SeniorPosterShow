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
define('DB_NAME', 'wp_postershow2013');

/** MySQL database username */
define('DB_USER', 'postershowadmin');

/** MySQL database password */
define('DB_PASSWORD', 'ASUvcd2013!');

/** MySQL hostname */
define('DB_HOST', '70.32.73.104');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost:8888/seniorpostershow');
define('WP_SITEURL','http://localhost:8888/seniorpostershow');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z(b?NnQ|fdwl*G(qOWSb;91}~aQJ{`X3t!*}F2*1YxKC:FAc#!]ees7e@dH:</r@');
define('SECURE_AUTH_KEY',  'x:[Y]E+O=pRxJYU+;caHy~~kwNBpN^Du+QnkG+9|o7+D:tHehZ1Vo2/,6eZCxa[G');
define('LOGGED_IN_KEY',    '}aydG5+jfF89Uhm([,4kFZB:wJ+5:BwzRgsXo7^|nmaL}+t&w& /_:.w+a-0z61&');
define('NONCE_KEY',        '!19o([@t5Ae&d$;KL&|Wy+!octpCn<D{ZpS|O7pA|E6>uRX~3j^507=Bjy&ZK+pA');
define('AUTH_SALT',        'E3rF#QyL>l<IXaj+2!=*#%aNDxYFX4-Sl5%5@IR`h>r>KGUYF+|QM.<l&z1V~R02');
define('SECURE_AUTH_SALT', 'f2Ii$at/-K?+%G@qyj</52PE1ptY %6?-lF}1]ml}F4>|`$S.7UewwY,anK{vGL%');
define('LOGGED_IN_SALT',   'G%}}ca(%?bo-fi/1,Kl29o7%6k[Y5(.L.,OaAA #P-]dq)@up:]km`.5H>9vToZT');
define('NONCE_SALT',       's~vT%f`/|mO-B2!8/+ztb=Z[Ey8,64%6:1T|(}XGsB+d+[XfBdq/u}U?2u^WQ{4k');

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
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
