<?php

namespace Controller\User;

Class User{
    public function auth($h){
            $head =  new \Mod\Head\Head;
            $h = $head->main($h);
            
            $page[]="block\head";
            $page[]="user\login";
            $view = new \Mod\View\View;
            $view->show($h,$page);

            //var_dump($_POST);
        return $h;
    }

    public function register($h){
            $head =  new \Mod\Head\Head;
            $h = $head->main($h);
            
            $page[]="block\head";
            $page[]="user\\register";
            $view = new \Mod\View\View;
            $view->show($h,$page);

        return $h;
    }

};
