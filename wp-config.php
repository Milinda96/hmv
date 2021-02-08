<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hmv_db' );

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
define( 'AUTH_KEY',         '+Mn$+^j]gN!=]p@lqSw=egsQTE#,Xy#^{&O5mnPi>j4jq]nnLd( ~sl>|rtaOpXR' );
define( 'SECURE_AUTH_KEY',  '8rn,k:<-}&@DQU9%S~&S9c5j5X>Bg]c]>WdKNwEoq3tpgGbvi#CiE#A^^|kL7H1{' );
define( 'LOGGED_IN_KEY',    '>3Qx[)RlZ6D3B/3{<Wy5n=]D>%|JEGTG689VC,<<$JPGl}b33J)2Grhw;eyTz^p4' );
define( 'NONCE_KEY',        '(*]&}^& bI7L,S~0<BhtyJj%=>CU{_h#<PK(jp_~X9Ge[4ENm~!;ld]`6KU{<IQs' );
define( 'AUTH_SALT',        '(MH+,+ELF@/j(K-/aGf+JoY /CulAcv&EobHg~D_-`mb8q[x?#=unWD,Di.vqh:|' );
define( 'SECURE_AUTH_SALT', '^:%4BG^)Rg>Ws718kJriFm`GpFmE(= 5-!3KUW<uc9LNz3`y(?d#@)g+Em7&>QaM' );
define( 'LOGGED_IN_SALT',   ';j#dn<nl&*kzPD_e.bq~fNaTx@{nbFf]g_y)O1;0&Jw=U;>]gn?ikZn{T(^ aM^c' );
define( 'NONCE_SALT',       ',_58?8,Rv&F%?pUT)}Ok&0ayg 3%<~Yt7XW:B%}ZTR:](M_#]BV/%~vuYH:n0B>+' );

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
