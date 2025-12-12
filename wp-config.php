<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'root' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'vrmJkgfoGiLQ8ztNi4BS0xZ23rLTFV6B' );

/** Database hostname */
define( 'DB_HOST', '49btz4.stackhero-network.com:8079' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W2fk1>NwkpV2|pp(%d,tEA9$}:}Utvu|IY:ed~GME)D]^1IC#X8v}|HRpzf/SaTl' );
define( 'SECURE_AUTH_KEY',  '1vwWrIu6=>$M5e>36tDqHKiMYseI|Li!k14V(h1K/LjC(Gt;Lg=U9zY#U3Keq<wi' );
define( 'LOGGED_IN_KEY',    'L/MTl$tExo-Sl^3!Y:lVyb``*vE=nC+D@^}(^5)du@UZuK;}^u&fd1`|p}]AM17)' );
define( 'NONCE_KEY',        '/yBDA<}-T&JkQ3oDY_[KDY$h6mFRSz4{c}>:aGTn{fv3aKw6|x/fAES<vLL_8L}%' );
define( 'AUTH_SALT',        'H/nuJ{Q7a2+Low~<Bo::2PrQeOi0QkA;,|}-0HZ] w*4!q}cBg;7ZLsfk9-Gf|46' );
define( 'SECURE_AUTH_SALT', 'cA*X>tvP@*iDv-Co^a8P,u3?9%J[.f./<60j/M^si,n%6YjHC:1L#|f$onjSYzvo' );
define( 'LOGGED_IN_SALT',   'Ls?7#9m!]A:kU1SacR{B 2$hlB,,Y3KYv MaCH2,cNPEGIw59Uj>@/-:9UZG8&(D' );
define( 'NONCE_SALT',       '5NEidQSZYcLn>UwWs@T&^Q +zJneFDyS}OYJnvYEl7R%dc{ro,PF7#I!y a~12_/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
