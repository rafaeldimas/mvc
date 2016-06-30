<?php

    namespace Core;

    class Controller extends \Core\View
    {
        protected $view;
        protected $param;

        public function __construct($view, $param)
        {
            $this->view = $view;
            $this->param = $param;

            parent::__construct($this->view, $this->param);
        }
    }