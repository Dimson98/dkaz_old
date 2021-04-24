<!--
 	Пример гостевой книги с динамическим обновлением содержимого.
	(с) Михаил Пестречихин, 2009
	http://useful.pestr.ru/ 
-->

<?php
	// название  сервера БД
	// define ("DBHOST", "localhost");
	// название базы данных
	// define ("DB", "dkaz_db_2");
	// пользователь MySQL
	// define ("DBUSER", "root");
	// пароль к MYSQL
	// define ("DBPASS", "");
	
	include "config.php";
	
	// создаем базу данных и таблицу gb
	$link1=mysql_connect(DBHOST, DBUSER, DBPASS) or die("Нет соединения с MySQL сервером!");
	// mysql_query ("CREATE DATABASE IF NOT EXISTS ".DATABASE) or die ("Не могу создать базу данных gb.");
	mysql_select_db(DB) or die("Нет содениения с требуемой базой данных!");
    mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');
	mysql_query ("CREATE TABLE IF NOT EXISTS gb_dkaz (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR (30), fname VARCHAR (30), cname VARCHAR (50), mail VARCHAR (30), dt DATETIME, msg TEXT)") or die ("Не могу создать таблицу gb.");
?>