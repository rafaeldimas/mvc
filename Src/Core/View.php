<?php

    namespace Core;

    class View
    {

        protected $view;
        protected $param;

        function make($view = '', $assets, $param = '')
        {
            $this->view = ABSOLUTE_DIR.'/Src/App/View/'.$view.'.phtml';
            $this->param = $param;
            return $this->load();
        }

        public function load()
        {
            require_once 'Views/Header.phtml';
            require_once $this->view;
            require_once 'Views/Footer.phtml';
        }

    }