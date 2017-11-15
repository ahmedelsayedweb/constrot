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
define('DB_NAME', 'constrot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.Sj@~SByYbOn+^-.ZB !B0_a*!<d$NZrg>=LcT}a*utxm8#v9j*GzC;oZI;S-m80');
define('SECURE_AUTH_KEY',  'HD ?Ekx2rifAknOI]RuN>41%?~.7;nb hh@h#Ooy<DG7`Jir=]H<;?Pxk9wGIXih');
define('LOGGED_IN_KEY',    'L7US2Z.&[B=0HV2^1zf*oPTsOU]/b{G[[X2D5.EM5Gi)lp<mE4BY3{DNo^Yw{Ofr');
define('NONCE_KEY',        'O>T&4Ok}%8A!TKgRAHa?Fp:tJvarE4]=jtfIstNg[!K$id9hh;.|C[[ED~#k>@Ux');
define('AUTH_SALT',        '|lW m[ % xxWdkG?n7],YKxU~6 J@T]?90m!0..rsZz#E}Rwod5NViR$@BuhxNL/');
define('SECURE_AUTH_SALT', '@|&`QT;fMyHpaHU~9fq,,iKNhc25]P/i}-4S3OVzp4;8wY#C/Rq;a|S3R=jMiz;K');
define('LOGGED_IN_SALT',   'sp@aY|Z<>N9{H4*XPdC<(5l/bFfbz<Gp!8Vgz]G7)D3m%b.rujV)>+Sz{~Q1Kg4-');
define('NONCE_SALT',       '!J(-~vv>#K~UE6$A2i7ty%H7`Y.X^l1<E:9gCcMCnOB1y)Cy|?j8o04!D?*|/$8N');

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
