<?php
$TRH_user['type'] = "neuser";

function generate_id() {
	$str = '';
	for ($i = 1;$i<27;$i++) {
		$x = rand(1,3);
		switch($x) {
			case 1:
				$str = $str.chr(rand(48,57));
				break;
			case 2:
				$str = $str.chr(rand(65,90));
				break;
			case 3:
				$str = $str.chr(rand(97,122));
				break;
		}	

	}
	return $str;
}

$dblocation = "localhost";//Расположение базы 
$dbuser = "srv51501_smirnov";//Имя пользователя
$dbpassword = "Metareason_2002";// "Metareason";//Пароль к базе
$dbname = "srv51501_trh";//Название базы

if (isset($_COOKIE["TRH_log"]) and isset($_COOKIE["TRH_pas"]) and isset($_COOKIE["TRH_id"])) {
	//5
	$bd = new mysqli($dblocation,$dbuser,$dbpassword,$dbname);
    $s_temp ="SELECT log, pas, session_id FROM TRH_users WHERE log = '".$_COOKIE["TRH_log"]."' AND pas =  '".$_COOKIE["TRH_pas"]."' AND session_id = '".$_COOKIE["TRH_id"]."'";
	$res = $bd->query($s_temp);
	if ($res->num_rows <> 0) {
		//6 запись в базе стакими куки есть
		//Определяем пользователя
		$TRH_user["name"]=$_COOKIE["TRH_log"];
		if ($_COOKIE["TRH_log"]=="Smirnov_admin" and $_COOKIE["TRH_pas"]=="Metareason_2002") {
			$TRH_user['type'] = "admin";
		} else {
			$TRH_user['type'] = "user";
		}
		setcookie("TRH_log",$_COOKIE["TRH_log"],time()+604800);
		setcookie("TRH_pas",$_COOKIE["TRH_pas"],time()+604800);
		setcookie("TRH_id",$_COOKIE["TRH_id"],time()+604800);
	} else {
		//7
		setcookie("TRH_log",'',time()-86400);
		setcookie("TRH_pas",'',time()-86400);
		setcookie("TRH_id",'',time()-86400);
		include "TRH_window_for_avt.php";
	}
} else {
	//1 Были ли переданы данные с TRH_window_for_avt.php
	if (isset($_POST["TRH_POST_log"]) and isset($_POST["TRH_POST_pas"])) {
		//2
		$s_temp ="SELECT * FROM TRH_users WHERE log = '".$_POST["TRH_POST_log"]."' AND pas =  '".$_POST["TRH_POST_pas"]."'";
		$bd = new mysqli($dblocation,$dbuser,$dbpassword,$dbname);
		$res = $bd->query($s_temp);
		/*echo $s_temp."<br>";
		echo "<pre>";
		var_dump($res);
		echo "</pre>";*/
		// Есть ли запись с переданными данными
		if ($res->num_rows == 0) {
			//10 если такой записи нет, то
			include "TRH_window_for_avt.php";
			echo "<script>
				  let el = document.createElement('div');
				  el.innerHTML = '<center><h1>Такого пользователя в базе нет, либо вы ввели неправильный логин и пароль.<br>Попробуйте ещё раз.</h1></center>';
				  logo.after(el);
			    </script>";
		} else {
			//4 такая запись есть
			//Устанавливаем куки и session_id
			$res_mas = $res->fetch_all();
			$ID = generate_id();
			setcookie("TRH_log",$_POST["TRH_POST_log"],time()+604800);
			setcookie("TRH_pas",$_POST["TRH_POST_pas"],time()+604800);
			setcookie("TRH_id",$ID,time()+604800);
			$s_temp = "UPDATE TRH_users SET session_id = '".$ID."' WHERE log='".$_POST["TRH_POST_log"]."'";
			$bd->query($s_temp);
			//Определяем пользователя
			$TRH_user["name"]=$_POST["TRH_POST_log"];
			if ($_POST["TRH_POST_log"]=="Smirnov_admin" and $_POST["TRH_POST_pas"]=="Metareason_2002") {
				$TRH_user['type'] = "admin";
			} else {
				$TRH_user['type'] = "user";
			}
		}
	} else {
		//3
		include "TRH_window_for_avt.php";
	}
}

//Если авторизовались, то заполняем разрешения на показ столбиков в массив TRH_user, а так же разрешение копировать
if ($TRH_user['type'] <> "neuser") {
	$s_temp = 'col_2';
	for ($i = 3; $i<88; $i++) {
		$s_temp = $s_temp.", col_".$i;
	}
	$bd = new mysqli($dblocation,$dbuser,$dbpassword,$dbname);
	$res = $bd->query("SELECT ".$s_temp." FROM TRH_users WHERE log = '".$TRH_user["name"]."'");
	$res_mas = $res->fetch_all();
	for ($i = 2;$i<88;$i++) {
		$TRH_user["col".$i]=$res_mas[0][$i-2];
	}
	$res = $bd->query("SELECT copy FROM TRH_users WHERE log = '".$TRH_user["name"]."'");
	$res_mas = $res->fetch_all();
	$TRH_user["copy"]=$res_mas[0][0];
}

?>

