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
define('DB_NAME', 'tv-display');

/** MySQL database username */
define('DB_USER', 'tv-display');

/** MySQL database password */
define('DB_PASSWORD', 'Medicine100%');

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
define('AUTH_KEY',         'OCJL:2B%b%d;{_C7(qamQ3QK^c-Lhf&+fkBu=d#ec)0s:Sh +%jqG-zsd!HT5dI3');
define('SECURE_AUTH_KEY',  '*U}7`+H2S@e>%7NAU1_l$p@#o~MX[P0vR9VbyU;ju3y`w3}p_q FvupW?F3CBWY2');
define('LOGGED_IN_KEY',    'vrMCKb|^/$&6n-u6iT7;/9?X>nvrTJ+dxxx5{28tAGBjP<P.OM.Z|B%-p ZzzBqD');
define('NONCE_KEY',        'eR[c&#|Jv116)8Q.rO&~llPIw-[pW6%r{t#TciR-yNDCV7R^}^m?q9<yIced<53D');
define('AUTH_SALT',        'J &k_#D(iw/2MWew.U/TuE2RLYv1#.ih8^<9FVolt7A)]gRyGw/A8A%J,^|odVB%');
define('SECURE_AUTH_SALT', 'X@v=k5EDrh2emQ-qJ,!s5k-:[RzY]h4h|6{Rfk|x8U.@M[3-}6(WuT.*f&*j~27p');
define('LOGGED_IN_SALT',   '-4|W+ v8j)9.LhIKGvB34iw2lUqk(Cvh=0XuWdj*FMZY>*J:gj>rCB3JtQs8$`ZH');
define('NONCE_SALT',       '^iEk{-da&]1AP_2jNqq3#8x+@~{k.Ew6m_o9PC:$Jir$zrBFq:.x//KI%j6OUI`_');

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
