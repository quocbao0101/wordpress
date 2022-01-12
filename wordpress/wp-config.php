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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n,$E#([N>y)7}]wGpbG-gTo`(_[<A=P~<F=_W3FF*M!3nNN1)5yz(l{0u-QOo-y(' );
define( 'SECURE_AUTH_KEY',  '7u@B.P9_R`6jvi$6`Y/%C(F24}xZl(<NCA#n)*zJO5Ux>A$`k!{6yz%<jbep,RlG' );
define( 'LOGGED_IN_KEY',    'jkxhn2!I/dJl?!n-[Y2[~1>>e(8Oi;B^mCgT]qaO/f/^Irb+sd^~>%G@MF=KRW:8' );
define( 'NONCE_KEY',        '=Va7;bQO%=V*3tg/[,NA_/>50@+kjt.5|C(G{<:R.XxeHDY(~)DIpzoL.mf{44~A' );
define( 'AUTH_SALT',        'HUe0xAutF)IQh47nfjU|^Oef^-)Ut=COuA/E-hi%9~`K-3vb>U^r?i`@~Q@Bl?_]' );
define( 'SECURE_AUTH_SALT', ']SJY<~`9p!EK6x6tfbN:0;!PC&_!AC%*d(QH[@{EOtSdFu%dbhH$44?zn7(8P=VV' );
define( 'LOGGED_IN_SALT',   'K4!.3DbKs)[mHTj3O7ScXfSq9Cm3k+{A#0by3b}.I/%ZV5PpU<09%pFX8*YLzS;`' );
define( 'NONCE_SALT',       '][:;aPSKw-&4jxf>*D*pC3u%jy=J!E0*Ye~kqpfr1G1A/k ^9cNlmG 4DqbVt%~-' );

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
