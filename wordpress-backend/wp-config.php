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
define( 'DB_NAME', 'dbjctwudlgceiy' );

/** Database username */
define( 'DB_USER', 'upf1irc2ifmcb' );

/** Database password */
define( 'DB_PASSWORD', 'f0n8znpqir4g' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'W+fL)o:7f`_tN3KaZE,GPvvpR;1H^PQddt(*#C{@ eb}.gMxP %DieqG04gCwX|g' );
define( 'SECURE_AUTH_KEY',   'P,*m1#Lj(&eip3mC:Y:uXLgazK}W]V/56k0i$pl48^j;^sh0I<VM?U$T@8LZ<g[d' );
define( 'LOGGED_IN_KEY',     'a-*`YQ4UX<.*E,)dM(*VQn|Vz3tj y:Um)MwWro[%_Q.Owc*6n#|gG_z=!wgHLej' );
define( 'NONCE_KEY',         'q#=<YnIQc:cXUz3#*+?P-vC21I-)lg.2B`Z/)WGWT%<Y?a={!J-e!j5ch?cEI^:R' );
define( 'AUTH_SALT',         '@8IFY}GcKIFRLV/s!> jYNC{8VzP(eEFdEmj<|+N+88L.: G9WZ623N-c@_&J?bU' );
define( 'SECURE_AUTH_SALT',  'NDi@A6):yC h.+iDC;ju(v5ZB/-o<i3$YA#;h^?Pgf@D*Df>,u!jSooH`M^$74:/' );
define( 'LOGGED_IN_SALT',    'vO37i2!o{eJ3MM.hZ.Lh7pVgf$XC=`}9@r8lo *Q&D`v C[S_eT?R/rv[Z5Z/Xi.' );
define( 'NONCE_SALT',        'E2T^>9b 3y|eqK>?CPs&&hVJ)*p*33}DV@ymEV)tBJw3A{%+SgSG=o;$#z4&q%8U' );
define( 'WP_CACHE_KEY_SALT', 'vzO,1|]Fg9?-5F$90@y g&j$U3f!eo%2CA4?S~x}Zf BpQ9HAzMB`-x/F9yMo(Ll' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sbe_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
