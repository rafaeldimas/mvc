<?php
    require_once 'vendor/autoload.php';

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

    define('URL', (isset($_SERVER['REDIRECT_URL'])) ? $_SERVER['REDIRECT_URL'] : null);
    define('ABSOLUTE_DIR', __DIR__);
