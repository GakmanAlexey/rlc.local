<?php

namespace Mod\Firewall;

Class Firewall{
    public static $h = [];

    public function main($h){
        self::$h = $h;
        self::$h["FireWall"] = [];
        self::$h["FireWall"]["status"] = "Инициализация";
        return self::$h;
    }

   
}