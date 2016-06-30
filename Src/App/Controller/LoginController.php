<?php

namespace App\Controller;

class LoginController extends \Core\Controller
{
    protected $url;
    protected $nameView;
    protected $assets;

    public function __construct()
    {
        $this->url = explode('/', URL);

        if (!empty($this->url))
        {
            $this->nameView = 'Login';
        }
        else
        {
            $this->nameView = $this->url[2];
        }

        $this->assets = [
            'css' => [
                '/mvc/Public/Vendor/materialize.min.css',
                '/mvc/Public/css/style.min.css'
            ],
            'js' => [
                '/mvc/Public/Vendor/materialize.min.js',
                '/mvc/Public/Vendor/jquery.min.js',
                '/mvc/Public/js/script.min.js'
            ]
        ];


        parent::__construct($this->nameView, $this->assets);
    }
}