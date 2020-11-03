<?php
define( 'WP_CACHE', true ) ;

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
define( 'DB_NAME', 'u248114697_YuW57' );

/** MySQL database username */
define( 'DB_USER', 'u248114697_pjoxs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eeZKDzCzKi' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rdG8}F|LX#*q[*=;)H(-5zvN$)iW=.8I(AB|Vas4 k9AOzKbTDQ2cqebua!i{Tsd' );
define( 'SECURE_AUTH_KEY',   '<a_2%}.f8hOXq@@E9c40=3S3zh!;3Y%_|L.>hLF#5S(W9]:F[;`R^yeN@5v(V1N5' );
define( 'LOGGED_IN_KEY',     'Dm?bU^1Jqj~QXl,Eh3ptn#]2:DXKc.L;U.0f6Wt/E4R#rIy4ffRmg&=(dq-dm@t7' );
define( 'NONCE_KEY',         '+@8W[]o>Eog$NfB21;Xt@n9U}@{$jgv?D^!ZGu!KAx$>5rJzqT WRk.:x~9<@&5H' );
define( 'AUTH_SALT',         'R5ypE7LKx{wvz1O1mG#S?;h5{W2.3S[ )-G*M^Rz8?env#.Z^I.2`K$I4c2):QH/' );
define( 'SECURE_AUTH_SALT',  'O ?F.>}99,cxnHr8drAr6AA4<i#bPgp0o*z%HND.J&40EbaomUxV^m+jt`d;%@.V' );
define( 'LOGGED_IN_SALT',    'IN?ffIuF&TjQ3!8-1<<AJ#k3z9O v578EwtU^r|3}4Lg:qNkNsy:&;;J6#H:=AIJ' );
define( 'NONCE_SALT',        'h3MlQzk:ZzWN )t3lm@qyzF4ZP{NjWw6omLZk`&X9^F|zepHrn$/(tq IXKsM7c ' );
define( 'WP_CACHE_KEY_SALT', 'pDPG,bs2(_/0}d[M0==:ZK<&)1yG)/GG,4sQ;BanJ+-6l8O,(C(9fOM;;Dq>Ii19' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
