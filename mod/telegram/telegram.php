<?php

namespace Mod\Telegram;

Class Telegram {
    
    public $token = '6040940830:AAEzN6YpVLQar2wUNojIYhB7zJxTEvxa1TM';// сюда нужно вписать токен вашего бота
    public $chat_id = '477850396';// сюда нужно вписать ваш внутренний айдишник

   

    public function message($h,$text,$token = null,$chat_id = null)
    {
        if($token == null){
            $token = $this->token;
        }
        if($chat_id == null){
            $chat_id = $this->chat_id;
        }
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . $token . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => $chat_id,
                    'text' => $text,
                ),
            )
        );

        if(curl_exec($ch)){
            $h["telegram"]["status"] = "Успешко выполнен";
        }else{
            $h["telegram"]["status"] = "Ошибка";
            $h["error"]["telegram"]="Ошибка отправки";
        }
        return $h;
    }
}