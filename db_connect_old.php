<?php

// defined("NORWICH") or die ("Access denied");


$db = mysql_connect(DBHOST, DBUSER, DBPASS) or die("Нет соединения с MySQL сервером!");
mysql_select_db(DB,$db) or die("Нет содениения с требуемой базой данных!");
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');
mysql_query ("CREATE TABLE IF NOT EXISTS gb (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR (100), dt DATETIME, msg TEXT)") or die ("Не могу создать таблицу gb.");

?>