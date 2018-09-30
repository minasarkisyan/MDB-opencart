<?php
// HTTP
define('HTTP_SERVER', 'http://my-shop.ru/');

// HTTPS
define('HTTPS_SERVER', 'http://my-shop.ru/');

// DIR
define('DIR_APPLICATION', 'C:/OSPanel/domains/my-shop.ru/www/catalog/');
define('DIR_SYSTEM', 'C:/OSPanel/domains/my-shop.ru/www/system/');
define('DIR_IMAGE', 'C:/OSPanel/domains/my-shop.ru/www/image/');
define('DIR_STORAGE', 'C:/OSPanel/domains/my-shop.ru/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', '12345');
define('DB_DATABASE', 'myshop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');