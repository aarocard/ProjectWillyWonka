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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', '/home/oompaloompas/public_html/'); // Added by Revisr
define('DB_NAME', 'oompaloompasdb');

/** MySQL database username */
define('DB_USER', 'oompaloompas');

/** MySQL database password */
define('DB_PASSWORD', 'aonbaonb');

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
define('AUTH_KEY',         '<~wjd];P|hj`piIM&D3IwA)mP|I2EBL?wek<5FR-Swq]dJn S,&|MRxK{1:q(bX$');
define('SECURE_AUTH_KEY',  'Wu(nbS&m99,`ZJ:BZk#}=;4CZ# eofr7ckI9UNjivZu*)T$6$*x@WcJ|BZFPWg+e');
define('LOGGED_IN_KEY',    '0<3;}JyW?:V|xurKQX;CgwhJyL/;88H@8}Dy2Bg?efq=[DHy[Sp.oObs~DwBrv~X');
define('NONCE_KEY',        'fWJ#)<V^%@B*AX~,<PO[k{plpLTp<A~B=ny:r#VI#kaTuio|#l6C@,y+td(0-S+V');
define('AUTH_SALT',        ':qWg;Q+ER^%Cr |U96-^9TqcNp9`*G2uWnSp* `&MlZl-Or`>^uA}J{&_;On0!W`');
define('SECURE_AUTH_SALT', '#|[d,dT-G]ri-+<P{5V_|: ];$62F;k{hQX%Z&/x^$(@7~Y}oKO^Lv_Rsmlr5[Qm');
define('LOGGED_IN_SALT',   '5Ku=~F4,m<bp|hh_1{swU}gwdmT.`}3!PF=G+k4,z--HnkBLLsR-|>:sU>+I/vT-');
define('NONCE_SALT',       'XkB-XQnFq&%7+:]%VRksDo4Q1(w3oX.|9j^sE8a}+*+)6fJlrh[iWm>|HXor~,PR');

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
