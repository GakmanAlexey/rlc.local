<?php

namespace Mod\Install;

Class Install{
    public static $h = [];

    public function main(){
        $dir = MYPOS.SLASH."mod";
        $files1 = scandir($dir);
        //var_dump("<pre>",$dir,"</pre>");
        var_dump("<pre>",$files1,"</pre>");
        foreach($files1 as $f){
            
            if ($f == "install") continue;
            $file_o = MYPOS.SLASH."mod".SLASH. $f .SLASH. "install.php";
            if (file_exists($file_o)) {
                echo $f."<br>";
                include $file_o;
            }

        }
    }

   
}