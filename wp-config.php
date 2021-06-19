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
define( 'DB_NAME', 'myfirstsite' );

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
define( 'AUTH_KEY',         'ycLf~GHfa(OB-&pb5tP4cJ_f%:0P{}MmZlUVuFBso-pZXpNKk[*ML-O!/#WoqOTp' );
define( 'SECURE_AUTH_KEY',  '50WK-E:O;?)Y^)4=vjV5[F5 g:+8,Gie7YS|l;Z&<&U3CN%X`+DUC_V1=tvC/fZ[' );
define( 'LOGGED_IN_KEY',    '8hXW_D:)PY2s7u)G5*gTzeO!q4pgK}{JOmZ=Rqt[tW!76HaqSnM+}#RSeZ-<YGJK' );
define( 'NONCE_KEY',        'zus3HJ3Ti[y44WUAuUd!qLsEFa4Glv:x;+c0s^K$o5gKO+ro@]FY8Quy1e81*: m' );
define( 'AUTH_SALT',        '~PiOdLKv}8!}3A.m}2?{ViC;I]gZk?rd,;]n<~*i:Zy=d^}$8V{yd*[Q `q@y,@ ' );
define( 'SECURE_AUTH_SALT', 'dS,]*RHK$]kBmR^TFm4h1vpKqy.7UMqPRI>HW?oHRc.<#zOQ+D>6CNWrPdb5j##=' );
define( 'LOGGED_IN_SALT',   ';ZX1A8@]KsKqf!7_qk..l&+ZnOvZ|B&c{C}%jxkCn|]|oM%]m-%Im_Do:UT(rLD0' );
define( 'NONCE_SALT',       '>#wh`%+wIW^4v?#sNr2$R]{}E$.G&J^E>938Toy6AauR[nlk!6hd~CTfjkcVr{TI' );

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
