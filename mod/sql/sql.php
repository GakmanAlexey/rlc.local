<?php

namespace Mod\Sql;

Class Sql extends \PDO{
    public $db_connect;

    public function __construct(){
        $cfg =  new \Mod\Sql\Config;
        //var_dump('mysql:host='.$cfg->host.':'.$cfg->port.';dbname='.$cfg->detabase, $cfg->login, $cfg->pass);
        $this->db_connect = new \PDO('mysql:host='.$cfg->host.':'.$cfg->port.';dbname='.$cfg->detabase, $cfg->login, $cfg->pass);
        return new \PDO('mysql:host='.$cfg->host.':'.$cfg->port.';dbname='.$cfg->detabase, $cfg->login, $cfg->pass);
    }
}