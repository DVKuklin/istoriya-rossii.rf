<?php
include "TRH_avt.php";
?>

<?php if ($TRH_user['type'] <> "neuser"): ?>
<?php 
//Инициируем список столбиков
if (isset($_COOKIE['list_of_cols'])) {
	$list_of_cols = $_COOKIE['list_of_cols'];
} else  $list_of_cols = '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111';
if (isset($_GET["list_of_cols"])) {
	$list_of_cols = $_GET["list_of_cols"];
}
setcookie('list_of_cols',$list_of_cols,time()+604800);



//Инициируем номер текущего столбика
if (isset($_COOKIE['n_c'])) {
	$n_c = $_COOKIE['n_c'];
} else  $n_c = 2;
if (isset($_GET["n"])) {
	$n_c = $_GET["n"];
}
if ($n_c == 44 OR $n_c == 66) $n_c = $n_c+1;
setcookie('n_c',$n_c,time()+604800);

//Инициируем количество столбиков
if (isset($_COOKIE['count_of_col'])) {
	$count_of_col = $_COOKIE['count_of_col'];
} else  $count_of_col = 1;
if (isset($_GET["count_of_col"])) {
	$count_of_col = $_GET["count_of_col"];
}
setcookie('count_of_col',$count_of_col,time()+604800);

//Инициализация переменной, которая содержит инф. о том какие строки выводить (1-выводим, 0-не выводим)
//Таблица соответствий представлена в файле TRH_show_col.php
if (isset($_COOKIE['punkti'])) {
	$Punkti = $_COOKIE['punkti'];
} else  $Punkti = '111111111111111111111111111';
if (isset($_GET["punkti"])) {
	$Punkti = $_GET["punkti"];
}
setcookie('punkti',$Punkti,time()+604800);

//Инициируем позицию
if (isset($_COOKIE['position'])) {
	$position = $_COOKIE['position'];
} else  $position = 1;
if (isset($_GET["position"])) {
	$position = $_GET["position"];
}
setcookie('position',$position,time()+604800);

//Инициируем якорь
if (isset($_GET["anchor"])) {
	$yakor = $_GET["anchor"];
} else {
	$yakor = "false";
}


include "TRH_main_01.php";

//вносим номер столбика в document.number_of_col, количество столбцов, номера строк, которые выводятся и якорь
echo "
<script>
document.number_of_col = ".$n_c.";
document.count_of_col = ".$count_of_col.";
document.punkti = '".$Punkti."';
document.list_of_cols = '".$list_of_cols."';
document.position = ".$position.";
document.yakor = '".$yakor."';
</script>
";



//Раздел выбора действия в зависимости от нажатой кнопки
//Нажали кнопку меню период / правитель
if (isset($_GET['menu'])) {
		include "TRH_menu.php";
}


//Ничего не нажато 
else include "TRH_show_col.php";

?>
<?php include "TRH_main_02.php";?>
<?php endif; ?>