<?php
$bd_location = "localhost";
$bd_user = "root";
$bd_password = "2194";
$bd_name = "srv51501_trh";

$bd = new mysqli($bd_location, $bd_user, $bd_password, $bd_name);

//$res = $bd->query("");
//$res = $bd->query("SHOW DATABASES");
//$res = $bd->query("CREATE DATABASE srv51501_trh");
//$res = $bd->query("GRANT SELECT , INSERT , UPDATE , CREATE , PROCESS ON * . * TO 'srv51501_smirnov'@'localhost' IDENTIFIED BY 'Metareason_2002' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 10000 MAX_CONNECTIONS_PER_HOUR 10000 MAX_UPDATES_PER_HOUR 10000");


//Создаем таблицу
/*
$s_temp = "CREATE TABLE TRH_users (id INT, log TEXT, pas TEXT, session_id TEXT, col_2 boolean";

for ($i = 3; $i<88; $i++) {
	$s_temp = $s_temp.", col_".$i." boolean";
}
$s_temp = $s_temp.")";
echo $s_temp."<br>";

$res = $bd->query($s_temp);
*/

//$res = $bd->query("INSERT INTO TRH_users (log, pas) values('Smirnov_admin', 'Metareason_2002')");
//$res = $bd->query("INSERT INTO TRH_users (log, pas) values('Kuklin', '2194')");


//Добавляем новое поле
//$res = $bd->query("ALTER TABLE TRH_users ADD copy boolean");

/*Заполняем строку таблицы
$s_temp = "col_2='1'";
for ($i = 3; $i<50; $i++) {
	$s_temp = $s_temp.", col_".$i."='1'";
}
for ($i = 50; $i<88; $i++) {
	$s_temp = $s_temp.", col_".$i."='1'";
}

echo "<br>".$s_temp."</br>";
$res = $bd->query("UPDATE trh_users SET ".$s_temp." WHERE log='Smirnov_admin'");
*/

//Выводим существующие столбики (поля) таблицы
//$res = $bd->query("SHOW COLUMNS FROM TRH_users");

//Заполняем поле copy
//$res = $bd->query("UPDATE trh_users SET copy = '1' WHERE log='Smirnov_admin'");

//Смтрим что в строке
$res = $bd->query("SELECT copy FROM trh_users WHERE log='Smirnov_admin'");

echo "<pre>";
var_dump($bd);
echo "</pre>";

echo "<br>";

echo "<pre>";
var_dump($res);
echo "</pre>";

echo "<br>";

$res_mas = $res->fetch_all();

echo "<pre>";
var_dump($res_mas);
echo "</pre>";






?>