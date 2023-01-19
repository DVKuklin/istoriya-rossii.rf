<!DOCTYPE HTML>
<head>
 <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">

 <?php
 	$fcv = "";//file_css_version
	if (file_exists("TRH_main_003.css")) {	
		$fcv = filemtime("TRH_main_003.css");
	}
 ?>
 <link rel = "StyleSheet" href = "TRH_main_003.css?v=<?php echo $fcv ?>">  
 <link rel="icon" href="TRH.ico">

 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body 
<?php if (!$TRH_user["copy"]) echo 'oncopy = "return false;" ' ?>
style = "font-size:small;margin-top:0px;overflow-x:hidden;">
<script>
//Это что бы ловить ошибки в мобильной версии
// window.onerror = function(msg, url, lineNo, columnNo, error) {
//   let str = `msg = ${msg}. url = ${url}. lineNo = ${lineNo}. columnNo = ${columnNo}.`;
//   alert(str);
// }


var Z_Index = 100;
var koms;
var mainRow;

function showKom(str) {
  let obKom;//Нужный комментарий
  for (let i=0;i<koms.length;i++) {
	if (koms[i].id == str) {
		obKom = koms[i];
		break;
	}
  }
  if (obKom.style.display == 'block') return;
  obKom.style.display = 'block';
  let x = document.documentElement.clientWidth - obKom.offsetWidth
  if (event.pageX > x) 
     obKom.style.left = x + 'px'
	else
     obKom.style.left = event.pageX + 'px';
  
  
  if (mainRow.style.display != 'none') {
	let ms = obKom.id.split('_');
	if (ms[1] == '01' || ms[1] == '02') {//Если комментарий принадлежит mainRow
		obKom.style.position = 'fixed';
		obKom.style.top = event.clientY + 'px';
	} else {
		obKom.style.position = 'absolute'; 
		obKom.style.top = event.pageY + 'px';
	}
  } else {
	obKom.style.position = 'absolute'; 
	obKom.style.top = event.pageY + 'px';
  }
  
  setZIndex(obKom);
  
};
</script>
<div class="header">
	<div class="header-logo">
		<img id="TRH_logo" src = "TRH/TRH_logo.svg">
		<span id="logo_text">ИСТОРИЯ-РОССИИ.РФ</span>
	</div>
	<div class="header-nav">
		<div class="header-nav__btns">
			<img src = "TRH/TRH_nazad_na_neskolko_001.svg" class = "TRH_buttons" onclick = "menu_submit('nazad_na_neskolko',false);"><img src = "TRH/TRH_nazad_001.svg" class = "TRH_buttons" onclick = "menu_submit('nazad',false);">
		</div>
		<div id="colsCountGroup" class="button_menu" title="Количество столбцов (правителей)">
				<nobr><span class = "radio" id="colSelect_1">1<input type = "radio" name = "vibor_kol_stolb" id = "cols_1" onclick = "col_count_submit(1);"></span></nobr>
				<nobr><span class = "radio" id="colSelect_2">2<input type = "radio" name = "vibor_kol_stolb" id = "cols_2" onclick = "col_count_submit(2);"></span></nobr>
				<nobr><span class = "radio" id="colSelect_3">3<input type = "radio" name = "vibor_kol_stolb" id = "cols_3" onclick = "col_count_submit(3);" id="colSelect_1"></span></nobr>
				<nobr><span class = "radio" id="colSelect_4">4<input type = "radio" name = "vibor_kol_stolb" id = "cols_4" onclick = "col_count_submit(4);"></span></nobr>
				<nobr><span class = "radio" id="colSelect_5">5<input type = "radio" name = "vibor_kol_stolb" id = "cols_5" onclick = "col_count_submit(5);"></span></nobr>
		</div>
		<div class="header-nav__btns">
			<img src = "TRH/TRH_vpered_001.svg" class = "TRH_buttons" onclick = "menu_submit('vpered',false);"><img src = "TRH/TRH_vpered_na_neskolko_001.svg" class = "TRH_buttons" onclick = "menu_submit('vpered_na_neskolko',false);">
		</div>
	</div>
	<div class="header-menu">
		<img src="TRH/buttonMenu.svg" id="btnMenu" class = "TRH_buttons" onclick = "window.location = 'index.php?menu=1';">
	</div>
</div>

<!--Навигация-->
<span class = "navigaciya" id = "navigaciya_nazad" style = "left:0px;">
	<nobr>
		<img src = "TRH/TRH_nazad_na_neskolko_001.svg" class = "TRH_buttons" onclick = "menu_submit('nazad_na_neskolko');">
		<img src = "TRH/TRH_nazad_001.svg" class = "TRH_buttons" onclick = "menu_submit('nazad');">
	</nobr>
</span>

<span class = "navigaciya"  id = "navigaciya_vpered" style = "	">
	<nobr>
		<img src = "TRH/TRH_vpered_001.svg" class = "TRH_buttons" onclick = "menu_submit('vpered');">
		<img src = "TRH/TRH_vpered_na_neskolko_001.svg" class = "TRH_buttons" onclick = "menu_submit('vpered_na_neskolko');">
	</nobr>
</span>

<script>
function menu_submit(str,withOutNavigaciya) {
	//Формируем массив столбиков, которые выбраны для показа
	let massiv_of_cols = [];
	let j = 0;
	let list_of_cols = document.list_of_cols;
	for (let i = 2;i<88;i++) {
		if (document.list_of_cols[i-1] == '1') {
			if ((i == 44 && list_of_cols[i-2] != '1') || (i == 66 && list_of_cols[i-2] != '1')) {
				continue;
			} else {
				massiv_of_cols[j++] = i;
			}
		}
	}

	//Ищем индекс текущей колонки, либо ближайшей колонки в $massi_of_cols
	let k = 0; //Индекс текущей колонки в $massi_of_cols
	let delta = 100;//Разность между номерами колонок в массиве и текущей колонкой
	for (let i=0;i<massiv_of_cols.length;i++) {
		let temp = Math.abs(document.number_of_col - massiv_of_cols[i]);
		if (temp<delta) {
			k = i;
			delta = temp;
		}
	}

	if ((k == 0) && (str == 'nazad' || str == 'nazad_na_neskolko')) return;

	let count_c = parseInt(document.count_of_col);//Количество колонок
	let i_n = 2;//переменная будет создавать элемент массива $_GET номер колонки
	if (str == 'vpered_na_neskolko') {
		if ((k+count_c)>=massiv_of_cols.length) {
			return;
		} else {
			i_n = massiv_of_cols[k+count_c];
			if ((i_n == 44) || (i_n == 66)) i_n=i_n+1;
		}
	}

	if (str == 'vpered') {
		if ((k+1)>=massiv_of_cols.length) {
			return;
		} else {
			i_n = massiv_of_cols[k+1];
			if ((i_n == 44) || (i_n == 66)) i_n=i_n+1;
		}
	}

	if (str == 'nazad_na_neskolko') {
		if ((k-count_c)<0) {
			i_n = massiv_of_cols[0];
		} else {
			i_n = massiv_of_cols[k-count_c];
			if ((i_n == 44) || (i_n == 66)) i_n=i_n-1;
		}
	}
	
	if (str == 'nazad') {
		if ((k-1)<0) {
			return;
		} else {
			i_n = massiv_of_cols[k-1];
			if ((i_n == 44) || (i_n == 66)) i_n=i_n-1;
		}
	}

	window.location = 'index.php?n='+i_n+'&position='+get_position(withOutNavigaciya);
}

function col_count_submit(c_c) {
	window.location = 'index.php?&count_of_col='+c_c+'&position=1';
}

function get_position(withOutNavigaciya) {
	//Сохраняем позицию прокрученности страницы
	let position = 1;
	if (navigaciya_vpered.style.display == 'block') {
		let coor_n_v = navigaciya_vpered.getBoundingClientRect();
		for (let i = 1;i<50;i++) {
			let el_temp = document.getElementById('row_1_'+i);
			if (el_temp) {
				let coor_el = el_temp.getBoundingClientRect();
				if ( (coor_n_v.top >= coor_el.top) && (coor_n_v.top <= coor_el.bottom) ) position = i;
			}
		}
	} 
	if (navigaciya_nazad.style.display == 'block') {
		let coor_n_v = navigaciya_nazad.getBoundingClientRect();
		for (let i = 1;i<50;i++) {
			let el_temp = document.getElementById('row_1_'+i);
			if (el_temp) {
				let coor_el = el_temp.getBoundingClientRect();
				if ( (coor_n_v.top >= coor_el.top) && (coor_n_v.top <= coor_el.bottom) ) position = i;
			}
		}
	}
	if (withOutNavigaciya) {
		for (let i = 1;i<50;i++) {
			let el_temp = document.getElementById('row_1_'+i);
			if (el_temp) {
				let coor_el = el_temp.getBoundingClientRect();
				if ( coor_el.top > main_table_scroll.clientHeight) {
					position = i;
					break;
				}
			}
		}
	}

	return position;
}

document.body.addEventListener('keydown',function() {
	if (event.code == 'ArrowRight' && (event.ctrlKey || event.metaKey)) {
		menu_submit('vpered_na_neskolko',true);
	} else 	if (event.code == 'ArrowRight') {
		menu_submit('vpered',true);
	}

	if (event.code == 'ArrowLeft' && (event.ctrlKey || event.metaKey)) {
		menu_submit('nazad_na_neskolko',true);
	} else if (event.code == 'ArrowLeft') {
		menu_submit('nazad',true);
	}
});
</script>

<script type = "module">
if (parseInt(document.count_of_col) == 1) cols_1.checked = 'on';
if (parseInt(document.count_of_col) == 2) cols_2.checked = 'on';
if (parseInt(document.count_of_col) == 3) cols_3.checked = 'on';
if (parseInt(document.count_of_col) == 4) cols_4.checked = 'on';
if (parseInt(document.count_of_col) == 5) cols_5.checked = 'on';
if (document.yakor != 'false') {
	let el = document.getElementById(document.yakor);
	el.scrollIntoView({block: "center", behavior: "smooth"});
	el.style.backgroundColor = 'RGB(165,224,250)';
	document.migYak = true;
	document.f_migYak.i = 2;
	document.yak_bg_color(el,2);
}



if (window.location.hostname != 'xn----otbaba6acncfgaf9p.xn--p1ai' && window.location.hostname != 'test.xn----otbaba6acncfgaf9p.xn--p1ai' && window.location.hostname != 'istoriya-rossii.rf') {
	document.body.innerHTML = 'Загрузить страницу можно только с <a href = "http://xn----otbaba6acncfgaf9p.xn--p1ai/" target = "_self">история-россии.рф</a>'
	}
</script>