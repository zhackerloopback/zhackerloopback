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
define( 'DB_NAME', 'zhackerwordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']`8{mc],IJkxG7KYFvo%HX-OZvUz]H>lDI2wowt=^:f*an_L;ak~iD0<W/yHoI+[' );
define( 'SECURE_AUTH_KEY',  'PQ3-@-@Dj<aj_dDi-.WKPTmH;J=cXQAk[3t>[)woML#mq]{Rs3z#F}8!,J1I${dc' );
define( 'LOGGED_IN_KEY',    'vu{CW([>i#@}DNEZb~U8n?snx3e&4Frw8fc40Db}5^{&3=6m_1_wE:|<2Jp@HN`j' );
define( 'NONCE_KEY',        ';xU}y$hiRIn6j%k@4#$cI7_bR:nMsWRwA:5>o9@.0j*VSumN.;@WA=@6$Nyp%0v)' );
define( 'AUTH_SALT',        'QS9#c.|n?+ozMNh*f?!P,HJ_@gW>wF z.k%bwp|;&d){6)wIhV B0}s`@K/a{+D~' );
define( 'SECURE_AUTH_SALT', 't(zo[iGnUby^ *Y1*]T^Q({da;K!OfSFZx_2B,OL)9>L$8siXQ7 +Zgr}3M?s7j/' );
define( 'LOGGED_IN_SALT',   'd8lRImkqoVvCuzpXiZ[(ZS|1gJIeZ<cp7PP%}Q>*jqWRiG/HHA(|m@.5znM[cO0;' );
define( 'NONCE_SALT',       '4Jqh0(Q7/N>}3m${Umeqlg9p[k[{5`R8_yZ+vO*_kD^lBUY9n]hTU_)btL&}o  0' );

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
