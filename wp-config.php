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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         '[S?z @d[RcB7/*]Nw/++n5M):T*{+$F{%p`V;x|:,TXUirr4d|6NQkc]ZO^sKUN|' );
define( 'SECURE_AUTH_KEY',  'yY3P1$D*_pf@#5E86$IG3b+K?K:;=_OZNH5MslQHC`rf7sW9CzC$^T=8@7nS<59g' );
define( 'LOGGED_IN_KEY',    '2e!L(8cw<M=U*TnV|iGVO (Eebak[e]u$|g/%8VsC$nWre$oW;x H}BRK<B%@,uW' );
define( 'NONCE_KEY',        ')[yt+K+kpVCo]43p|e}Q_WgqO_dl@|xyGQGB0~V!GTu3*qx/sl}pjUBXOw:{kiMN' );
define( 'AUTH_SALT',        't;qoRE#]{#Qi5I8jW:g,v}PWqY]Hx9;<=.{m=*/>r:zN76<75XJQF{V.`UfZgUh`' );
define( 'SECURE_AUTH_SALT', 'kH$3fZ1T*dX9S_sC$;,+W&,EsQ(N)-EmpAhkQ3L)]_f`$2ucJ5]Y{ex1j,PXP(~P' );
define( 'LOGGED_IN_SALT',   'COJWuLAJu6]%!CQ`VxJL-SsNXr;qN;ph3z/JA,~G5VGGi:E_0$/N75O&W=F8JB|0' );
define( 'NONCE_SALT',       'S?%Brt,8-f{vWJ,He] {~K!G]~wle-wJuA7`ai:eq=~(LNnw1->FL1 U^@0dewIh' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
