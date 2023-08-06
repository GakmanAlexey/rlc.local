<?php

namespace Controller\Index;

Class Index{
    public static $h = [];

    public function index($h){
        $head =  new \Mod\Head\Head;
        $h = $head->main($h);
        
        $h = $this->pos($h);
        $page[]="block\head";
        $page[]="index\index";
        $view = new \Mod\View\View;
        $view->show($h,$page);
        return $h;
        
    }
    
    public function pos($h){
        $h["index"] = [];
        if(isset($h["url"]["a_get_key_in_array"]["position"])){
            if($h["url"]["a_get_key_in_array"]["position"]=="kassir"){
                $h["index"]["position"] ="kassir";
            }
            else if($h["url"]["a_get_key_in_array"]["position"]=="povar"){
                $h["index"]["position"] ="povar";
            }
            else if($h["url"]["a_get_key_in_array"]["position"]=="cleaner"){
                $h["index"]["position"] ="cleaner";
            }else{
                $h["index"]["position"] ="all";
            }
        }else{
            $h["index"]["position"] ="all";
        }
        return $h;
    }
    
   
}