<?php

namespace Controller\Index;

Class Index{
    public static $h = [];

    public function index($h){
        $head =  new \Mod\Head\Head;
        $h = $head->main($h);
        
        $page[]="block\head";
        $page[]="index\index";
        $view = new \Mod\View\View;
        $view->show($h,$page);
        return $h;
        
    }
    
    
   
}