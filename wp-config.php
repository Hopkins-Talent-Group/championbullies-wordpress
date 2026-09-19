<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'sws83WafYrzexu' );

/** Database username */
define( 'DB_USER', 'sws83WafYrzexu' );

/** Database password */
define( 'DB_PASSWORD', 'Vt9tzA0Kb1kDnt' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '+ =)Q.GGwm5j8bW j&R1Ky0FX.pPDh.{U[Y<ZE0 7-h^h 9.9bg7qCYrQubH-x!@' );
define( 'SECURE_AUTH_KEY',   ' F$Y&BWfU^I)W[Kh@t? = Yk%U)u8(vI+li5F!e?rk+h7_8&[]y:2D}Lr|z/VN(*' );
define( 'LOGGED_IN_KEY',     'm;R$GXy?HxjYify3|Snj}fZ`H>E-j}KnnmjAEwMLeE%~V]Tex6Ai~$Lk<*;wdYVW' );
define( 'NONCE_KEY',         'P6suDNkp~<%-Md@qeJTW4#,I$W6:kj?5Zj&gHilaT$]8%Gs)?amyFS8:q;8@4%+N' );
define( 'AUTH_SALT',         ']K?FR5|Fi.>$$KT]1m@5FQ305JfCE39S->U+o*HX[5:HR>%p?PxKCa -p,3FX?D<' );
define( 'SECURE_AUTH_SALT',  '<%~L%GdOwsrxyq1BPA^2jW2T[2V^qMNiym?Z,I]X(a85L[gkTQK8mmyqb3.l:Pw%' );
define( 'LOGGED_IN_SALT',    '.w*tTF}bmy0aJ~v`/(2h{w<ijd=5h*[858[NIn+K(7/oVIxiW^am=e+&[b}pPvu:' );
define( 'NONCE_SALT',        'me~X,M8jE0).RD4t0#~YQT{Mq.0Ko/W}R~R|iM;IcKgs$>ja{goXTEi3yYQGz=HB' );
define( 'WP_CACHE_KEY_SALT', 'qIfDt{QW9g8v>?Oi@vY6J(;~oI.VKbhW7+L0&?aet:s849)dW8=0;ZsomiCpOx`%' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
