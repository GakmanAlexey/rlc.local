<?php
        unset ($sql_create);
        unset ($sql);
        $sql_create = '
        CREATE TABLE heads (
            id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(id),
            url VARCHAR(255) NOT NULL, 
            title VARCHAR(255) NOT NULL,
            description VARCHAR(255) NOT NULL
           )
        ';

        $sql = new \Mod\Sql\Sql;
        $sql->db_connect->exec($sql_create);
        echo "[HEAD] Установлен";