<?php

namespace Mod\Head;

Class Config{
    public function data($h){
        $h['head']["cfg"]=[];

        $h['head']["cfg"]["ico"] = "\src\ico\icon.png";//иконка
        $h['head']["cfg"]["themcolor"] = "";//цвет
        $h['head']["cfg"]["title"] = "";//Название
        $h['head']["cfg"]["description"] = "";//Название
        return $h;
    }

}
?>