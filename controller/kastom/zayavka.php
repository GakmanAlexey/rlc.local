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

            $h= $this->read_date($h);
            $tg = new \Mod\Telegram\Telegram ;
            $h = $tg->message($h,$h["zayavka"]["text"]);
            //var_dump($_POST);
        return $h;
    }

    public function read_date($h){
        $name = $_POST["name"];
        $gorod = $_POST["gorod"];
        $phone = $_POST["phone"];
        $age = $_POST["age"];
        if(isset($_POST["possitions"])){
            if($_POST["possitions"]=="kassir"){
                $position ="Кассир";
            }
            else if($_POST["possitions"]=="povar"){
                $position ="Повар";
            }
            else if($_POST["possitions"]=="cleaner"){
                $position ="Уборка";
            }else{
                $position="Не выбрал";
            }
        }else{
            $position ="Не выбрал";
        }

        $text = "
        Откликнулся кандидат!
        Имя: $name
        Город: $gorod
        Телефон: $phone
        Позиция: $position
------------";
        $h["zayavka"] = [];
        $h["zayavka"]["text"] = $text;
        return $h;

    }
};
