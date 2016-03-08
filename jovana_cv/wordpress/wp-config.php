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
define('DB_NAME', 'jovana');

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
define('AUTH_KEY',         'LITB,*{iP-B:1j|;kN+f?GvP=;id,S-X,cwLL!L.D:,|85bp4|M78p}B9s#c,Uld');
define('SECURE_AUTH_KEY',  ',<HpUJ5.%erEk032}urP9SpyO>Vf%^)!PQ/G/~wRabbG#T#he&)t-bpx/~z4>>&z');
define('LOGGED_IN_KEY',    '.q]y,te;H8](_t3USLrC?.y/hB4]3Sb0i)+vU%^buB:7wLQ4-d.F25q!@rFL7E|V');
define('NONCE_KEY',        'j,SS-b%y:~|)LhapDg%_([n&ni}(7]Wa.[G+.I!}r!bt4#T8L0CC/)hJsuX-ZmWm');
define('AUTH_SALT',        '?ICFZNhY^HG$F|D}UXn+m}y()R5]q{r3+ym4Am/0oX~hXJ]mscfX}((R5fv;gmNG');
define('SECURE_AUTH_SALT', ' O`,e-E|,+&OZDqvfC@mM|ZHR0{,-M|@b3BFPM<v)r?O,ZgR/pjHS6suwU^WG6<M');
define('LOGGED_IN_SALT',   'C%.L*WV_M!VvJ1DA<kW-^ye%[L3S6bN5qgTa7^mj#I||V&h4^|M11Zl |)G7SS#V');
define('NONCE_SALT',       '!5c@ku-C&i;Tm!JU*wOF#:@|8i~|lq}wMgj:H$ 51f(K(uRK+L{Rch7_z E<};1{');

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
