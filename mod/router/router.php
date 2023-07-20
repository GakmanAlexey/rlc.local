<?php

namespace Mod\Router;

Class Router{
    public static $h = [];

    public function main($h){
        self::$h = $h;
        self::$h["Router"] = [];
        self::$h["Router"]["status"] = "Работает";

        if(self::$h["FireWall"]["connect_type"] == "user"){
            self::$h = $this->user(self::$h);
        }else if(self::$h["FireWall"]["connect_type"] == "bot"){
            self::$h = $this->bot(self::$h);
        }else if(self::$h["FireWall"]["connect_type"] == "cron"){
            self::$h = $this->cron(self::$h);
        }else{
            self::$h = $this->error(self::$h);
        }
        return self::$h;
    }

    public function user($h){
        $h = $this->redirect300($h);
        $h = $this->go($h);
        return $h;
    }
    public function bot($h){


        return $h;
    }
    public function cron($h){


        return $h;
    }
    public function error($h){
        $h["error"]["Router"]["select_type"] = "Ошибка определения типа пользователя";

        return $h;
    }

    public function go($h){
        $connect = $h["sql"]["db_connect"]->db_connect;
            $sth = $connect->prepare("SELECT * FROM `router` WHERE `url` = ?");
            $sth->execute(array($h["url"]["get_in_line"]));
            $result_sql = $sth->fetch(\PDO::FETCH_ASSOC);
        return $h;
    }
    //Редирект если нет флеша на конце строки
    public function redirect300($h){
        if($h["error"]["url_dont_have_slash"]){
            $url = $h["url"]["direct_in_line"];
            if(isset($h["url"]["get_in_line"]) and $h["url"]["get_in_line"] != ""){
                $url = $url."?".$h["url"]["get_in_line"];
            }
            header("Location: ".$url);
        }

        return $h;
    }
   
}