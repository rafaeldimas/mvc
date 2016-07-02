<?php

    namespace Core;

    class Controller extends \Core\View
    {
        protected $assets;

        public function assets($view)
        {
            return $this->assets = [
                'css' => [
                    '/mvc/Public/Vendor/materialize.min.css',
                    '/mvc/Public/fonts/font_awesome/css/font-awesome.min.css',
                    '/mvc/Public/css/'.$view.'.css'
                ],
                'js' => [
                    '/mvc/Public/Vendor/jquery.min.js',
                    '/mvc/Public/Vendor/materialize.min.js',
                    '/mvc/Public/js/'.$view.'.js'
                ]
            ];
        }

        public function view($view, $param = '')
        {
            $this->assets = $this->assets($view);

            return parent::make($view, $this->assets, $param);
        }
    }