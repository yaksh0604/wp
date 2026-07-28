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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         'CE4j{bc3s_EOiF!gD;v2!,&Yw^p~:w8a)7?ykj~(Ss4;yq~trT5YbkxLpz|sMY/>' );
define( 'SECURE_AUTH_KEY',  '^{7@-URKJ.~K|^xP$6cIpA*g5.Qj.<=7u6gopy,8!%SKPYa2ov52,MQ{bz+11,#e' );
define( 'LOGGED_IN_KEY',    'er9yHQS<2Q`uwmx#^6jy9,6+_f&yK:2ap-efnM_/lh96%k(efW]:eA|PJPSKQfvT' );
define( 'NONCE_KEY',        '$q;uSTKY22GIqbJA{v]Mk1D6FZ`{sdmbX[Ewabt^{T)ya}FXmAVrPvHcM!^xz}w}' );
define( 'AUTH_SALT',        ']1<*F=JjE%.M{X*cC.r{7jD^g7q+6OvZOkCOP[:HVya%8<[HITK^z1,{&Yu7l5Ex' );
define( 'SECURE_AUTH_SALT', 'V7>7/?Y4]PjzA:rP!|4+glnn0oFw#Q_gI%]h-X%6_o~ea%6+1gK`VPJ,cEV+7G1m' );
define( 'LOGGED_IN_SALT',   'mhnlw+Dzt!Xh,bK2A%#qs<IN8lm#1?_<?|}xEZ!1S}mw+I`t7|NP>lcn:S A[y%2' );
define( 'NONCE_SALT',       'O1U; []7~$Zy&1tr4I=V2Y8m!nJGr5=1y3ctrF93bsjQk9KwQ:D*fZZLj9dCu$K$' );

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
