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
define( 'DB_NAME', 'innercod_wp847' );

/** MySQL database username */
define( 'DB_USER', 'innercod_wp847' );

/** MySQL database password */
define( 'DB_PASSWORD', ')l8)p3QDS4' );

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
define( 'AUTH_KEY',         'jbxf2zrwqln02wfzbcwksfsqpkkfblularujto5noczucaleti34y3oynm4n90en' );
define( 'SECURE_AUTH_KEY',  'mxavohd3mw3zljw1vud3akn3ztlmllck2xngsl8hlemnnopxn3affrvh6w6ph9w2' );
define( 'LOGGED_IN_KEY',    '4blcvbzhbixmtncqqgtrmmncam09tlyak13ikeaen2bhwhtbdheippoopspflgyu' );
define( 'NONCE_KEY',        'j031qevxp61hdwyyskdfrl7zhtapqwpd9ys8fgc5rp9l7ukkzwtb0apkdavetxod' );
define( 'AUTH_SALT',        'uzl8gws6dzyedpgpon3o7nmittwinzcirdmeik7vufi9iifs8ozquqex3drwzhag' );
define( 'SECURE_AUTH_SALT', 'uyz7c04l7zdg7jf9vu5yww5bhuy7babcoecoy3wb5k0phcaiftujvnu2eia0yqwf' );
define( 'LOGGED_IN_SALT',   'vp35ss1a9lbm5dnazatxdpm8ihrfdgolywngyaxofm4arcqc5rxjqstysjibhdon' );
define( 'NONCE_SALT',       'm7mqjloov6y57mzeazxsyur5ctjjc0ijwxfigr0aoairiszgssfakdtgtdq4hqfd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgc_';

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
