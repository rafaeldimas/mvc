<?php

namespace Core\Http;

class UrlAmigavel
{
    protected $urlArr;
    protected $urlRet;
    public $ret;

    public function __construct($url)
    {
        $this->urlArr = explode('/', $url);

        if ($this->urlArr[2]) :

            if (!file_exists('Src/App/Controller/'.$this->urlArr[2].'Controller.php')):

                $this->urlRet = 'Error404';

            else :

                $this->urlRet = $this->urlArr[2];

            endif;

        else:

            $this->urlRet = 'Login';

        endif;

        $this->ret = 'App\\Controller\\'.$this->urlRet.'Controller';
        return $this->ret;


        }

        function __toString() {
        }
    }