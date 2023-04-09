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
define( 'DB_NAME', 'travel_blog' );

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
define( 'AUTH_KEY',         'Yu|BLYd k%hASIFmd,<!0YVYtKR-@<AMcwXVP;:3@Au(nX9S&64`>aF]FU?G*>5v' );
define( 'SECURE_AUTH_KEY',  ':OSl_g-kN[O)n{:W!!Dd0]E]CJ6+/khYz;gvZSdV4QU) DT$.4t#,f4J5ia=;Q%v' );
define( 'LOGGED_IN_KEY',    ' CTbc?=5uq+h*W],<GcW(BG:3PRpf!9_K{B`8o5lRZ-PRp9~d[E#16,}y$E`{k0F' );
define( 'NONCE_KEY',        'qr96xJt5?W(`n~Iq1p~aeAN$i3YRe_jM<]J]oU+L(jN1:snV01:dOx1.Rh{&0+[G' );
define( 'AUTH_SALT',        'l|UlZ252&}>,q2q}FU@z25$Lqyxl>~,v}.8Vl!&KXkn=ZJkzgs4,qt@%XqbC{E?]' );
define( 'SECURE_AUTH_SALT', 'f#lh4ua}!qV^9;^}7TPk|f=BTQS1hTU5 M6)CX,N$7Bn$j`@-kB2}WjG|q`/@c6A' );
define( 'LOGGED_IN_SALT',   'U~x@35v`wb9g*Lh6U2Wq#z)~w)kZ=% =+$Y]iHIeR).5k)+g-ABVhvAyYxtuW*GW' );
define( 'NONCE_SALT',       'FTg:2H?P)c~Lr@vC@8Z1)F{[g1kmag@!b^f=c(XKyA_.sp2iR<F?>*Lrs=!E@CWA' );

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
