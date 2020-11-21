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
define( 'DB_NAME', 'm_atsingerrr' );

/** MySQL database username */
define( 'DB_USER', 'm_atsingerrr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm_atsingerrr' );

/** MySQL hostname */
define( 'DB_HOST', 'dryfootfairy.hypermartmysql.com' );

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
define( 'AUTH_KEY',         'id:*T4[5S[d&ATuk+LPS>G]zBmGbE|Fqnq[>6noC+8G>Qx6/$7GMiL{6ebwJe$;,' );
define( 'SECURE_AUTH_KEY',  'kn;vZ],S|Gc[BqL($@^,:<WK%A@%?~JYWQ1Y7Ai? VXcSFD|}gJ_$ft1:X04[gy5' );
define( 'LOGGED_IN_KEY',    'e2>K]yf9,eS*j=14`zB3rbZ~f,Tzg9[-ZH lnFr+:,;kRpvN/EbMe_/GAU&Dg}5h' );
define( 'NONCE_KEY',        'o&$t1vD4:Zeld/.qw5qZ[?&mOjHq<NZr1&g-}7dv8[`v^S_`k/MzDqggxxEbS:JT' );
define( 'AUTH_SALT',        ' d7Qxz>F1wk|FNN;V)+>L@*PM,r>%M{ep_02dR`_:znuI~O{$^rO?OknnxT7)Yjq' );
define( 'SECURE_AUTH_SALT', '{y04,/8f]<f<0l%oj3ULZ_5F~Wch5CQE)RyzxiRxpXN6`F{U5KruS0bxniiWL8)i' );
define( 'LOGGED_IN_SALT',   '_.f%^8a+?U;R~,a;Oq[>57PSb,)#3LOR1vEo#*-~#*!qyrV8ufMt3OX)g8Rn~]~d' );
define( 'NONCE_SALT',       'h};d%&A;e0/3-I2WqFY;*H9odrsEQ8Ca7leg:#Prg%8!X>!fSrc+N|2!wVu1GTsQ' );

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
