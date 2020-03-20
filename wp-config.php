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
define( 'DB_NAME', 'anareg' );

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
define( 'AUTH_KEY',         'OR>P%j3JSyU3>HTnwqx3nGEak*u;j4y79QAc2d#_@Vr2zx6XvD,Su0Iss,-I}c6(' );
define( 'SECURE_AUTH_KEY',  '3^Q-<N<K?b6NmOswJ Hc>)E}Qam/,To^}wGLm7ZLL*O.=l1bR985@}o33I0?+TkZ' );
define( 'LOGGED_IN_KEY',    'Zdc/kl=3bCKHy=HYa?@O552%lJ*@fdq0$rqZ`wj[1a;[.fvv}^ag&.U@NeqH$>g~' );
define( 'NONCE_KEY',        'D{ffy)-/FWI)_`MLgwx.)V8h-:BVhn:p(dZTTPb)`1`]N7!rUQ9V5WD,H_WzrbV7' );
define( 'AUTH_SALT',        'ELKc&c/rx<rndAl<Sn;G3dA8sW bl7/6Zu(Mud5Sl?0[G?{d-8+en$TBzQV?v|No' );
define( 'SECURE_AUTH_SALT', 'iotI_OhQIeAYO(>Oq`*y|VvXIIfyhM+*.<FD[/Q4K|gLzm=NR9tF4o)v4Y)#9{F3' );
define( 'LOGGED_IN_SALT',   'HXQ)I{wv1uJ%_t()f42U6Qh~fHYHtz$xcUAKG?m%^-Yb~b40$_/Om3;mAAb/K2pc' );
define( 'NONCE_SALT',       'z:QnJ&Gjyy&^vf:q6dVQM6yZvF-=EU&LQ6TzdE[wMN8nn``ah4^cQ8pG#Ld<txb4' );

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
