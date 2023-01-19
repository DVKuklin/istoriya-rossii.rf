
<?php
// Если зашли сразу на страницу редактирования т.е. $_GET['n'] существует
if (isset($_GET['n'])) {
	include "TRH_avt.php";
	
	$n_c = $_GET['n'];
	
	include "TRH_main_01_for_edit.php";
	
	if ($TRH_user["type"] == "admin") {
		include "TRH_main_functions.php";
		show_table(array($n_c,97,98,99));
	} else {
		echo "<center><h1>Вы не администратор</h1></center>";
	}
	include "TRH_main_02.php";
	
	//Записываем номер редактирумого столбца

	echo '
	<script>
	document.num_of_col = '.$n_c.';
	//Устанавливаем title документа
	let elTitle = document.createElement("title");
	let s_t = document.num_of_col+"-"+rab_yachs[0].textContent + " / " + rab_yachs[4].textContent;
	elTitle.textContent = s_t;
	document.getElementsByTagName("head")[0].appendChild(elTitle);
	</script>
	';
	

} else { //Если нажали сохранить на этой же странице
	
	
	//Записываем в файл данные
	$keys = array_keys($_POST);
	$num_col = $_POST[$keys[count($_POST)-2]];
	$poz = $_POST[$keys[count($_POST)-1]];

	if ($num_col<10) {
		  $fstr = "TRH00".$num_col."/TRH00".$num_col.".html";
	  } else {
		  $fstr = "TRH0".$num_col."/TRH0".$num_col.".html";
	  }


	$fp = fopen($fstr, 'w+');


	for ($i=0;$i<51;$i++) {
		$test = fwrite($fp, $_POST[$keys[$i]]."\n");
		//if ($test) echo ($i.' Данные в файл успешно занесены.<br>');
		//else echo ($i.' Ошибка при записи в файл.<br>');
	}

	for ($i=51; $i<(count($_POST)-2); $i++){
		$test = fwrite($fp, '<div name = "obertka_dla_kom">');
		$test = fwrite($fp, $_POST[$keys[$i]]);
		$test = fwrite($fp, '</div>');
		//if ($test) echo ($i.' Данные в файл успешно занесены.<br>');
		//else echo ($i.' Ошибка при записи в файл.<br>');
	}

	
	//Возвращаемся на эту же страницу
	include "TRH_avt.php";

	$n_c = $num_col;
	
	include "TRH_main_01_for_edit.php";
	
	if ($TRH_user["type"] == "admin") {
		include "TRH_main_functions.php";
		show_table(array($n_c,97,98,99));
	} else {
		echo "<center><h1>Вы не администратор</h1></center>";
	}
	
	include "TRH_main_02.php";
	
	
	//Записываем номер редактирумого столбца

	echo '
	<script>
	document.num_of_col = '.$n_c.';
	//Устанавливаем title документа
	let elTitle = document.createElement("title");
	let s_t = document.num_of_col+"-"+rab_yachs[0].textContent + " / " + rab_yachs[4].textContent;
	elTitle.textContent = s_t;
	document.getElementsByTagName("head")[0].appendChild(elTitle);

	</script>
	';

}

?>
