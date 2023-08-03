<?php

namespace Mod\View;

Class View {
    
    public static $h = [];
    public function show($h,$page,$data = null){
        self::$h = $h;

        if($data != null){
            foreach($data as $d){
                $var_name = $d[0];
                $var_value = $d[1];
                $$var_name = $var_value;
            }
        }


        foreach($page as $p){
            $file_name = MYPOS.'\view\\'.$p.".php";  
            
            //Проверка на существование файла
            if (file_exists($file_name)) {
                include  $file_name;
                
            }else{
                $log = new \Mod\Logs\Logs;
                $m = "Не найдет файл: ".$file_name;
                $log->loging("view", $m);
            }
        }

    }
}