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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'h[[n#LQ>o$SyR*gri?W,Bkb-`jNLU$oOJF][+_19-qQI9D|#sUj!AEKq%rA`0xN0' );
define( 'SECURE_AUTH_KEY',  'cWSZni(+M>qSw6R}!P5=GZ1Yo$B-yN[X9^Xq)ss/9hMC )v)xXO6<R-@JZwnk8Wp' );
define( 'LOGGED_IN_KEY',    'g1s`rkEK;v|j,RLGU~;Pk |DzwO};l/#u._7tbWQOt9}@^@{!FLQP:ov^A9|2f|&' );
define( 'NONCE_KEY',        'CpY]<~T_3Kv:&(zC~lRgtSsP4z{#DK;P,a<5_0s+9c9bqI;l2S7m6k)iE^sS3t[3' );
define( 'AUTH_SALT',        '0rbGqz}V|XKa<E[>z[z}#kr3cazr!6y+_yDFIxdp}/~}bGg}VYV&ek &_}&lUUxU' );
define( 'SECURE_AUTH_SALT', 'X0=.E5I85:JZ[vS<?BW++Ob kI(tF+3zS>DvuIhUv)H5Is*1Ncp~fwS1)Adk;-m;' );
define( 'LOGGED_IN_SALT',   'gQV7QcoZ>P99m.~QQsc#63cx;8%E=e;rUAi@mh]tO`20EY?GL*I>{y$811@>T]mF' );
define( 'NONCE_SALT',       '>|gony|[mVA3,_ f9Zo0r1pXeeyIBiE%@x J?#@gr=a?~ougq2 D%{R5aMBldh9e' );

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



// 启用调试模式
define('WP_DEBUG', true);
// 将错误写入日志文件（wp-content/debug.log）
define('WP_DEBUG_LOG', true);
// 不在页面上直接显示错误（生产环境建议关闭）
define('WP_DEBUG_DISPLAY', true);
