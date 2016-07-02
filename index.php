<?php

    require_once 'config.php';

    $Router = new Core\Http\UrlAmigavel(URL);


    $Req = new $Router->ret;

    // var_dump($Req);