<?php
        unset ($sql_create);
        unset ($sql);
        $sql_create = '
        CREATE TABLE mailer (
            id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(id),
            configname VARCHAR(255) NOT NULL, 
            host VARCHAR(255) NOT NULL,
            port INT(6) NOT NULL,
            username VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            sandName VARCHAR(255) NOT NULL

           )
        ';

        $sql = new \Mod\Sql\Sql;
        $sql->db_connect->exec($sql_create);
        echo "[mail] Установлен";