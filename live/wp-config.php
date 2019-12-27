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
define( 'DB_NAME', 'technoedgelive' );

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
define( 'AUTH_KEY',         'k#(lXf-KF2[A0j||*J3ZV:zs2<lFHzYg8xSGCl.2Mvs_;)DiC:bxqjuy8LB`mrS[' );
define( 'SECURE_AUTH_KEY',  'q<4v6imX)2S=#jd1t,s57A&p~( 2Xtq#I6z?CZg^H5?^QU-yLNEJ,Wv2|~}R-p5J' );
define( 'LOGGED_IN_KEY',    'c` dMR<^=k0jJ=gpB982zF44T:nm_tF):}M``d%S9c|0}]C8yjW[KMSW[t9)r)ZX' );
define( 'NONCE_KEY',        '}4A)ddIfHTUiJ4[.,_Z1y1,>?g)h}<Tl)/z[GI^Vzo,=,1G~8p5H+m6>cJ-WIu>]' );
define( 'AUTH_SALT',        '#2Wn+[dA>zlble&-#S1fPFYk5U~3*_pa>nS)hR1f83F!e/VBFa3O+iiKNkN=r=EC' );
define( 'SECURE_AUTH_SALT', '(XnDmTsZ!c%`R$QO[xp1$}4@CD<uavmp7QtG)uMqgx5O4},3._cO%.4E<.:/6f@|' );
define( 'LOGGED_IN_SALT',   '?DG>AW;[36Li%C%/3%LBCa4/az5DmE|l%Y;d2#;b>x-`5Cg(Ctt`.ku$YlOl0ib_' );
define( 'NONCE_SALT',       '&[pyO#Y4?x_cz28ZH/c}M=owLIjy!<36CCKeY6eH*wQ)*x{k{c6+fI$;wV]0dDgE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cbrs_';

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
