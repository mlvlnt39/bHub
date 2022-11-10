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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bussinesshub' );

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
define( 'AUTH_KEY',         '85*Cx}hrF,8?];1}_u9pw.wfuJ],c:$S~V#[Ds<KnRkZIx!l!Y,WgOKw6u:|;b@t' );
define( 'SECURE_AUTH_KEY',  'm!h}:]OJnVP)O+IT*hg}0vyf-heZ)Jk*+{lOFQfwB3I;RW`?|^OQy9x|Xf#Ay4_>' );
define( 'LOGGED_IN_KEY',    'ft2K81ZK {(E@2zcRz2l`/~Q!RW6cV}{OYu?x(J,DxF5dbDDK$*LWhud;4|h}v7D' );
define( 'NONCE_KEY',        'W5{J$Uz-r$#(s@HtKj=p aJv/1Mhj6>;r3;mHD)rp.VZYZ4hN0.nT(/><)0CCv#u' );
define( 'AUTH_SALT',        ']bG}b+e$k}}DONCjcj0q02X{rm>ND;rWarS:~@Tv3[n5bm?c/n2e5#xY=0hpK q}' );
define( 'SECURE_AUTH_SALT', '`b^Ap[SeFlr`&DN=$#xPX++!a1 cg|,|:Q&$nvQx1wYm]T#*>yTqP.WA`c2&c+0[' );
define( 'LOGGED_IN_SALT',   '.1a`59&DQ*A]WU%3$?m%@}%8:EYT!O6+C?8`Olckz4`XFqW8@mv}uc6RA-}DeS<r' );
define( 'NONCE_SALT',       '*nd=,^t{ZCX{H$F&p35#7##ayNY,n#m>)/I/DDdNmPk`YbNTvQ>nWg:3~V ``J#Q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
