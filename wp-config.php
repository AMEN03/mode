<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'phA?9?#mh/0eKN.<W|F`jifFho;n<%pi]~^0G1=}UA$`Ba#irZ[C^T?O UMGNP9y' );
define( 'SECURE_AUTH_KEY',  '+AENiRnie=ic.!javR+oyh e=l|0 @Z.2%?@+G)wKc/H<Sr!(Xx~YTqs|dt!~|Hw' );
define( 'LOGGED_IN_KEY',    'M S82z2C-3YM0zlcKf?Q-p#yd5%YBUob1&3w}[hQM,M#SJI82{&gm!Rk[dEjt0z]' );
define( 'NONCE_KEY',        'O`2r*2>grZa8h+U-EtE-W13*(xe<=W(85;pd*(W5/YA`iAJLTC?!fqsNQr9^Z;K5' );
define( 'AUTH_SALT',        'IrU{6oPzkG&r^]2Ai%{.%FX%4iDscNU&XC?!~BlmqvT;ab{C`L7o,H<)0sdu8E`z' );
define( 'SECURE_AUTH_SALT', '~ApK>`S<JfLZbv4F-+B6gKDvR&rk,v-.4I{,9SNRoH2]ZUGdP;cmcUis1G>C[=Kt' );
define( 'LOGGED_IN_SALT',   'RgmmJpJ!,ilq#>z(5k7Y`FAVU!0r<<~=ce1jPtVuB%HzFIx!9hRV$-p@r*Uj}+K:' );
define( 'NONCE_SALT',       'gmoHa~l0orJUrIdf+YPVMSxE?o#8Y|g3:ghm2)2yI@`TQ|U>,qiDZ91I[vvK#}m8' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
