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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'socialcode' );

/** Database username */
define( 'DB_USER', 'luana' );

/** Database password */
define( 'DB_PASSWORD', 'a%t#RCGdVEqFPJuaqs' );

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
define( 'AUTH_KEY',         '6bh]lKW7MhaArdRoQ>C0$Su:Rb`+n{{;eMXec2BIZXfL>/k5GLL-x8bT&)UhJ#43' );
define( 'SECURE_AUTH_KEY',  'r5E>0:TNesR}u;e@t>Pe6udjlB#w;<F-3!w9#Xxz(s4Tgm6GgX/j[nHM4-TRu09M' );
define( 'LOGGED_IN_KEY',    'cO!h6>,sMT{M+]--]qChLe|rd(uV`w3DQUw<F625oTa,Syd[KzpG7A<z|!<5g9B1' );
define( 'NONCE_KEY',        'E|EWum|t>hQ0Avv9CQ^*{}P]-YQ14i`oguNZ*T=%YOZ:BboALM;eKCAQvi[~#atw' );
define( 'AUTH_SALT',        'JZdG 4jH&YW4*Uv2Q|@tn_Z3kUQ=pF[;J>8U>sH1?9Z@e~l*voc1((wR)LUx6Pe{' );
define( 'SECURE_AUTH_SALT', ')-[3d8U8,A: Dn#$[xxZk=H]l2>-1fz {ST/XyY3`FC,eSVozF:B>VbrK$DSqQ^:' );
define( 'LOGGED_IN_SALT',   '$I4=G-H:-*>UARCY9E%yy&UK=|3g$;e1bPk|k9X:Sw?qGJb.bg_?j!0~JvAsr79#' );
define( 'NONCE_SALT',       '^9wMB/8vs4wDeoniqz$/@P}X.0ljx*rsH%;XF*({w:%DY@v+G@@%7nXZjZK1(nQ.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
