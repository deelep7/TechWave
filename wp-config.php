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
define( 'DB_NAME', 'techwave_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~n?>o%8T5yJq?/X%6ifx3A:]]U~Bo4kAZg1O<O8%ou)aX/E`@0P+Y77uID+f`Z/{' );
define( 'SECURE_AUTH_KEY',  '2/WaEB9N$piVB_dY9e%3)n:LMlP>G{?>cLoNiC8(uW&LWt;{`+-4mWoQ|?y-65,V' );
define( 'LOGGED_IN_KEY',    'dBvE%|#QN]J*RC>>,`x*5gr{#w.aA-;>Sz[O4/X2We1m{M|zi.4o,KR~i~|xl2Q!' );
define( 'NONCE_KEY',        'RDc<Vh<1 Q5=?m_0d*7fpoyr{PqdW]=BB^-e/6u.EHuX-q=[w7(<{a&3:~~D/rMe' );
define( 'AUTH_SALT',        'Ncj$!/A2Y&rn9MI]0A@<C`CSs`X:M;:G3<7d+Y2`iG~gf!<_;GtNc&LTrlgVW|*o' );
define( 'SECURE_AUTH_SALT', 'vg7d,FS^~7=g@<CDi36g,~fL G#v&]b,$Fv|Y3;CDL@GilhkMGA0^/Fx8>;H4aeH' );
define( 'LOGGED_IN_SALT',   '1]2o][qcuSXM3@m&L27uD%a}(uxCe+#OhFFj]}~9Yb]@W8;u? s77:a(N+.GK$F<' );
define( 'NONCE_SALT',       'Nw&&tnqP;~4J^`vzt:VlKp:O&~cXT8X!jH2Ln*oLHAjL9a)V:gsqN-Z`HYmDZ`?4' );

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
