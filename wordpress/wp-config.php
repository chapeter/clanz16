<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', "db:3306");
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'cisco');
define('SECURE_AUTH_KEY',  'cisco');
define('LOGGED_IN_KEY',    'cisco');
define('NONCE_KEY',        'cisco');
define('AUTH_SALT',        'cisco');
define('SECURE_AUTH_SALT', 'cisco');
define('LOGGED_IN_SALT',   'cisco');
define('NONCE_SALT',       'cisco');

$table_prefix  = 'wp_';
define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
