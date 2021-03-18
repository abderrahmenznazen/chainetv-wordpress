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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chaineTv' );

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
define( 'AUTH_KEY',         'Qn9 -E5lnI@X7jIT|M,sHQV)!Rd9tUNZ4{$(`_rY(-( #DD:!@r@vj0>Ta?;YZ:s' );
define( 'SECURE_AUTH_KEY',  '^=W`ce7&b.a-P3-[w-dWMvfq/D6)HH>Q8_&kY;2y<OA!4Ww13;Tj&&U3=b:WQ-S+' );
define( 'LOGGED_IN_KEY',    '6j|l6TZ(k1O3,edF~ZHl3Kz#SAN%D>jll|b~>O8yQ6?L*Z>*kNb:Vr:Hyo<t6ip#' );
define( 'NONCE_KEY',        '?K9kEIH]/+}?&VV#Nyj4(^Sum!o]}(KsDp>?Mk9}2!}5~Khd7=IM/L+HI;y+:;#L' );
define( 'AUTH_SALT',        'NQdeGt8rvAnf1*0uF2hKqe6v(Jhdh3k|ahztd)<(vVZ1<W.?Kb@mMyY>9L~CC|$ ' );
define( 'SECURE_AUTH_SALT', 'clW>| -d!FGXw={M2 oQwg-od(&2[jH?q5@M_9e$`;XWs*%!Zb.sD;2I7e=~:+A(' );
define( 'LOGGED_IN_SALT',   'A&<6@tZBx*_n-&2FZ!c3A^4dUb- Qrh40EU0/}~7Ca#_1dP1bg~RL9]wJ4Yq@z2?' );
define( 'NONCE_SALT',       'I.s$xrS|jeE<oPR~~8kUqm[cpZD;KPlY]EJ7iU6A sz{o(vD!9ekcqJ PCs,*$?8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );
