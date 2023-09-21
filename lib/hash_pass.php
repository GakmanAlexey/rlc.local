<?php

namespace Lib;

Class Hash_pass{
    public $salt = "kj78FtiXU2PNAhYyTWGd";
    public function get_hash($login, $password)
    {
        $hash = "kj78FtiXU2PNAhYyTWGd".$login.$password;
        $hash = hash('sha256', $hash);
        return $hash;
    }
}