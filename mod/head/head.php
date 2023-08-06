<?php

namespace Mod\Head;

Class Head{
    public static $h = [];

    public function main($h){
        $config = new \Mod\Head\Config;
        $h['head'] = [];
        $h = $config->data($h);
        $h = $this->title($h);
        $h = $this->description($h);
        $h = $this->icon($h);
        $h = $this->generator($h);
        $h = $this->themeColor($h);
        return $h;
    }

    //<title>Заголовок страницы</title>
    public function title($h){


        $h['head']['title'] = $h['head']["cfg"]["title"];
        return $h;
    }

    //<meta name="description" content="Описание страницы">.
    public function description($h){



        $h['head']['description'] = $h['head']["cfg"]["description"];
        return $h;
    }

    //<link rel="icon" sizes="192x192" href="/path/to/icon.png">
    public function icon($h){


        $h['head']['ico'] = $h['head']["cfg"]["ico"];
        $h['head']['formanico'] = "128x128";
        return $h;
    }

    
    //<meta name="generator" content="название программного обеспечения">
    public function generator($h){
        $h['head']['generator'] = "RedLavaCore";


        return $h;
    }


    //<meta name="theme-color" content="#4285f4">
    public function themeColor($h){
        $h['head']['themeColor'] = $h['head']["cfg"]["themeColor"];



        return $h;
    }

    


   
}