<?php
    define('PERCH_LICENSE_KEY', 'P31802-VSN057-KUK686-NJD137-URM027');

    define("PERCH_DB_USERNAME", 'user');
    define("PERCH_DB_PASSWORD", 'password');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "ampd");
    define("PERCH_DB_PREFIX", "perch3_");

    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'kevin.sweet.nz@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Kevin Sweet');

    define('PERCH_LOGINPATH', '/admin');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
    define('PERCH_TEMPLATE_FILTERS', true);
    define('PERCH_YOUTUBE_API_KEY', 'AIzaSyAaceebNTeeb0TdHQDzjPJy20e5Cxr4At4');
    // define('PERCH_DEBUG', true);
