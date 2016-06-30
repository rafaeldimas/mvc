<?php

    namespace App\Controller;

    header("HTTP/1.0 404 Not Found");

    class Error404Controller extends \Core\Controller
    {
        public function __construct()
        {
            echo "404";
        }
    }