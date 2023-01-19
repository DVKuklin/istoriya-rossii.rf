<?php
//Данный файл добавляет строки во все TRH0??.html

//Создаем новые файлы с двумя новыми строчками
for ($col = 2;$col < 88;$col++) {
	if ($col<10) {
		$fstr = "TRH00".$col."/TRH00".$col.".html";
	} else {
		$fstr = "TRH0".$col."/TRH0".$col.".html";
	}
	$fstr_new = $fstr.'.new';
	$f = fopen($fstr,'r');
	$f_new = fopen($fstr_new,'w+');
	for ($i=1;$i<48;$i++) {
		$s_temp = fgets($f);
		$res = fwrite($f_new,$s_temp);
	}
	for ($i=1;$i<3;$i++) {
		$res = fwrite($f_new,"\n");
	}
	while (!feof($f)) {
		$s_temp = fgets($f);
		$res = fwrite($f_new,$s_temp);
	}
	fclose($f);
	fclose($f_new);
}


//Перекопируем из новых файлов в старые и новые удаляем
for ($col = 2;$col < 88;$col++) {
	if ($col<10) {
		$fstr = "TRH00".$col."/TRH00".$col.".html";
	} else {
		$fstr = "TRH0".$col."/TRH0".$col.".html";
	}
	$fstr_new = $fstr.'.new';
	$f = fopen($fstr_new,'r');
	$f_new = fopen($fstr,'w+');
	while (!feof($f)) {
		$s_temp = fgets($f);
		$res = fwrite($f_new,$s_temp);
	}
	unlink($fstr_new);
}


?>
<h1>All is done<h1>