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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'M4@-WtQ:alz:T(Q&C~f)hcVDpC)(a)I_nhBzvufyj52GJb>a*@,!C|KuF/?$-@Vq' );
define( 'SECURE_AUTH_KEY',   '&,={S2QX(Ks3iik>n,sDVLV&wdFC*>wRK}q5=dTC{7R?r=`L5NZxr}x<&|]kUNg!' );
define( 'LOGGED_IN_KEY',     '@MUu<k1spD)iji_vO?gYcP&^p=iaP2,dqHQEulZ.f7Ma!:Urw{z>4pzjKQ[ v0DG' );
define( 'NONCE_KEY',         'pj6i=JzU2DzF[:~ekbjXUuMT?z?WW*/6nUqR ~Rj6UtHFwJaHw0p@M[CWNp&^I(&' );
define( 'AUTH_SALT',         'u3*12S]gRtmh_3{T-ys+RK6ze_zhc/<W@<ULV<4kee1w1FN?a8DCQ.DBQt7lEw$7' );
define( 'SECURE_AUTH_SALT',  '/SHm*VRB;C-s}.IE,7#l2dk?-S&wZ4`t@<g|i@p9vGms8Joh0To!TRAwDY=)B%A&' );
define( 'LOGGED_IN_SALT',    'q{5$z_(:D !4pyiH3H&Y3:}arnUaPQYE[]ubzE|vz^Z-k9kyvMEm)#3IQ* ^TAe8' );
define( 'NONCE_SALT',        'q}*/; ,?-X`7M#NPu04w}hVpTfV#Cm!Rt/ijH!_aV(d,=y.OjMbih$piCUP&4Er!' );
define( 'WP_CACHE_KEY_SALT', '7w:)W&|li4CK*)]oi&~LM@CUf7Z]ESX%h%/-&ZIF}`<4mio>Qmk2]nw6`#*x82D!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
