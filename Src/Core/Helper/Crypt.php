<?php

namespace Core\Helper;

class Crypt
{

    protected $salt;
    protected $hash;

    public function __construct()
    {
        $this->salt = "teste";
        $this->hash = " teste2";

        return $this;
    }
}