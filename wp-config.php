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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '))0> !@M9<sK{:E.58&mb|_#;D:oldW]4d4Z^[|uH$L:j^*.y5e?/(#8JCcGn.V*');
define('SECURE_AUTH_KEY',  'y#2_g @v{NwURu6WA><IIKv!Tqu52)i`M2zYkPnTnlcp1v|@>*;(dsGpB<yqBmrB');
define('LOGGED_IN_KEY',    '?3Mj_Cj<Bb/ Rg!TS_O~]wZwx]G|+g<#JQ#?0RL:,5Gyry/=xp>#|z4Gd(l@i{Qt');
define('NONCE_KEY',        '7gRVMBe]>mi,&}2DZ8,,W~)kV(%N;xLgl }P>x`pVq/_eJkz;}wB9sB`]{JUo64;');
define('AUTH_SALT',        '!%5d4!B]<UK@Oh.&9cJ/[NgsU4,<t.S|<}nGLrJ4x/8x;O#2PY:wy)#5sVXrltyu');
define('SECURE_AUTH_SALT', 'J.UH8 @f^-8~@$>L5Ke1Pe8<F6++~uN#,O.!U2 }kaE1|yj[I!TZpr! *>$Ot<1u');
define('LOGGED_IN_SALT',   'vc2%^]lr:tE6`[)Fx?C-u:==_4=LD}[V~Taxvut`ff=F;<*VOSlqv$ zj8{^sd1N');
define('NONCE_SALT',       '>L4A Du/5A1{pmxZ^MUMyHB$8f&4 vZ}@%03bySskAS<N6bWy#BSnGVyjH9xwUiq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
