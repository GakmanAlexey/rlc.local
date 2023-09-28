<?php

namespace Controller\lc;

Class device{
    public function index($h){
            $head =  new \Mod\Head\Head;
            $h = $head->main($h);
            
            $page[]="block\head";
            $page[]="lc\menu";
            $page[]="lc\device";
            $view = new \Mod\View\View;
            $view->show($h,$page);

            //var_dump($_POST);
        return $h;
    }

    
};
