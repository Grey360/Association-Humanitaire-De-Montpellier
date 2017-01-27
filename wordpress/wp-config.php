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
define('DB_NAME', 'AssoHumaMtp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '56904812mk');

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
define('AUTH_KEY',         '1QWc%%dof>IvNiJrWvF%=rXGw-1)H%7|Szzan$n9%bQVQtWh~pHma<%t,m>|<CI_');
define('SECURE_AUTH_KEY',  'QJ~F#Sj7}^G/0FKb5EI[<vVege|1$b5J/Po}78o?v6dlKrJIa7elQGTc=q5O@lp#');
define('LOGGED_IN_KEY',    ',9D*.7.o} J<vLDzNkMRsXS8<zxiT@S{{QG[x)~&j<VpKy=xqbK#Oa6o%k?z`<7e');
define('NONCE_KEY',        'G`*8f[X9T!*dAm2J!ON>4[7MWiKUYVD/9p@*`hUZ,x[=U]SprLGye!wtWhe[HwiS');
define('AUTH_SALT',        '(1<Is@<)yO |]hlaCm ~|Imt`Y{$@5!ME1ix,uq&7&P_#9Uoe*y}u%1iXp}loIJH');
define('SECURE_AUTH_SALT', 'r1Un[>uqq/}IL2{5M#,FHC!Y{V:tehjOh9pq<p|;@2_?p]NtOF[[pc|uk?u6AIjz');
define('LOGGED_IN_SALT',   '|XERS^LkD+NX{wG_hyrWggkgBCSTrTup:IG34hLB%2lCj3{vKXNU*9OWj3!9]bm=');
define('NONCE_SALT',       'eNz-3YUPKUP02/S%-~U{2GYmA;b#gOc4<g5y2Tp6uCi@U%hZdN?M?.0#Gr3F[g{m');

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
