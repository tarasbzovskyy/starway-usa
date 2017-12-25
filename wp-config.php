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

// Define Environments
$environments = array(
    'local' => 'starway',
    'demo' => 'starwayusa',
);
// Get Server name
$server_name = $_SERVER['SERVER_NAME'];
global $server_name;

foreach($environments AS $key => $env){
    if(strstr($server_name, $env)){
        define('ENVIRONMENT', $key);
        break;
    }
}
// If no environment is set default to production
switch(ENVIRONMENT){
    case 'local':
        define('DB_NAME', 'sw_usa');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('WP_DEBUG', true);
        define('FORCE_SSL_ADMIN', false);
        break;

    case 'demo':
        define('DB_NAME', 'b19155946_sw_usa');
        define('DB_USER', 'b19155946_sw');
        define('DB_PASSWORD', '<\JcZS}]2N<7]X4B');
        define('FORCE_SSL_ADMIN', false);
        define('WP_DEBUG', false);
        break;

    default:
        define('DB_USER', 'b19155946_sw');
        define('DB_NAME', 'b19155946_sw_usa');
        define('DB_PASSWORD', '<\JcZS}]2N<7]X4B');
        define('FORCE_SSL_ADMIN', false);
        define('WP_DEBUG', false);
}

if(!defined('ENVIRONMENT')) {
    define('DB_USER', 'b19155946_sw');
    define('DB_NAME', 'b19155946_sw_usa');
    define('DB_PASSWORD', '<\JcZS}]2N<7]X4B');
    define('FORCE_SSL_ADMIN', false);
    define('WP_DEBUG', false);
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'sw_usa');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' +e3YopwHx-o2?aumg/>Pdv4||y*L$O!DlG6v|M[dQB|>H<%uwZt2%7Ued]FFw5;');
define('SECURE_AUTH_KEY',  '/.ogqOpPlT>>5MpGrpi?eZV)8AS-H[VPlJ7>`|9=&cOtV$_Y1zY,be4MqF+T21+.');
define('LOGGED_IN_KEY',    ';wf<L}?7/(lnF1H+NY3rs(QF~ :+JI~-:j+p,XR$,4M?T-+TT8#}?}d%|{:Oe~4j');
define('NONCE_KEY',        'DHuk;M]-{Ox^<yh[<0aio>=LqveqecAAJVw=LlL3z&ez0<{QQ-p!l0hg|] {Bj;U');
define('AUTH_SALT',        '@1Zn^|u ZBrK&0Dd]Q9q@i30Ao{F5]2ry*jH3SB`VD)lUrJR6yf7zNI<a1 ~_|)~');
define('SECURE_AUTH_SALT', ' QWkd6z*v+s-+u<<{t[}|0 7C+g+*[1&0oeA<6[v]Z Q`t8}_-d8-jB6+be!H.aY');
define('LOGGED_IN_SALT',   'pjdL,Fp1Dt0|K:y,n {:|IV+hWFvj}|1k}d(sL^J!:zlt+l2u$[3X?n0,|Who-fR');
define('NONCE_SALT',       '`:UC0x1$L5@Zck;#ocL^%uxks`dWSCq<~(AeXHq&>bs:K%Cl(L[!o#afwE4F6E%U');

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
//define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
