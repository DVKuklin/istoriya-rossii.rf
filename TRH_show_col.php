<?php

/*Таблица соответсвий порядкового номера символа и строк, которые надо выводить переменной Punkti
0-3
1-4
2-5
3-6
4-7,8,9,10,11,12,13
5-14,15,16,17
6-18
7-19,20,21,22,23,24
8-25
9-26
10-27
11-28
12-29
13-30
14-31,32,33,34,35,36,37,38,39,40,40,41,42
15-43
16-44
17-45
18-46
19-47
20-48
21-49
*/

include "TRH_main_functions.php";

//Формируем массив столбиков, которые выбраны для показа
$j = 0;
for ($i = 2;$i<88;$i++) {
	if ($list_of_cols[$i-1] == '1') {
		if (($i == 44 and $list_of_cols[$i-2] <> '1') OR ($i == 66 and $list_of_cols[$i-2] <> '1')) {
			continue;
		} else {
			$massiv_of_cols[$j++] = $i;
		}
	}
}

//Ищем индекс текущей колонки, либо ближайшей колонки в $massi_of_cols
$k = 0; //Индекс текущей колонки в $massi_of_cols
$delta = 100;//Разность между номерами колонок в массиве и текущей колонкой
for ($i=0;$i<count($massiv_of_cols);$i++) {
	$temp = abs($n_c - $massiv_of_cols[$i]);
	if ($temp<$delta) {
		$k = $i;
		$delta = $temp;
	}
}

//Если $n_c не совпадает с найденным, то перезаписываем document.number_of_col
if ($n_c<>$massiv_of_cols[$k]) {
	echo "
	<script>
	document.number_of_col = ".$massiv_of_cols[$k].";
	</script>
	";
}

//Создаем список столбиков для вывода
for ($i = 0;$i<$count_of_col;$i++) {
	if (($i+$k)==count($massiv_of_cols)) break;
	$cols[$i] = $massiv_of_cols[$i+$k];
}
if ($cols[count($cols)-1] == 43 or $cols[count($cols)-1] == 65) $cols[count($cols)]=$cols[count($cols)-1]+1;

show_table($cols);
?>
<?php
    $fjv = "";//file_js_version
    if (file_exists("TRHscript_012.js")) {  
        $fjv = filemtime("TRHscript_012.js");
    }
 ?>

<script src = "TRHscript_012.js?v=<?php echo $fjv ?>"></script>