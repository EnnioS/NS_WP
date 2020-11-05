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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ns_wp_01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a7m1425.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UVdc[*ieN4va[Og>@$|NX=?VQsm)fq-o~qe2!qPK`~jUPcf]gnM8;33q(Px AqX8' );
define( 'SECURE_AUTH_KEY',  '69=UZ&S2NMF4Y$q$6Ai|`0Lyr,G{0NT8|>`q{<_SoFl%BO)`[ta-x.E1Bs;R7(P6' );
define( 'LOGGED_IN_KEY',    'J8[^?j{]G:6ZQ; 9=.*)A7Zn#W!Q,8$h:u3?wD*OBb%|wTO8Dn}C1?kri/Em~bd6' );
define( 'NONCE_KEY',        'xIr<&7}P-,cN&?dwcB#IqvtDh+]`r(t0r2{=M.McM)7P{g%4bA7KXF/kECc-vo>]' );
define( 'AUTH_SALT',        '0tL53!&V.wc$7G?_7g8(0YP&7v!OK!]sg)&*En&#)?IA?.}>IvK-x[see^yzo{2[' );
define( 'SECURE_AUTH_SALT', '3[u)`5it;h%/5^{hhAY~?VjhZ~d0|dhIR,>gViP|khOhSjb:e8I/llD7!q3nBY@[' );
define( 'LOGGED_IN_SALT',   '0k0ovm 7cyFo7FM6HJR.7}Z!N[3Y,xb(vZ#Mfx]pAYQJAg}n!r/2k2S0J?$Y~U)B' );
define( 'NONCE_SALT',       '9[OJa<#|*R*3d}_fWot;U[Z)c7V:,vG*]xSi<u^Wze+EopJnkI!NrO4Q}DU$-l41' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
