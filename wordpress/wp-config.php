<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '172.25.0.2');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@Fkm5sP-n*KmGr|MutYa>f)5`F>Qd+Z2:WX :^K/cJp+ri{yX^D4|8%gbS$7l|)I');
define('SECURE_AUTH_KEY',  '=|al]/zSQi]7K6;?ooQc%oi.y#E#ro#O4)|[&*$ow76BvFC1V}+amv=>*V^sSz5G');
define('LOGGED_IN_KEY',    'SA]ca^,T!a6(DL..&R!sSbX|p.G64XF+9LwzW%#]J{S93L{}2o|r4i+x?a6/6VJ<');
define('NONCE_KEY',        '{k#^9|z/^kl}!0K{PjuEip{J7rz+egDl:8|<)pV?tjP*mQi2M+^&%4QeWQ|[CK+z');
define('AUTH_SALT',        'eyk+7uR2tp@6ma>Nf%3`V^V-{]IZIpzK|A)ji&YLhH^(D4A41;_Y,qk(xVLyMSe5');
define('SECURE_AUTH_SALT', '3^K}G;{aUsgpv/$-L|1N=B~(uBmKHI^}u6c-]t%=V bOBVa$/~CLCA1N-B|7aL&1');
define('LOGGED_IN_SALT',   '+yqfRd:vR0[x&!bSI-XIoVF<gbfU/H w9hu+Cy(bjN+:;x-X;+_i6zi~CI4M-bB1');
define('NONCE_SALT',       'B`j@r,S&^ZJKJ5-AlfKk(9|BH2k+52bDr&~1UB@Dh?iQcc0GPBm9A/l{4m9d0fTc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

