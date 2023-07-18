<?php

namespace Mod\Core;

Class Core{
    public static $h = [];
    public function __construct(){
        //Инициализация супер глобальной переменной
        $helper = new \Mod\Core\Helper;
        self::$h = $helper->main;
        //Подготовка ЮРЛ
        $this->get_url_page();        
        //Вызов Роутера
    }


    //Проверка адреса
    public function get_url_page(){
        //Полный путь
        self::$h['url']['all'] = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        //Протокол
        self::$h['url']['protocol'] = (!empty($_SERVER['HTTPS'])) ? 'https' : 'http';
        //Домен
        self::$h['url']['domen'] = $_SERVER['HTTP_HOST'] ;
        //Все корни в строку
        $dir = explode('?', $_SERVER['REQUEST_URI']);
        self::$h['error']['url_dont_have_slash'] = False;
        if(substr($dir[0], -1) != "/") {
            $dir[0].= "/";
            self::$h['error']['url_dont_have_slash'] = True;
        }
        self::$h['url']['direct_in_line'] = $dir[0];
        //Все корни в массиве (нумеровоном)
        self::$h['url']['a_direct_in_array'] = explode('/', self::$h['url']['direct_in_line']);
        //Количество вложений
        self::$h['url']['direct_size'] = count(self::$h['url']['a_direct_in_array']) - 2;
        
        //Определение переменных, избегаю дальнейших ошибок.
        self::$h['url']['get_in_line'] = "";
        self::$h['url']['a_get_key_in_line']= [];
        self::$h['url']['a_get_key_in_array'] =[];
        if(!empty($dir[1])){
            //Все гет параметры
            self::$h['url']['get_in_line'] = $dir[1];
            //Все гет параметры в массиве по строчно        
            self::$h['url']['a_get_key_in_line'] = explode('&', $dir[1]);
            //Все гет параметры в массиве по ключ значение  
            foreach(self::$h['url']['a_get_key_in_line'] as $item){
                $small_item = explode('=', $item);
                self::$h['url']['a_get_key_in_array'][$small_item[0]] = $small_item[1];
        }
        };
    }
    
   
}