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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Te5)Y=GsJ;)ZuUSLy%U-:Tj>(fFKYdGJf|UfHhl,]B%tO4=0+g.%E#yW>-+fcg- ');
define('SECURE_AUTH_KEY',  'E)wtoqns(zx4(M&q()R(bfw/0ONba$Z/}L#Zqk{b}(R`EoIsj`~z!n<=3k~+#a#`');
define('LOGGED_IN_KEY',    'T{D6hS 54dh8xBS!VulECk{Fn_-)h#7ag;qouA*pRH;MeF7%otQ5-J_c)j.qsd2o');
define('NONCE_KEY',        'O&uPOP!tRDaWycu8q[(tT;UO*!EAYIbT!oY:S#a)Yp?X:ic`ExOkOI4#ji3FO>m[');
define('AUTH_SALT',        '35<RNAyT$)ZMf+21|{Bs7,nGj4](gEo[t?RAm.,lC*C9,UrF..;8w0 cCjF&Td4%');
define('SECURE_AUTH_SALT', 't$L=iR>fl!Mki=iQ[5c9`oE4_L:w/yP{JG+9Ro)F.=2W .5^,ZT{CQh9;<%CWAJ0');
define('LOGGED_IN_SALT',   '+nq7hek-(@N4qrhOHmtjns#;48m/3.+rC0BsloTFvE~#[+ob9mPf[$Jse%$aVC=_');
define('NONCE_SALT',       '@jz+Ys3U#+0`72dXOH_FqhjQLJkSeRV8A$/8q3R>cCoeaUX1zO4.8E@eP~Y/4VJK');

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
