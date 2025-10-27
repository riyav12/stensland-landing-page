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
define( 'DB_NAME', 'stensland-project' );

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
define( 'AUTH_KEY',         '*|5=rLlZ_4+:JOk{6p;DiS[6BEl$->%n6PyRnDEN~PVz10Ys~kRTu5YHJ5hp:C&>' );
define( 'SECURE_AUTH_KEY',  'eT>J%qNU~v^9<l1{}aBEoMPMEjxjax!s1qQky[,o5n=XDTPYgDuv7EsMD:VZ/*15' );
define( 'LOGGED_IN_KEY',    'ic|r24fu>D7Ez99fgAW@tg#]$ue{nKe<PH:rI,~pe@;^WmNHg$T$MavTJ?YeMhk?' );
define( 'NONCE_KEY',        '(3Wn4<%&~~0C3,&11Esu>oHoWBC-oq1fxbpo`*1P]U|J<m*0*NyMY[Od>JiGpOOw' );
define( 'AUTH_SALT',        '5)is{F]JZcc&WFs33H?Sd[HN0;gO]S@fi:Zx$W~{XaBg:ams60>rdiu{7|{=t+{0' );
define( 'SECURE_AUTH_SALT', '=aIU?Nfctz2C%)PI~z-P+O4s&0w^=8&5f*ba 84`5ZelNB`462U6Gx-DA*Fe3@iP' );
define( 'LOGGED_IN_SALT',   ',5k@6_ALAQXLC*[/]H#I:jq%zIIWxpVsdw5 9{5@KlpR=<2J)wwt&Pe@!ha2]Or~' );
define( 'NONCE_SALT',       '=?h|mHgZ?TwFKI?i08?;H?R2n~6!IKo0G7}C|Y}WGiHdu5q?N8~`eZhP2P8e$5ye' );

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
