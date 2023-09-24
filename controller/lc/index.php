<?php

namespace Controller\lc;

Class Index{
    public function index($h){
            $head =  new \Mod\Head\Head;
            $h = $head->main($h);
            
            $page[]="block\head";
            $page[]="lc\index";
            $view = new \Mod\View\View;
            $view->show($h,$page);

            //var_dump($_POST);
        return $h;
    }

    
};
