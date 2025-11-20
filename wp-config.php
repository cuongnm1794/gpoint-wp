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
define( 'DB_NAME', 'admin_gpoint' );

/** Database username */
define( 'DB_USER', 'admin_gpoint' );

/** Database password */
define( 'DB_PASSWORD', 'FsCsLt2z7mxBvtzjXndG' );

/** Database hostname */
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
define( 'AUTH_KEY',         '@0|@Y-mX!e8^-@|u}`kBBXEMT>]fAm{q{U%hb>>Zb-i}5G1/#Er1B}O{by3=k:jU' );
define( 'SECURE_AUTH_KEY',  'skTIXXZFC.xa!}Tsk5n=:z72eQ}:yW!{iI;(N},66Z1$rQo{~Pjm-Xk#-Qr2E$Qc' );
define( 'LOGGED_IN_KEY',    ']h@fzhrS5q3,goDUk{yYEpN#>TQ G!jFL%Zt*dYQOxH!LVv]y365C{p*:$Bu dU{' );
define( 'NONCE_KEY',        '.L5]@=tke$Wcp1B?@dklXtlgMdQ*.Y&|KUg<!&vF=g<.!X[-zjDHE4x!,ZAoK5)F' );
define( 'AUTH_SALT',        '@y9@&]Tt<}2O;niZButlsST+@Y?M&LJ,%-c0/ %Kljf[p&`CXo*V?dr_!%_i%#;s' );
define( 'SECURE_AUTH_SALT', 'b3op(lel0C!gDy,K$wQTu,`]0~X^TTE3^@8&.(@dpG;5m9gZ93$7nGOt&O`Jr!JK' );
define( 'LOGGED_IN_SALT',   'H_$6FgI2TcgcMSOW=F+jBblhU0)>YKqa5t@U=DY`)]zLK/0azLD!Oh.N*0:iA`tQ' );
define( 'NONCE_SALT',       '~R`j0NV=-kp6r,_Rd?YaORtIxpHEeysl$.ppJ-I,*m_z`1|Snu]3F0pZI,BY2lxk' );

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
