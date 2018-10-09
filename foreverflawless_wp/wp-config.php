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
define('DB_NAME', 'ganeshcr_foreverflawless');

/** MySQL database username */
define('DB_USER', 'ganeshcr_ff18');

/** MySQL database password */
define('DB_PASSWORD', '_JJpQ@fFy?8h');

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
define('AUTH_KEY',         'R=E(m5aBLTKzJ:{#=a;{Hdvwk[oplT:=6mK7>0Qq0 VT,K79&m{<@:e6d@:Zo(sB');
define('SECURE_AUTH_KEY',  '3kcY@*Ml*O}q3b&*cV4XLIZA6P%o6|cJ U_Yz0Jh5QC?]fEw/Aql$}_W:_.r2K2+');
define('LOGGED_IN_KEY',    '$Pxwf=)%7?jd@?((QY%XCjH=u.+8pmeg3ZbsC+XZJ#}gc@3si(yK=/3WJo=#[oPx');
define('NONCE_KEY',        'p%PV|Mo]y. 3_JN?HE_IR;0]6Csd3uN8VRS0.^z#4z[f,`mK_QPZzl2a$]Mmi>+w');
define('AUTH_SALT',        'E^]AQ[WLC{31@3^1yxx$]jb{xtnZPXOF;l-}<]G:1o&{M,#tJNNt$:p%qnc4MJ>T');
define('SECURE_AUTH_SALT', '=MrEQf|yP~ws;`qk2MxYq40_>G,bkIr1Ry{BQ5N5xv9.wjKs*6>BOWhB(vXQblB?');
define('LOGGED_IN_SALT',   '/q^clmJ0`l6s<0~K+(DN3*fZ,q76!X/Nh;e$RkW-Pl_Jrj;3Rlb^gM=ot}aN:Q[c');
define('NONCE_SALT',       'M9[wIjM(q31l0Kr|jyk|Kevjo8=2C-CeE-*A(kWM4FE?0f_-#)Tho{I>PMh=+&.#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ff_wp_';

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
