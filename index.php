<?php

define("MYPOS" , __DIR__);
define("SLASH" ,"\\");

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

ini_set('session.gc_maxlifetime', 172800);
ini_set('session.cookie_lifetime', 172800);


spl_autoload_register(function ($class_name) {   
    $class_name = str_replace('\\','/',$class_name);
    $class_name = strtolower($class_name);
    if(file_exists(MYPOS."/".$class_name . '.php')){include_once MYPOS."/".$class_name . '.php';}
    
});
if(false){//После установки изменить на фалсе
    $ins = new \Mod\Install\Install;
    $ins->main();
    die();
}
session_start();
$Core = new \Mod\Core\Core;


//$mmail = new \Mod\PHPmail\Mail;
//$mmail->send($Core::$h,"test", ["gakman.test@ya.ru","Хозяин"], "Владик привет", "Владик пока");



//var_dump('<pre>',$Core::$h,'</pre>');
?>
