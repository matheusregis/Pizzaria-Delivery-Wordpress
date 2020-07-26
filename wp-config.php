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
define( 'DB_NAME', 'matheusregis' );

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
define( 'AUTH_KEY',         '2#I(@DgxRBW`|xAwRKkKV&^&IktQ^m[]1!q*c#xzRBJ@}OE$!uD8R-!%g-7%!w$:' );
define( 'SECURE_AUTH_KEY',  'I5`|Q90`;,OxY[tw5aQn!O(@,L9(m8=Mle1>>A}CeiwJA7u]Iawj,.LS5`jXg~u ' );
define( 'LOGGED_IN_KEY',    'E1sC398K(eMbx%_OQE5+~^qUp|~vT<IOiF(i^g6&u?hcdmr)&Wozxl5U%=ZW$<}{' );
define( 'NONCE_KEY',        '`{7iu=3l~=JOfvVEvTAW>]{`+-yG0fL+h<X$xs]QV^z]1H&wD4=w@eFz6?+%:O,F' );
define( 'AUTH_SALT',        '-$-lFs8O6;q<tmdO:l=#&i%rJ4D=%*p]/<EDN]<8o]F$IAnYU*z_(y-qH@V%>Na5' );
define( 'SECURE_AUTH_SALT', 'i8heWh2Ld}q1&7<}uBpD%>4~:?PJe65*V`]klHenxxN7O]C@0;)AAXJm]|mk[-JF' );
define( 'LOGGED_IN_SALT',   'aZ0TlLD<9ee(KG<~r`NBlKBWI9>,X{?;.:}V`&9ak~l>M@bbjF<d@<l}#}UhD61c' );
define( 'NONCE_SALT',       'DL86z#xm;m]P@=K,n;_vM3+fOmx6B<)9%D:T[ Vg?u(p[<6vH=WL@YR%X@0ywN`_' );

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
