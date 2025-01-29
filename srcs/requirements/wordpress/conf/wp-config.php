<?php
define('DB_NAME', getenv('MYSQL_DATABASE'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Sécurité : Générer des clés de sécurité avec https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'mettez_une_cle_unique_ici');
define('SECURE_AUTH_KEY',  'mettez_une_cle_unique_ici');
define('LOGGED_IN_KEY',    'mettez_une_cle_unique_ici');
define('NONCE_KEY',        'mettez_une_cle_unique_ici');
define('AUTH_SALT',        'mettez_une_cle_unique_ici');
define('SECURE_AUTH_SALT', 'mettez_une_cle_unique_ici');
define('LOGGED_IN_SALT',   'mettez_une_cle_unique_ici');
define('NONCE_SALT',       'mettez_une_cle_unique_ici');

// URL du site (remplacez `tgerardi.42.fr` par votre tgerardi)
define('WP_SITEURL', 'https://tgerardi.42.fr');
define('WP_HOME', 'https://tgerardi.42.fr');

// Désactiver les mises à jour automatiques (optionnel)
define('AUTOMATIC_UPDATER_DISABLED', true);

// Inclure les fichiers de base de WordPress
if ( !defined('ABSPATH') ) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once ABSPATH . 'wp-settings.php';
