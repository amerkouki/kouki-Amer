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
define( 'DB_NAME', 'kouki.amer.site' );

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
define( 'AUTH_KEY',         '+:Q.k|r+!+(|]/%9%@JswI6Pra3$jS%CpULJ~0jWxBf@FjHHF)w$vAnT=})>Q|@S' );
define( 'SECURE_AUTH_KEY',  '~FfTHG70A<xe7AKFNb,pRPR4~V xwcU#,ASRkMuu/}S5Gj@%FOR9<jR-{:eq{=Dt' );
define( 'LOGGED_IN_KEY',    'mm!#(>x(DP{#9iUr}knDk]e%3n#ActGJTQ[SRQc&hLw{d+cAnicY&%cuZfUoO1~%' );
define( 'NONCE_KEY',        '%_tnMT6L[uz|!34e!/FH|58ER6qVm!#c={>^]!OSzpe^j%I>LH4@5}eKIuAPZtcd' );
define( 'AUTH_SALT',        ';-k#n(#o~Xe2>#4V3bo/plKiHB&UZiC~V~sluPjv;</)Gfo^.?vZs@V8~[MW^C!W' );
define( 'SECURE_AUTH_SALT', '=XzKHMb! p|xcIocT:vnKvEu0EeiB[eR^9!I8|.G0?ow1@h*EJFKAeW1thL{Z=wr' );
define( 'LOGGED_IN_SALT',   '3y*OoC<=i+(6s5XhdGwf0{qBtgJLe0iIMK}2))xddv0joz3cBq|w`P0L3@0@$=-q' );
define( 'NONCE_SALT',       'Kn%Xxh20Gfs|fpVP:*&GoFc`c=:>Yp:z^Tb/xe[>5ly[1VfWO2*M*}X#3.s3} {{' );

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
