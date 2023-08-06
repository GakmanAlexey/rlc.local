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

            $tg = new \Mod\Telegram\Telegram ;
            $text="test";
            $h = $tg->message($h,$text);
            var_dump($_POST);
        return $h;
    }

    public function read_date($h){

    }
};
