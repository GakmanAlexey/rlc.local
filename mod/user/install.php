<?php
        unset ($sql_create);
        unset ($sql);
        $sql_create = '
        CREATE TABLE user (
            id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(id),
            login VARCHAR(255) NOT NULL, 
            pass VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            name VARCHAR(255) NOT NULL,
            date_birday VARCHAR(255) NOT NULL,

            
            date_reg VARCHAR(255) ,
            ip_reg VARCHAR(255) ,
            date_auth VARCHAR(255) ,
            ip_auth VARCHAR(255) ,
            
            destr VARCHAR(255) 
           )
        ';

        $sql = new \Mod\Sql\Sql;
        $sql->db_connect->exec($sql_create);
        echo "[user] Установлен";