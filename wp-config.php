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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'w _:P];zEwA>FLZ|oC)xd<8379%]^b$m0GMDew|tdDzekfFaSeC+yH,TR=YCyYG9' );
define( 'SECURE_AUTH_KEY',  'NCPu !EnuMt>%uS5A}Xg@AKC -~OSTA;2l66W|b@(gy*?=.hbC<.9SlHjUOe%i!-' );
define( 'LOGGED_IN_KEY',    '{o|}1X.^QyLh:sjrUVWPhqSiA.PTK(bC1vZ$m:G!9TW6/}C1&p6~};06$7K9@y%^' );
define( 'NONCE_KEY',        'Wahh3{&E/`tRKD+LOUd3dO9*uvfb$52+.tiE?5*Ns;8Z;m;lx}WWv5[y|Mk:?he?' );
define( 'AUTH_SALT',        'v?4DP H~&U.WdQX;}V UmI<FJD.&JB4jLMaP45QxDNGd/u0UqB~I:}=Yr4ci1_Jp' );
define( 'SECURE_AUTH_SALT', '@fNZH=y]?j&5A1Eoj)Mbk?P,?W~/+Q!FU|C7Q/X+|P0cc4)[qF0l74Eqp)|C VIH' );
define( 'LOGGED_IN_SALT',   'DL+n#5V)dRBOn}opiG#s^CZ$mo!n3j5E_jhStzQ[(DnpuM^{TARWAs`mQX[N:dY ' );
define( 'NONCE_SALT',       'mL;J_/8)i%%<=XB$KXm,El/jspForZvRO;QWp!Us*>axcvk&3Da|l0]yjq({c$@`' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
