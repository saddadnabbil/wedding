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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wedding_maghfi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'dordordor123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '}yXBOgd=^qPHtnOB{*@:8&]6yJese!k+9K>@eEI8nG&C[:.x/7X9#~^5@U2 (}#(' );
define( 'SECURE_AUTH_KEY',  '_qD&GB5vtfJjCg:Zq(OD|OuX?e&:_4uek VW_e<]49v;:L<l1X4tTzn_0h|MCgHP' );
define( 'LOGGED_IN_KEY',    'U:79l;V1eRVGN|r ?iITBY)j6X=m>F>{i7kZTpF>F4Tf<srHW{FfP,ZoU4/o|+iC' );
define( 'NONCE_KEY',        'fx[q7@hGCR;}2A/_SOfPzdYz$[x-Ls-8t|7G>]>n<sHsEF z<Dcq69:teu%.700t' );
define( 'AUTH_SALT',        'v78 QhMB78#7c7^hV}}s9MqbGsff-l[cy-+tvu$hz:*_er4mr4Nn{U 86T{s!GVJ' );
define( 'SECURE_AUTH_SALT', 'QK(e?!z~=z8McHg<tC&`p%]W-k0Y]:36[AFaeG*JZn.au^:<&0}1Wedsv0p:7F=n' );
define( 'LOGGED_IN_SALT',   'dmb^& Pxo[7jY2)6kkY9`3bIh2T2W 0LVTSJ02!^QSc:2%N9+#+SO2y%9sug1XV6' );
define( 'NONCE_SALT',       'jWh[4K[Sew6ueTu3TYRCy32X$^`ja}BD@&8{%H^6k&u*1XS+yN-L0D&F{DsqrW(:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
