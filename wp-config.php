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
define( 'DB_NAME', 'produccionescalacas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'F C6Q|mz:~MW/o)L~qut~?b}L@spkX~n=}(,j@pEA=Y(tF^wWCa;=xLAU 598wQb' );
define( 'SECURE_AUTH_KEY',  '5b)zwGHCv/R#]z&lGyCydB(N}_rX!8J;>FT)3QFE+=R!q0ZNl{5MNv7z&MRHXa33' );
define( 'LOGGED_IN_KEY',    'Y[p>Nl.d&G!,<_otSQCj{U$=*i7(47wi<iH_t&g^{v!7iQR-yH}Bo3(]&5h-:@q8' );
define( 'NONCE_KEY',        '8sh`EE8hFF<GE`m]NahmxR$K#+{. [tB1S4ptAb}k*/V.( w6rN@Fn[hRO.]NJ>R' );
define( 'AUTH_SALT',        'ja$e^aOL(M_fOUr%;{PP}f%zeRO+fK5r@CJ7 #T` p<5l-;VWcqVV37(QChldKCg' );
define( 'SECURE_AUTH_SALT', '<Gp(eg!=#z!9|9g,+y^^=^s3k$cx#PV^Q7/H~#0DS{&szI%#GcKnGK*iH^R/,`_q' );
define( 'LOGGED_IN_SALT',   'W#!h$RTl}|~IF_]~5@dG>xl=p;mF(}LyA?rt:4+Gvr.1PrfUJ9knPlV7  J/)[a&' );
define( 'NONCE_SALT',       'fC^%OuwU?S}/P~igQCCRp)]-vD?^q5%64N|]n#XVF{4,7>@VQIL`RTk;N7)cCo$[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
