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
define( 'DB_NAME', 'hangnapp_wp' );

/** Database username */
define( 'DB_USER', 'mcgarryg_wp' );

/** Database password */
define( 'DB_PASSWORD', 'C@ountry123' );

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
define( 'AUTH_KEY',         '^H!3_.M}8k>N!h sMmE!Mz:Ovb-:rxR(O<xot)>,O|DiJz)L}PwXLCga{Fu,E]yw' );
define( 'SECURE_AUTH_KEY',  'OAk?NG}tK*R6 Tn8HpKL,qR[MG7+.<XNV.f{&*(zFJXZ5iam*d_rb ?!Id&Wu$3Q' );
define( 'LOGGED_IN_KEY',    'n*oIHPSb4vhOr$mNS{)FGf/KLn7#E*9bZ-Eky4$C!:Z6J;i9W.~vLIR%.&_3|g1=' );
define( 'NONCE_KEY',        'h_Z3QVf9vQ:y,8zN3V]y.}U9)wjo0e97z]OQSWiE:IyUN-{`gb1>TzLD3fSR w-L' );
define( 'AUTH_SALT',        'WGUE|}rD1{2E!@j9=8[Y{:*H[f(N{W>uiVhSYqN51%isx/Hi)CotKfJ L#=Tp~bW' );
define( 'SECURE_AUTH_SALT', 'Re2LEIRFnog:$Qu[V!%EEL7.|+@7@lg]`I,^?m$t^gvQQ$(0-,2q6%v!s0&A3FFa' );
define( 'LOGGED_IN_SALT',   '+f_[R_-HN)617oIsNR&A5sDB7r,7Y){1LSaEI?5wQy-9ES6$,j Dk#?*ePNcuX8h' );
define( 'NONCE_SALT',       ';yQeVCv0F1[@#Be/.<m7}u]S{l0kq`3RE!;p14a8PNc-NSzOgRf<FdYL ``@+yCU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */

// Force WordPress to use the correct URLs
define( 'WP_HOME', 'https://hangnapp.com' );
define( 'WP_SITEURL', 'https://hangnapp.com' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
