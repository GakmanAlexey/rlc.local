<?php
namespace Mod\PHPmail;


class Mail
{
    public function send($h,$mailConfig, $mailto, $subject, $text){

        $h = $this->selectMail($h,$mailConfig);

        $mail = new \Mod\PHPmail\PHPMailer;
        $mail->CharSet = 'UTF-8';         
        // Настройки SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
         
        $mail->Host = $h['mail']["config"]["host"];
        $mail->Port = $h['mail']["config"]["port"];
        $mail->Username = $h['mail']["config"]["username"];
        $mail->Password = $h['mail']["config"]["password"];
         


        // От кого
        $mail->setFrom($h['mail']["config"]["username"], $h['mail']["config"]["sandName"]);	         
        // Кому
        $mail->addAddress($mailto[0], $mailto[1]);         
        // Тема письма
        $mail->Subject = $subject;         
        // Тело письма
        $mail->msgHTML($text);
        $mail->send();
        //var_dump('<pre>',$h,'</pre>');
        return $h;

    }

    public function selectMail($h,$mailConfig){
        $connect = $h["sql"]["db_connect"]->db_connect;
        $sth = $connect->prepare("SELECT * FROM `mailer` WHERE `configname` = ? LIMIT 1");
        $sth->execute(array($mailConfig));
        $h['mail']["config"] = $sth->fetch(\PDO::FETCH_ASSOC);
        return $h;
    }
}
