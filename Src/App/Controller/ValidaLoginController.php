<?php

namespace App\Controller;

class ValidaLoginController extends \Core\Controller
{
    protected $url;
    protected $nameView;
    protected $param;

    public function __construct()
    {
        $this->url = explode('/', URL);

        $this->nameView = $this->url[2];

        parent::view($this->nameView, $this->param);
    }

}