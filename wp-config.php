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
define('DB_NAME', 'winsdt_redes1');

/** MySQL database username */
define('DB_USER', 'winsdt_redesuser');

/** MySQL database password */
define('DB_PASSWORD', 'redes123');

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
define('AUTH_KEY',         '%a,el4O&yP(W4&5ZYGBB@|fJ#UN*J<]7%20rC(S9dZB9 R+{szxz5#7Ra-g{|N.c');
define('SECURE_AUTH_KEY',  'n@>-8_Swl&JtuL[-Z,^0`}-l9Oe8LetF/{4.iB4YtwgN[rj/ZBe_SUHw1;tWk3sY');
define('LOGGED_IN_KEY',    'gm&f1NJ*H-XeU2dz&Uj5hlF-s=I<2g*xAtC?Q{}Oteo{|tXfO( s%*dF|r?*oz*1');
define('NONCE_KEY',        '-i]d*eu{lU%=[,OFbAnuRE-u1/h/z(kF-%Tov%,3Lpt[(0q[VQ_Ld_vM@M$6Q<O4');
define('AUTH_SALT',        'P*qR/SW%uFU- (e-$G*]&EuDUc@hcM-4N`$p>v4Oeg1g~h.B7[*xK?dLFJ,ufe]`');
define('SECURE_AUTH_SALT', '-5$J-6Q$&>s`7Xz*U*6_qHpuu#Z)&70RQQY@ iX:k~P|-lak:Sv+~G5]w1;JU/|F');
define('LOGGED_IN_SALT',   'W!R<^B7Q7w+*?WaDCwWA;l*Q>])c7;BYiUq)yGbZ_~mDEQ=%1UP#JF9-z6gP MBo');
define('NONCE_SALT',       'SymZ14/.>|1m:)v;NV:Q4)Ka2~l++A-,}|X]L^KExMXmrhc@Xgs3d3$([E|?`^_E');

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
