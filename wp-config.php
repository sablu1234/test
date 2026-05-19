<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'zCRm(+JqcAy?drNA)/nCoq[aD3+#<l~g1xOM+)Ic[44K6XFd:]tv;tc{~RbxCOH&' );
define( 'SECURE_AUTH_KEY',   'lz{YL ye+S7$0%G4(vbFk`0(%Km+e14d=.>?:%9e<!nC5u;uS5):ua)$Dx!G)zm/' );
define( 'LOGGED_IN_KEY',     ')Z,S@rDQqje(_|^so[.XLm>pM%#flTx[_2^yV9!4C65;]S=b&DMk.U]8fO5w,[lL' );
define( 'NONCE_KEY',         'lq`N!JWv0:@PHQXG?[je+:rf-$9E*?{&55be0n@rV<)Vs&_$&v1:t4+IBnPw{/f7' );
define( 'AUTH_SALT',         '[JJDE)<~sH^XxD;%ySoINHgAnXw*vP/*3kFhEid[gj,$?-~~81tJVRK^7L}{L!G|' );
define( 'SECURE_AUTH_SALT',  'w4CDrnu/1aE;!6v_>L(q=)Q,Otu22TDqn[5X5LFR =>fC=^NcMn,JC8)SWjS3G4-' );
define( 'LOGGED_IN_SALT',    'Pr.p]Oh(xTU;w>(R~hL1a.]<TT/w*1b}%[q5_ka*3;]cJB!WEh7/D]=WDjB~q2ns' );
define( 'NONCE_SALT',        'v^4u7Km{kU?/,W8j~LS&[+b@QV3|YWh](FOCoydwF+RmzK`pGTK2 e6QNL{D;f1%' );
define( 'WP_CACHE_KEY_SALT', 'ipm1O5.LH#*QPsf_P:a:v)%#H*hX/v%3sQ`!v2cB8H@{(}-n`w,(yNJ$O62<Wz&.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
