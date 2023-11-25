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
define( 'AUTH_KEY',          ',T^5v7F)?~j!;AN4i+r`&pqi}6o(Pu6q4[+[i 8_ _9bf|k?*GQiCD8Egsdc0M !' );
define( 'SECURE_AUTH_KEY',   '0dy^jj:. /v-1GGLL3nF8#Jn49x$eq4pl5L[D%=79C?}*~ve}?mF|%},YxohuYR(' );
define( 'LOGGED_IN_KEY',     'Xi3,rTcZQb].wD&YukgO#?<@&ZQz+CvF9CYjH<u:P ;7#]c}u-P_Cj/50hoKn:?K' );
define( 'NONCE_KEY',         'j*NdVpa_mC[C1`THvvBp9==u`Ekn2WJG|7sbzor5GFbG795_)}$oU]344SivE_!~' );
define( 'AUTH_SALT',         'o/OHhijCR|jGwy6f6,Y4{gyj&.M[[D$rl/u~B}=0sK8DE6pGDd<S>62f[x,Mb-X1' );
define( 'SECURE_AUTH_SALT',  ';r:Ad?w,MZK] 8N96ny9khVK1EO(EYCcRGts }X#*@G,yBW9`+%GY])K+x,%s8!f' );
define( 'LOGGED_IN_SALT',    'l(U`fL3*w,a`rl5Xk[G}<|:SXj%,Q(7%gj*U57USY6gEQdt~^]db5{n,u!1e55KP' );
define( 'NONCE_SALT',        'qG|kfpOoS%j>DBJsHdj5m5Q)[<DvKX[6*lPlYmmdEn3g>?|89ymjX;tZq!P,`62<' );
define( 'WP_CACHE_KEY_SALT', 'h><e6p|Z,dd^VGFe[vc]}C8!+df@Ew5Oge~SvGpE];k$#U.|1dcAtXrn2ZJ]ImcH' );


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
