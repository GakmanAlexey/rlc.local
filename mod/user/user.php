<?php

namespace Mod\User;

Class User {
    public $login_min = 6;
    public $login_max = 12;
    public $pass_min = 6;
    public $pass_max = 12;    
    public $name_min = 2;
    public $name_max = 22;

    public function register($h){
        $h["user"] = [];
        $h["error"]["user"] = [];
        $h["user"]["type"] = "register";
        if(!isset($_POST["go"]) ){
            return $h;
        }
        $h = $this->check_date($h);
        return $h;
    }


    public function check_date($h){
        
        if($h["user"]["type"] == "register"){
            $h = $this->check_date_valid($h);
            $h = $this->go_register($h);
        }else if($h["user"]["type"] == "auth"){

        }else{

        }
        return $h;
    }

    public function check_date_valid($h){
        if($h["user"]["type"] == "register"){
            $h["error"]["user"]["status"] = "none";
            //Проверка длины логинов
            if( strlen($_POST["login"]) < $this->login_min){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["login"] = "Логин должен быть длинее " .$this->login_min . " символов";
            }
            if( strlen($_POST["login"]) > $this->login_max){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["login"] = "Логин должен быть короче " .$this->login_max . " символов";
            }

            //Проверка длины паролей
            if( strlen($_POST["password"]) < $this->pass_min){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["password"] = "Пароль должен быть длинее " .$this->pass_min . " символов";
            }
            if( strlen($_POST["password"]) > $this->pass_max){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["password"] = "Пароль должен быть короче " .$this->pass_max . " символов";
            }

            //Проверка совпадения паролей
            if($_POST["password"] != $_POST["password2"]){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["password2"] = "Пароль не совпадают";
            }

            //Проверка длины имени
            if( strlen($_POST["name"]) < $this->name_min){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["name"] = "Имя должен быть длинее " .$this->name_min . " символов";
            }
            if( strlen($_POST["name"]) > $this->name_max){
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["name"] = "Имя должен быть короче " .$this->name_max . " символов";
            }

            //Проверка валидности почты
            if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
                $h["error"]["user"]["status"] = "error";
                $h["error"]["user"]["mail"] = "Ошибка в почте";
            }

        }
        return $h;
    }

    public function go_register($h){
        if($h["error"]["user"]["status"] != "none"){
            return $h;
        }
        //Проверить свободе ли логин        
        $sth = $h["sql"]["db_connect"]->db_connect->prepare("SELECT * FROM `user` WHERE `login` = ?");// WHERE `login` = ?
        $sth->execute(array($_POST["login"]));
        $result_sql = $sth->fetch(\PDO::FETCH_ASSOC);
        if($result_sql != false){
            $h["error"]["user"]["status"] = "error";
            $h["error"]["user"]["login"] = "Логин занят";
            return $h;
        }

        $user_ip_f = new \Lib\Ip_user;
        $hash_pass =  new \Lib\Hash_pass;

        $user_ip = $user_ip_f->get_ip();
        $date_reg = time();
        $pass =  $hash_pass->get_hash($_POST["login"], $_POST["password"]);

        $sth = $h["sql"]["db_connect"]->db_connect->prepare("INSERT INTO `user` (`login`, `pass`,`email`,`name`,`date_reg`,`ip_reg`,`date_birday`) VALUES (?, ?, ?, ?, ?, ?,0) ");
        $status_reg = $sth->execute(array($_POST["login"],$pass,$_POST["mail"],$_POST["name"],$date_reg,$user_ip));
        if(!$status_reg){
            $h["error"]["user"]["status"] = "error";
            $h["error"]["user"]["login"] = "Неизвестная ошибка";
            
            return $h;
        }
        
        //Перекинуть на страницу авторизации

        header('Location: '.$h['url']['protocol'].'://'.$h['url']['domen'].'/user/auth/', true, 301);
        exit();
        return $h;
    }

}