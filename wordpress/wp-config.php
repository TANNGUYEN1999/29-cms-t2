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
define( 'DB_NAME', 'demo_tuan2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.=],u0a{uXRa}Dl2mQtQ{P^uK0Iog4V[6h/=C&=ZnMbN?@$xTbbC#+rRdUyN8If.' );
define( 'SECURE_AUTH_KEY',  'i;;pY/{S*)n+3(f|s3M^5;w01>^T7?]VJmq0$X3n^E!V9W{U?H:prm`ofr>F&K/l' );
define( 'LOGGED_IN_KEY',    'Fxv$PUX7 p/;H8;0OlTE~=Tk6C@Y+.(}un*YRct]?;d&I.<sIHB>w~TGa ,~v@gt' );
define( 'NONCE_KEY',        '>@=2wr/Fa6X/Ze]~ $M#skXrLPcT-;T?QKIG(Us2-7tf>cQ(L7d1lG5*8o-@CZh1' );
define( 'AUTH_SALT',        'f:ZrTaWcK$9e^R<+~tcIXz9#_h}Z:H3@T.kkV;08QM`<c.{*V21-CQxKyaG8 Mh9' );
define( 'SECURE_AUTH_SALT', 'p6|AL4uR9dGhm|3nQ:]#3&Miw=k(5gbxtX]du6_`TY|_o_nct)h,Ot.Bq#uaaRff' );
define( 'LOGGED_IN_SALT',   '.a#Fz 0 z-%gov|gI:BPXO]VwV sl`62r#tq`kYX{Gz[!_A GZ-Ec3W1toBb*jHV' );
define( 'NONCE_SALT',       'rY2JjDA0/F#g>h`F[%wXd>3 R0g%%SniuPz<GarSl;SN~E|YZQ}<~=%iYYgyj)7=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
