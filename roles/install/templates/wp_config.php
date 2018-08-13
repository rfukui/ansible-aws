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

/*

database_name: ""
db_user: ""
db_user_password: ""
db_host: ""


AUTH_KEY: ""
SECURE_AUTH_KEY: ""
LOGGED_IN_KEY: ""
NONCE_KEY: ""
AUTH_SALT: ""
SECURE_AUTH_SALT': ""
LOGGED_IN_SALT': ""
NONCE_SALT': ""

*/
/** The name of the database for WordPress */
define( 'DB_NAME', '{{ database_name }}' );
/** MySQL database username */
define( 'DB_USER', '{{ db_user }}' );
/** MySQL database password */
define( 'DB_PASSWORD', '{{db_user_password}}' );
/** MySQL hostname */
define( 'DB_HOST', 'db_host' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         '{{ AUTH_KEY }}' );
define( 'SECURE_AUTH_KEY',  '{{ SECURE_AUTH_KEY }}' );
define( 'LOGGED_IN_KEY',    '{{ LOGGED_IN_KEY }}' );
define( 'NONCE_KEY',        '{{ NONCE_KEY }}' );
define( 'AUTH_SALT',        '{{ AUTH_SALT }}' );
define( 'SECURE_AUTH_SALT', '{{ SECURE_AUTH_SALT }}' );
define( 'LOGGED_IN_SALT',   '{{ LOGGED_IN_SALT }}' );
define( 'NONCE_SALT',       '{{ NONCE_SALT }}' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );