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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lasdeliciasdegra' );

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
define( 'AUTH_KEY',         '5d`OsEQV#g(dO5V,}&n1FYxO4oOWv).1c34Rr~`0Pk{Q#:=sPYQj`&)gmyIG]8b:' );
define( 'SECURE_AUTH_KEY',  'zvmy2aP2tG[P7Aa~f u;y^sPXnwxQu#Rj&P7Yg(1Q2(UXtW^C%u> {:@[&!_iHo ' );
define( 'LOGGED_IN_KEY',    '3)aNeev2u8u9<&:N`f|B47lm.vL>P,uOIV6]3&>jsu(-v{}%9Z)(~gdQzY`F@8N9' );
define( 'NONCE_KEY',        ']lf,6[i)7EjxJ~TP*A$m>}%g*L7n92#=!r9wiy#_+Uo|R8yI;l&)FPHtI[Ih1[;,' );
define( 'AUTH_SALT',        '2dbPsx*pxY!h2/D7%P<6`f-&-RR60[oThC^P@P=sa~LmDr~`u@f*g>7q.-*w6&EP' );
define( 'SECURE_AUTH_SALT', 'B`z$9i>GA>a8p|8eG_,UttU#DTBlR{[lh5^!Ry11HL-;K$M%A<oHp=]|6inXclO&' );
define( 'LOGGED_IN_SALT',   ']d}9MK]!W(:6S@QC]/lt$^cAW,&`K(]%0SSMCtO *#``djNX.T8<T@[3N{-K)CM^' );
define( 'NONCE_SALT',       '2,h@-H&>E<.+c-7J!s_LG_>nE]RcB{R-AQjRw(xVA#897Q_VqPL9V;zBLf&^:~* ' );

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

