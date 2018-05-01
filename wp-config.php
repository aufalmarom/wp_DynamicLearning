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
define('DB_NAME', 'wp_dl');

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
define('AUTH_KEY',         'NSLl lM*TX~Vb=Q!|%OMY#KDH}>Ww/Y)RX@ BgKjYEI-3I-:`#z5*`@ML]eF2@N{');
define('SECURE_AUTH_KEY',  '`UgcQF:gLAjunt#rIPOJuy }Mp1uz~Fr;4gX(l}{]YF%Rz^Lh>**]:>&W%XFb?Q3');
define('LOGGED_IN_KEY',    '<96YHfCu lc.{DY.UAubKO>Wn57oujvnDB,C;@9K~R2[L.wzkFZ`,O~Vl}o<Gnv%');
define('NONCE_KEY',        'mNPAq C[$LkSLKnPWEWnm#PN~[~7#mZ!5VM v8vw2Rh{d-LmR%?o~&W]:?|m{voT');
define('AUTH_SALT',        'E(!bP4S$~@N4T.f_6K7WJg!{j7y-Q&[_7P?>(B$nB|G0qd>#LY*9Uc]:pbnra9dA');
define('SECURE_AUTH_SALT', '__8@_=W>}g,#|82=4kvtiMxT hw.%-Dz4h}}Z3/K8tIyaV,n2~7<@{h,wCoBvTd>');
define('LOGGED_IN_SALT',   'q1ZGUKlQlZ-of[9cC,W=e5(rvFzkOeV)`czhQLeS;bP dbcxW((T0r_O:2Nrb2VG');
define('NONCE_SALT',       'ke)M<aQ*@_`p=f01R_%!3rJyh:>WVa[1YG(I^n09XJ;7j01t@WW?Sj/A)h+-*yPR');

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
