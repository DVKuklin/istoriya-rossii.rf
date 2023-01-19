
<?php

function show_table($num_col) {
global $TRH_user;
global $Punkti;

$c_col = count($num_col);//Количество колонок для вывода

//создаем массив путей к файлам столбиков
for ($i=0; $i<$c_col; $i++){
  if ($num_col[$i]<10) {
      $fstr[$i] = "TRH00".$num_col[$i]."/TRH00".$num_col[$i].".html";
  } else {
	  $fstr[$i] = "TRH0".$num_col[$i]."/TRH0".$num_col[$i].".html";
  }
}

//массив строк с номерами колонок для формирования id
for ($i=0; $i<$c_col; $i++) {
  $nCol[$i] = $num_col[$i]."_";
}

//Открываем файл с первым столбиком заголовком
$file01 = fopen ("TRH001.html", "r");

//Открываем файлы со столбиками
for ($i=0; $i<$c_col; $i++) $file02[$i] = fopen ($fstr[$i], "r");

if (!$file01) {
    echo "<p>Невозможно открыть файл 1.\n</p>";
    exit;
}

for ($i=0; $i<$c_col; $i++){
 if (!$file02[$i]) {
     echo "<p>Невозможно открыть файл ".$file02[$i]."</p>";
     exit;
 }
}

//Ширина таблицы
$col_1_width = 70;
$col_2_width = 30;
$col_3_width = 130;
$rab_col_width = intval(1075/$c_col);
$table_width = $col_1_width+$col_2_width+$col_3_width+ $c_col*$rab_col_width;

//Таблица для скроллинга (для того, что бы при скроллинге оставались первые две строки
echo "<table id = 'main_table_scroll' style = 'table-layout:fixed;position:fixed;top:0px;background-color:white;display:none;'>";
echo "<col id = 'col_1_scroll' width = '".$col_1_width."'>";
echo "<col id = 'col_2_scroll' width = '".$col_2_width."'>";
echo "<col id = 'col_3_scroll' width = '".$col_3_width."'>";
for ($i=0; $i<$c_col; $i++){
	echo "<col id = 'col_rab_yach_".$i."_scroll' width = '".$rab_col_width."'>";
}


//Строка 1 скролл
    $x = 1;
    $line01 = fgets ($file01);
	$line_1_1_scroll = $line01;
	echo "<tr id = 'main_row_1_scroll'>";
	echo "<td id = 'row_1_".$x."_scroll' class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";

for ($i=0; $i<$c_col; $i++){	
    $line02 = fgets ($file02[$i]);
	$line02_1_scroll[$i] = $line02;
	echo "<td id = 'row_".$nCol[$i].$x."_scroll'>";
	echo $line02;
	echo "</td>";
}
	echo "</tr>";

//Строка 2 скролл
    $x = 2;
    $line01 = fgets ($file01);
	$line_1_2_scroll = $line01;
	echo "<tr>";
	echo "<td class = 'razdel_right' id = 'row_1_".$x."_scroll' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";

for ($i=0; $i<$c_col; $i++){	
    $line02 = fgets ($file02[$i]);
	$line02_2_scroll[$i] = $line02;
	echo "<td id = 'row_".$nCol[$i].$x."_scroll'>";
	echo $line02;
	echo "</td>";
}
	echo "</tr>";

echo "</table>";

echo "<center>";
echo "<table  id = 'main_table' style = 'table-layout:fixed;'width = '".$table_width."'>";
echo "<col width = '".$col_1_width."'>";
echo "<col width = '".$col_2_width."'>";
echo "<col width = '".$col_3_width."'>";
for ($i=0; $i<$c_col; $i++){
	echo "<col id = 'col_rab_yach_".$i."' width = '".$rab_col_width."'>";
}

//Строка 1
    $x = 1;
    $line01 = $line_1_1_scroll;
	echo "<tr id = 'main_row_1'>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";

for ($i=0; $i<$c_col; $i++){	
	echo "<td class = 'rab_yach' id = 'row_".$nCol[$i].$x."'>";
	echo $line02_1_scroll[$i];
	echo "</td>";
}
	echo "</tr>";

//Строка 2
    $x = 2;
	echo "<tr>";
	echo "<td class = 'razdel_bottom razdel_right' id = 'row_1_".$x."' align = 'right' valign = 'center' colspan = '3'>";
	echo $line_1_2_scroll;
	echo "</td>";

for ($i=0; $i<$c_col; $i++){	
	echo "<td class = 'razdel_bottom rab_yach' id = 'row_".$nCol[$i].$x."'>";
	echo $line02_2_scroll[$i];
	echo "</td>";
}
	echo "</tr>";



//Если столбик недоступен, то выведем пустую колонку
//Если это для редактирования TRH_edit.php, то ничего не делаем
//и делаем так, что б были показаны все пункты
for ($i=0; $i<$c_col; $i++){
	if ($num_col[$i]==97 or $num_col[$i]==98 or $num_col[$i]==99) {
		$Punkti = '1111111111111111111111111';
		continue;
	} 
	if (!$TRH_user["col".$num_col[$i]]) $fstr[$i] = "TRH/TRH_.html";
}

//Переоткрываем файлы со столбиками
for ($i=0; $i<$c_col; $i++) $file02[$i] = fopen ($fstr[$i], "r");
//Пропускаем 2 строки
for ($j =0;$j<2;$j++) {
	for ($i=0; $i<$c_col; $i++){	
		$line02 = fgets ($file02[$i]);
	}
}

//Строка 3
    $x = 3;
    $line01 = fgets ($file01);
if ($Punkti[0] == '1') {
	echo "<tr class = '65_66_4_row'>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right razdel_top 65_66_4_yach_menu bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}	
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[0] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[0] == '1') echo "</tr>";

//Строка 4
    $x = 4;
    $line01 = fgets ($file01);
if ($Punkti[1] == '1') {
	echo "<tr class = '65_66_4_row'>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right 65_66_4_yach_menu bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}	
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[1] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[1] == '1') echo "</tr>";


//Строки 5-6
for ($x=5; $x<7; $x++) {
    $line01 = fgets ($file01);
if ($Punkti[$x-3] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right razdel_top bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}	
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[$x-3] == '1') {
	echo "<td class = 'razdel_top rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[$x-3] == '1') echo "</tr>";
}

//Строка 7
	$x = 7;
    $line01 = fgets ($file01);
if ($Punkti[4] == '1') {
	echo "<tr>";
    echo "<td id = 'econ' align = 'center' valign = 'center' rowspan = '7' class = 'razdel_top bg-darkBlue'><b>Э<br>к<br>о<br>н<br>о<br>м<br>и<br>к<br>а</b></td>";
	echo "<td id = 'row_1_".$x."' align = 'right' valign = 'center' colspan = '2' class = 'razdel_top razdel_right bg-lightBlue'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[4] == '1') {
	echo "<td class = 'rab_yach border-lightBlue razdel_top font-arial' id = 'row_".$nCol[$i]."7'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[4] == '1')	echo "</tr>";

//Строки 8-13
for ($x=8; $x<14; $x++) {
    $line01 = fgets ($file01);
if ($Punkti[4] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[4] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[4] == '1') echo "</tr>";
}

//Строка 14
	$x = 14;
    $line01 = fgets ($file01);
if ($Punkti[5] == '1') {
	echo "<tr>";
    echo "<td id = 'socSf' class = 'razdel_top bg-darkBlue padding-y' align = 'center' valign = 'center' rowspan = '4'><b>С<br>о<br>ц<br>и<br>а<br>л<br>ь<br>н<br>а<br>я<br> <br>с<br>ф<br>е<br>р<br>а</b></td>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_top razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[5] == '1') {
	echo "<td class = 'razdel_top rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i]."14'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[5] == '1') echo "</tr>";

//Строки 15-17
for ($x=15; $x<18; $x++) {
    $line01 = fgets ($file01);
if ($Punkti[5] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[5] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[5] == '1') echo "</tr>";
}

//Строчка 18
    $x = 18;
    $line01 = fgets ($file01);
if ($Punkti[6] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_top razdel_right bg-darkBlue' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[6] == '1') {
	echo "<td class = 'razdel_top rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i]."18'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[6] == '1') echo "</tr>";

//Строка 19
	$x = 19;
    $line01 = fgets ($file01);
if ($Punkti[7] == '1') {
	echo "<tr>";
    echo "<td id = 'strVl' class = 'razdel_top razdel_bottom bg-darkBlue' align = 'center' valign = 'center' rowspan = '6'>
	  <table class='no-border'>
	    <tr><td>&nbsp;</td>
		  <td class='padding-y' valign = 'center' align = 'center'><b>С<br>т<br>р<br>у<br>к<br>т<br>у<br>р<br>а<br> <br>в<br>л<br>а<br>с<br>т<br>и<br><br>и</b></td>
		  <td>&nbsp;</td>
		  <td valign = 'center' align = 'center'><b>с<br>и<br>с<br>т<br>е<br>м<br>а<br> <br>у<br>п<br>р<br>а<br>в<br>л<br>е<br>н<br>и<br>я</b></td>
		  <td>&nbsp;</td>
	    </tr>
	  </table>
	</td>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_top razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[7] == '1') {
	echo "<td class = 'razdel_top rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i]."19'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[7] == '1') echo "</tr>";

//Строка 20
	$x = 20;
    $line01 = fgets ($file01);
if ($Punkti[7] == '1') {
	echo "<tr>";
    echo "<td class='bg-darkBlue' align = 'center' valign = 'center' rowspan = '4'>
	  <table class='no-border'>
  	    <tr><td>&nbsp;</td>
        <td valign = 'center' align = 'center'><b>В<br>е<br>т<br>в<br>и<br> <br>в<br>л<br>а<br>с<br>т<br>и</b>
		<td>&nbsp;</td>
	    </tr>
	  </table>
	</td>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-lightBlue' align = 'right' valign = 'center'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[7] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i]."20'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[7] == '1') echo "</tr>";


//Строки 21-23
for ($x=21; $x<24; $x++) {
    $line01 = fgets ($file01);
if ($Punkti[7] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-lightBlue' align = 'right' valign = 'center'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[7] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[7] == '1') echo "</tr>";
}

//Строка 24
    $line01 = fgets ($file01);
	$x = 24;
if ($Punkti[7] == '1') {
	echo "<td id = 'row_1_".$x."' class = 'razdel_bottom razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[7] == '1') {
	echo "<td  class = 'razdel_bottom rab_yach border-lightBlue font-arial border-lightBlue' id = 'row_".$nCol[$i]."24'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[7] == '1') echo "</tr>";

//Строка 25
	$x=25;
    $line01 = fgets ($file01);
if ($Punkti[8] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right razdel_bottom bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[8] == '1') {
	echo "<td class = 'rab_yach border-lightBlue razdel_bottom font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[8] == '1') echo "</tr>";

//Строка 26
	$x=26;
    $line01 = fgets ($file01);
if ($Punkti[9] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
if ($Punkti[9] == '1') {
	echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
	echo $line02;
	echo "</td>";
}
}
if ($Punkti[9] == '1') echo "</tr>";

// Строки 27-30
for ($x=27; $x<31; $x++) {
    $line01 = fgets ($file01);
	if ($Punkti[$x-17] == '1') {
		echo "<tr>";
		echo "<td id = 'row_1_".$x."' class = 'razdel_right razdel_bottom bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
		echo $line01;
		echo "</td>";
	}
	for ($i=0; $i<$c_col; $i++){
		$line02 = fgets ($file02[$i]);
		if ($Punkti[$x-17] == '1') {
			echo "<td class = 'rab_yach border-lightBlue razdel_bottom font-arial' id = 'row_".$nCol[$i].$x."'>";
			echo $line02;
			echo "</td>";
		}
	}
	if ($Punkti[$x-17] == '1') echo "</tr>";
}

//Строки 31-39-42
	$x = 31;
    $line01 = fgets ($file01);
if ($Punkti[14] == '1') {
	echo "<tr>";
    echo "<td id = 'kult' class = 'razdel_top bg-darkBlue' align = 'center' valign = 'center' rowspan = '12'><b>К<br>у<br>л<br>ь<br>т<br>у<br>р<br>а</b></td>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_top razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
	if ($Punkti[14] == '1') {
		echo "<td  class = 'razdel_top border-lightBlue rab_yach border-lightBlue font-arial'  id = 'row_".$nCol[$i]."31'>";
		echo $line02;
		echo "</td>";
	}
}
if ($Punkti[14] == '1') echo "</tr>";

for ($x=32; $x<43; $x++) {
    $line01 = fgets ($file01);
	if ($Punkti[14] == '1') {
		echo "<tr>";
		echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-lightBlue' align = 'right' valign = 'center' colspan = '2'>";
		echo $line01;
		echo "</td>";
	}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
	if ($Punkti[14] == '1') {
		echo "<td class = 'rab_yach font-arial border-lightBlue' id = 'row_".$nCol[$i].$x."'>";
		echo $line02;
		echo "</td>";
	}
}
if ($Punkti[14] == '1') echo "</tr>";
}

//Строка 43
    $x = 43;
    $line01 = fgets ($file01);
if ($Punkti[15] == '1') {
	echo "<tr>";
	echo "<td id = 'row_1_".$x."' class = 'razdel_top razdel_right bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
	echo $line01;
	echo "</td>";
}
for ($i=0; $i<$c_col; $i++){
    $line02 = fgets ($file02[$i]);
	if ($Punkti[15] == '1') {
		echo "<td class = 'razdel_top rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
		echo $line02;
		echo "</td>";
	}
}
if ($Punkti[15] == '1') echo "</tr>";

// Строки 44-51
for ($x=44; $x<52; $x++) {
    $line01 = fgets ($file01);
	if ($Punkti[$x-28] == '1') {
		echo "<tr>";
		echo "<td id = 'row_1_".$x."' class = 'razdel_right bg-darkBlue border_rdb' align = 'right' valign = 'center' colspan = '3'>";
		echo $line01;
		echo "</td>";
	}
	for ($i=0; $i<$c_col; $i++){
		$line02 = fgets ($file02[$i]);
		if ($Punkti[$x-28] == '1') {
			echo "<td class = 'rab_yach border-lightBlue font-arial' id = 'row_".$nCol[$i].$x."'>";
			echo $line02;
			echo "</td>";
		}
	}
	if ($Punkti[$x-28] == '1') echo "</tr>";
}

//Пустая строка для выравнивания таблицы
echo "<tr id='trCopiright'>
        <td colspan = '3' style = 'border:0;'></td>
		<td style = 'border:0;' colspan = '".$c_col."'><span style = 'color:white'>Если вы видите этот текст, то это значит, что вы скопировали или пытаетесь скопировать его со страницы ИСТОРИЯ-РОССИИ.РФ. Материалы данного сайта защищены законом. Копирование и использование контента с данного сайта без согласия автора запрещено!!!</span>
		</td>
      </tr>";

echo ("</table>");
echo "</center>";


//Вставляем навигацию по сферам
while (!feof ($file01)) {
	$line = fgets ($file01);
	echo $line;
}

//Вставляем сами комментарии
for ($i=0;$i<$c_col;$i++){
  while (!feof ($file02[$i])) {
      $line = fgets ($file02[$i]);
	  echo $line;
}
}


}

?>

