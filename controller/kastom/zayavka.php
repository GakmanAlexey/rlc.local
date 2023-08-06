<?php

namespace Controller\Kastom;

Class Zayavka{
    public function index($h){
            $head =  new \Mod\Head\Head;
            $h = $head->main($h);
            
            $page[]="block\head";
            $page[]="kastom\zayavka";
            $view = new \Mod\View\View;
            $view->show($h,$page);

        return $h;
    }
};
