<?php

namespace Mod\Telegram;

Class Telegram {
    
    public $token = '999999999:XXXXXXXXXXXXXXXXXXXXXXXXXXXX';// сюда нужно вписать токен вашего бота
    public $chat_id = '999999999';// сюда нужно вписать ваш внутренний айдишник

   

    public function message($h,$text,$token,$chat_id)
    {
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