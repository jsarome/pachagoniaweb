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
define( 'AUTH_KEY',          'BBbk~y{hocWa-4:~yn~0;[B|G> 46XT&~-<eHK.lPp<}UWTgh2L2[yiR,yb:_ed)' );
define( 'SECURE_AUTH_KEY',   'pkoivANGD%ey77Af FRNI#.;)vC/wZpIp+. 1a~$h5WB!J;R-1Lv&]|x5$>#eQWj' );
define( 'LOGGED_IN_KEY',     'w}%O~9e}@`^E MZty}cYt1Y7g2E,j8/nO8K4On*e||ku_FMD,,k$*#=%zebaq}jD' );
define( 'NONCE_KEY',         '04U~rGm+GQ^$1I<$iJm}>Ots1SUo=RPtJg !k;RvO$i6(J*jZ70+8I4&lz~?8w=*' );
define( 'AUTH_SALT',         'O*OMl{E#,uM?-}7=l@Ts/I*_=ut_gu]y]F&d_}_8|W((xhUx?aA}Dad=`Qs4UNo6' );
define( 'SECURE_AUTH_SALT',  '6F8hOXP%J;amM*3U`e0y0 }Xz}-7HO~J};Ng$Y u5()y4fOQ0o#?I?v<Qw e>jYC' );
define( 'LOGGED_IN_SALT',    'mxWd:}In;%1s,:a:hD~4fug-!YaXk$qj|WQ#+lE~_5qo{BZN0NKzFAa&AAKR!<xC' );
define( 'NONCE_SALT',        'T59Yzr4Q%E,g?]z1pp0]a`QQ~MWp|>>?~@>I8AjwC[!>$_K)TO4}g;(5KD:euSA6' );
define( 'WP_CACHE_KEY_SALT', '%K_@a?~k7$b;N~~:Q(o[.`_I-J6:3$SS^lcg%CgfQlLjc]HP8T<<?(in~UOc#oOV' );


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
define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
