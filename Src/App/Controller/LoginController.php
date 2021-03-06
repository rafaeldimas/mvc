<?php

namespace App\Controller;

class LoginController extends \Core\Controller
{
    protected $url;
    protected $nameView;
    protected $param;

    public function __construct()
    {
        $this->url = explode('/', URL);

        if (is_null($this->url[2]))
        {
            $this->nameView = 'Login';
        }
        else
        {
            $this->nameView = $this->url[2];
        }

        parent::view($this->nameView, $this->param);
    }
}