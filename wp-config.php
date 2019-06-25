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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?&h!SBtb_(N62EvAZLzjJu]h|-OkOWKh-N3otC^wJmR[?Icf_H3x_z*^WI6#FQqP' );
define( 'SECURE_AUTH_KEY',  'x$Wz~f3SM<H|gJu)o`<fTFL7Jl3p^o09Wanpo?*bF+A]_&p1{fuzy2r#!PsP=#SR' );
define( 'LOGGED_IN_KEY',    'JfH~%JrNDVsYk*f}}2^b *CBQ*E>aqe,Thai~QU%.9tmQm${rpS<|wJ*CdcPu,=U' );
define( 'NONCE_KEY',        '_4ij5JWn~S|1u&Y+4![tCW0/6h@jMb{?8Ty,Dy`xp?/ymc|DM{dNqR]u<F)4:cqy' );
define( 'AUTH_SALT',        '|:B.*_?6:o6xQd(nxIo%oO}(4ELj92s;g]-ER+U.oRE{<@pzks>00E@?uFJQ7: D' );
define( 'SECURE_AUTH_SALT', 'VaH2g}CR?.V_,mjwYJA@t=p!J%(LNi-`h.;j+-(Cdqn[X~>/EXO4`GNOP`)0FJkR' );
define( 'LOGGED_IN_SALT',   '~^,CYF+ye/[TL!N4xat5EsS2Zj<U`QC8NCAC3VXO;uT61s3x<^@iAeO]+%%.Mn1!' );
define( 'NONCE_SALT',       'se:$<tE;wdh8J0+!pUl~dS@YU&%VQ4ocwa#5T(kgFi&n>?Be@!$15mc0*1EakTwq' );

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
