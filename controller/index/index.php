<?php

namespace Controller\Index;

Class Index{
    public static $h = [];

    public function index($h){
        $page[]="index\index";
        $view = new \Mod\View\View;
        $view->show($h,$page);
        
    }
    
    
   
}