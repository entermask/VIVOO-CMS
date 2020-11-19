<?php

$env = 'DEV'; // PRO || DEV

/* 
    - Để environment ở PRO ( PRODUCTION ) khi website hoạt động.
    - Để environment ở DEV ( DEVELOPMENT ) khi phát triển hoặc DEBUG.
*/

switch ($env) {
    case 'PRO':
        /* DB Configuration */

        $DB_using = false;
        $DB_host = 'localhost';
        $DB_user = '';
        $DB_pass = '';
        $DB_name = '';

        /* Website configuaration */

        define('HOME', '');

        break;
    case 'DEV':
        /* DB Configuration */

        $DB_using = false;
        $DB_host = 'localhost';
        $DB_user = '';
        $DB_pass = '';
        $DB_name = '';

        /* Website configuaration */

        define('HOME', 'http://localhost');
}

/* Global views */

define('HEADER', __DIR__ . '/views/header.php');
define('FOOTER', __DIR__ . '/views/footer.php');

/* Other */

$_default_title = 'Vivoo CMS';
$_default_description = 'Mô tả website';
$_default_keywords = 'Từ khóa website';

/* các biến config khác được thêm ở đây, dưới dạng $_{tên biến} */