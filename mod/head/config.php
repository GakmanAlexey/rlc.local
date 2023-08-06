<?php

namespace Mod\Head;

Class Config{
    public function data($h){
        $h['head']["cfg"]=[];

        $h['head']["cfg"]["ico"] = "\src\ico\icon.png";//иконка
        $h['head']["cfg"]["themcolor"] = "";//цвет
        $h['head']["cfg"]["title"] = "тайтл по умолчанию";//Название
        $h['head']["cfg"]["description"] = "Описание по умолчанию";//Название
        $h['head']["cfg"]["themcolor"] = "Описание по умолчанию";//Название
        $h['head']["cfg"]["themeColor"] = "#ff0000";
        return $h;
    }

}
?>