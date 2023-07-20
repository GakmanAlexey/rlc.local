<?php

namespace Mod\Install;

Class Install{
    public static $h = [];

    public function main(){
        $dir = MYPOS.SLASH."mod";
        $files1 = scandir($dir);
        var_dump("<pre>",$dir,"</pre>");
        var_dump("<pre>",$files1,"</pre>");
    }

   
}