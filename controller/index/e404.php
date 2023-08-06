<?php

namespace Controller\Index;

Class e404{
    public static $h = [];

    public function index($h){
        $head =  new \Mod\Head\Head;
        $h = $head->main($h);
        
        $page[]="block\head";
        $page[]="index\\e404";
        $view = new \Mod\View\View;
        $view->show($h,$page);
        return $h;
        
    }
    
    
   
}