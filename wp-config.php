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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Vip5f974]D cH1_&a.8B4zr|`7C9!<$qChU<?SDWsoa[%RQs1eiVZ*9,)7>2-=^n' );
define( 'SECURE_AUTH_KEY',  'Dd6LCo+Upzx,0(e($&$qz?(4AR<OB^Hb)!^Xy_1QEWyb&Qf5O[=zQR6AM9:N$X!a' );
define( 'LOGGED_IN_KEY',    'fm<y;sskSmNh?X[0 t<}z][/2?6.ONhbD!ejF1XL+G<uuZ2Lw]VZ>.iJLO##_5EN' );
define( 'NONCE_KEY',        '6KbF;vL2VF:Pq1xtq)/y/9ft$R@```3;s?zpW@=tRM]c omMeGvjHTA[Q&$I)li^' );
define( 'AUTH_SALT',        'BY}G0{Gnm$ax(/~K6<~,<JW*1FbY;94P)L,de/^={?yJm]/IiM%;4s+>tUcKC3L[' );
define( 'SECURE_AUTH_SALT', 'cHy~vg_nA`&g(7nSwXv]6#QoqBi=%u/_7 x#L KG`[<KJ?ee.c9f_=P1Tv1?xf}j' );
define( 'LOGGED_IN_SALT',   '+48y;tmnv|a+dwmd*I;X[z3Rstr}5/*Wsa?da(qw@u-x`H=!?ZkIm`qYM/CtYR?O' );
define( 'NONCE_SALT',       '9eEm_5-)<P7a:,4s&`I0DM@*dRC-8vFK>U/z?LWU`*)*w<a4+((OR^JEVr9l96a>' );

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
