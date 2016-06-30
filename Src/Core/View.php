<?php

    namespace Core;

    class View
    {

        protected $view;
        protected $param;

        function __construct($view, $param)
        {
            $this->view = ABSOLUTE_DIR.'/Src/App/View/'.$this->view.'.phtml';
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