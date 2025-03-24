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
define( 'DB_NAME', 'product-temp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^[F%CxZkGs(;29rhjnJ6S`L/+D&S3(rrKJ_E.:a;VuKp?ka*c@Mf 1ukD?3+_&,0' );
define( 'SECURE_AUTH_KEY',  '(]ebL.9d5NM9>v6}TnRf#MNcjmisy6Q!J@SSaGwAW9CdtrhKD%;7fNy]X?l(9z$!' );
define( 'LOGGED_IN_KEY',    '0<*D]KeXSVk_(|^WuRci317@r5;Yek/tMoq?[8eF~Y6VJz-Em)F]]z:qnM5QW7[7' );
define( 'NONCE_KEY',        '&bk<eKgDe3|A=4[Zz]*n9tXw(7+?m@ifsyUGv2X2KRIwy?tQzPaSQ?e#cjI*~=SJ' );
define( 'AUTH_SALT',        '9{TmVz1q$%S>VOJQTCt,]jxNDBjZ>uTfs_(hRj8Rl-%SH8!w2toqh^DGfaLSNJ- ' );
define( 'SECURE_AUTH_SALT', 'z_y)rqyQe.N|qn]=F4M9/N`<1k>mT5gK3[zUZ^=!m$7A73q9Ib=CuO}^N=D*.:cE' );
define( 'LOGGED_IN_SALT',   'bt.@tD53]4YR,vjM0aP8@;<ruGKR/6i5r%Q ([WCQ7~({;GtMiwK2RLhMgp!`o$N' );
define( 'NONCE_SALT',       'X4tN1{4reT$+}57AVOo{`~k-XlViWPI=ZtEcv^GX<xsw3TvqPk>]?Apr,-f!-X;w' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
