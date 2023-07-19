<?php

namespace Mod\Core;

Class Core{
    public static $h = [];
    public function __construct(){
        //Инициализация супер глобальной переменной
        $helper = new \Mod\Core\Helper;
        self::$h = $helper::$main;
        //Подготовка ЮРЛ
        self::$h = $this->get_url_page(self::$h);  
                
        //Вызов FireWall
        $fw = new \Mod\Firewall\Firewall();
        self::$h = $fw->main(self::$h);
        
        //Вызов Роутера
        

        return self::$h ;
    }


    //Проверка адреса
    public function get_url_page($h){
        //Полный путь
        $h['url']['all'] = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        //Протокол
        $h['url']['protocol'] = (!empty($_SERVER['HTTPS'])) ? 'https' : 'http';
        //Домен
        $h['url']['domen'] = $_SERVER['HTTP_HOST'] ;
        //Все корни в строку
        $dir = explode('?', $_SERVER['REQUEST_URI']);
        $h['error']['url_dont_have_slash'] = False;
        if(substr($dir[0], -1) != "/") {
            $dir[0].= "/";
            $h['error']['url_dont_have_slash'] = True;
        }
        $h['url']['direct_in_line'] = $dir[0];
        //Все корни в массиве (нумеровоном)
        $h['url']['a_direct_in_array'] = explode('/', $h['url']['direct_in_line']);
        //Количество вложений
        $h['url']['direct_size'] = count($h['url']['a_direct_in_array']) - 2;
        
        //Определение переменных, избегаю дальнейших ошибок.
        $h['url']['get_in_line'] = "";
        $h['url']['a_get_key_in_line']= [];
        $h['url']['a_get_key_in_array'] =[];
        if(!empty($dir[1])){
            //Все гет параметры
            $h['url']['get_in_line'] = $dir[1];
            //Все гет параметры в массиве по строчно        
            $h['url']['a_get_key_in_line'] = explode('&', $dir[1]);
            //Все гет параметры в массиве по ключ значение  
            foreach($h['url']['a_get_key_in_line'] as $item){
                $small_item = explode('=', $item);
                $h['url']['a_get_key_in_array'][$small_item[0]] = $small_item[1];
            }
        };
        return $h;
        
    }
    
   
}