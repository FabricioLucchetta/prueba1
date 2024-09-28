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
define( 'DB_NAME', 'mibasededatos' );

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
define( 'AUTH_KEY',         '2(b![tV(LUH+F_,J;p=O}p<#Rtk7PE`tfr^/+3bTa[<19l*iB%AG5a~)LS_]KY~A' );
define( 'SECURE_AUTH_KEY',  'NP~wJjZ`}Il-0J.)$6Fk*lNW~vEF~gWRuxp7!;~illcIzJkfD&?npQ*{6ODO[Z9Y' );
define( 'LOGGED_IN_KEY',    'YRftCrC.oKWyW:H!4/L%@by![ek=V(h.B?hN/d.d#ODh>x/yjjmq~n|hml=mnxOt' );
define( 'NONCE_KEY',        'Bdk{(Hk7/q}xb9.2Uc5WYoHY:%A>9IquB&e8okOy=RkI%k}cc+HM/Da_;f@@9-UL' );
define( 'AUTH_SALT',        ' T{peC=e-[[{[Y!5]s)IBqc&`[h{-{3@SFrTP7mkQsXCAQ.eoli<nuxavbEt$4$s' );
define( 'SECURE_AUTH_SALT', 'dMJ2^e,Qfnu%8t!t$K{B0wn/u,^K&>-Z5Jv1(FqwwJY4,A^p&o^lg wNitwGg_))' );
define( 'LOGGED_IN_SALT',   'Q-R&syp6`^J+i[G{CR/wq%t5oVu?g6nt]rl~L,K]*[9wV|3[Roupv~85FHpxkQDu' );
define( 'NONCE_SALT',       '>.0$5|Etz,|/(GTPzZ0!g<#r^DTN4C}=/o{Qp`{g&l?48YN>2o45I4hK(6ioP`j9' );

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
