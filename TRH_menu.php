<center>
<div id = "konteyner_dlya_knopok">
	<div class="conFor-menuMainBtn-Apply">
		<div id="menuMainBtn-Apply" onclick = "menu_period_pravitel_submit();" class = "menuMainBtn">
			Применить
		</div>
	</div>
	<div>
		<img  class = "" onclick = "window.location = 'index.php?n='+parseInt(document.number_of_col)+'&position=1;'"
	src="TRH/buttonExitMenu.svg" id="menuMainBtn-Exit" >
	</div>
</div>
</center>

<center>
<div id="conForTableOfMenu">
	<div class="childOfConForTableOfMenu">
		<table id="tableMenuPravitely">
		<tr>
		<td colspan = "2" align = "right">Выбрать/отменить всё</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_all_1"></td>
		</tr>
		<tr>
		<td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col2']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_2" onclick = "menu_period_pravitel_submit(this)">'?>
		Восточные славяне ~V в. до н.э.
		<?php if ($TRH_user['col2']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_2"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "9">
		﻿Киевская Русь
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col3']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_3" onclick = "menu_period_pravitel_submit(this)">'?>
		Рюрик (862-879)
		<?php if ($TRH_user['col3']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_3"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col4']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_4" onclick = "menu_period_pravitel_submit(this)">'?>
		Олег Вещий (879-912)
		<?php if ($TRH_user['col4']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_4"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col5']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_5" onclick = "menu_period_pravitel_submit(this)">'?>
		Игорь (Старый) (912-945)
		<?php if ($TRH_user['col5']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_5"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col6']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_6" onclick = "menu_period_pravitel_submit(this)">'?>
		Ольга (945-964)
		<?php if ($TRH_user['col6']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_6"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col7']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_7" onclick = "menu_period_pravitel_submit(this)">'?>
		Святослав Игоревич (964-972)
		<?php if ($TRH_user['col7']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_7"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col8']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_8" onclick = "menu_period_pravitel_submit(this)">'?>
		Владимир Святославович<br> (Красно солнышко, Святой, креститель) (980-1015)
		<?php if ($TRH_user['col8']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_8"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col9']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_9" onclick = "menu_period_pravitel_submit(this)">'?>
		Ярослав Мудрый (1019-1054)
		<?php if ($TRH_user['col9']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_9"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col10']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_10" onclick = "menu_period_pravitel_submit(this)">'?>
		Ярославичи (1054-1093)
		<?php if ($TRH_user['col10']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_10"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col11']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_11" onclick = "menu_period_pravitel_submit(this)">'?>
		Святополк Изяславич (1093-1113)
		<?php if ($TRH_user['col11']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_11"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "2">
		﻿Киевская Русь - Период последнего усиления
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col12']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_12" onclick = "menu_period_pravitel_submit(this)">'?>
		Владимир Мономах (1113-1125)
		<?php if ($TRH_user['col12']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_12"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col13']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_13" onclick = "menu_period_pravitel_submit(this)">'?>
		Мстислав Великий (1125-1132)
		<?php if ($TRH_user['col13']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_13"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col14']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_14" onclick = "menu_period_pravitel_submit(this)">'?>
		Удельная Русь до монголов
		<?php if ($TRH_user['col14']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_14"></td>
		</tr>

		<!---------------------------------------->
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col15']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_15" onclick = "menu_period_pravitel_submit(this)">'?>
		Удельная Русь до монголов. Владимиро-Суздальское княжество
		<?php if ($TRH_user['col15']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_15"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "4">
		Удельная Русь до монголов.<br>Владимиро-Суздальское кн.
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col16']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_16" onclick = "menu_period_pravitel_submit(this)">'?>
		Юрий Долгорукий (1125-1157)
		<?php if ($TRH_user['col16']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_16"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col17']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_17" onclick = "menu_period_pravitel_submit(this)">'?>
		Андрей Боголюбский (1157-1174)
		<?php if ($TRH_user['col17']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_17"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col18']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_18" onclick = "menu_period_pravitel_submit(this)">'?>
		Всеволод Большое гнездо (1176-1212)
		<?php if ($TRH_user['col18']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_18"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col19']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_19" onclick = "menu_period_pravitel_submit(this)">'?>
		Юрий Всеволодович (1212-1216, 1218-1238)
		<?php if ($TRH_user['col19']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_19"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col20']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_20" onclick = "menu_period_pravitel_submit(this)">'?>
		Удельная Русь до монголов. Новгородское княжество
		<?php if ($TRH_user['col20']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_20"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col21']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_21" onclick = "menu_period_pravitel_submit(this)">'?>
		Удельная Русь до монголов. Галицко-Волынское княжество
		<?php if ($TRH_user['col21']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_21"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "2">
		Удельная Русь до монголов.<br>Галицко-Волынское княжество
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col22']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_22" onclick = "menu_period_pravitel_submit(this)">'?>
		Роман Мстиславич (1199-1205)
		<?php if ($TRH_user['col22']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_22"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col23']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_23" onclick = "menu_period_pravitel_submit(this)">'?>
		Даниил Романович (Галицкий) (1205-1264)
		<?php if ($TRH_user['col23']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_23"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "2">
		Татаро-монгольское иго. Империя Чингисхана
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col24']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_24" onclick = "menu_period_pravitel_submit(this)">'?>
		Чингисхан (1162-1227)
		<?php if ($TRH_user['col24']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_24"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col25']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_25" onclick = "menu_period_pravitel_submit(this)">'?>
		Нашествие Батыя на Русь (1237-1241)
		<?php if ($TRH_user['col25']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_25"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col26']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_26" onclick = "menu_period_pravitel_submit(this)">'?>
		Татаро-монгольское иго - <br>Золотая Орда и Северо-восточная Русь
		<?php if ($TRH_user['col26']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_26"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "2">
		Татаро-монгольское иго - <br>Золотая Орда и Северо-Восточная Русь
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col27']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_27" onclick = "menu_period_pravitel_submit(this)">'?>
		Ярослав II Всеволодович (1238-1246)
		<?php if ($TRH_user['col27']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_27"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col28']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_28" onclick = "menu_period_pravitel_submit(this)">'?>
		Александр Невский
		<?php if ($TRH_user['col28']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_28"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col29']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_29" onclick = "menu_period_pravitel_submit(this)">'?>
		Татаро-монгольское иго - <br>Возвышение Москвы
		<?php if ($TRH_user['col29']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_29"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "8">
		Татаро-монгольское иго - <br>Возвышение Москвы
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col30']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_30" onclick = "menu_period_pravitel_submit(this)">'?>
		Даниил Александрович (1276-1303)
		<?php if ($TRH_user['col30']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_30"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col31']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_31" onclick = "menu_period_pravitel_submit(this)">'?>
		Юрий Данилович (1303-1325)
		<?php if ($TRH_user['col31']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_31"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col32']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_32" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван Калита (1325-1340)
		<?php if ($TRH_user['col32']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_32"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col33']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_33" onclick = "menu_period_pravitel_submit(this)">'?>
		Семён Гордый (1340-1353)
		<?php if ($TRH_user['col33']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_33"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col34']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_34" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван Красный (1353-1359)
		<?php if ($TRH_user['col34']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_34"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col35']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_35" onclick = "menu_period_pravitel_submit(this)">'?>
		Дмитрий Донской (1359-1389)
		<?php if ($TRH_user['col35']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_35"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col36']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_36" onclick = "menu_period_pravitel_submit(this)">'?>
		Василий I (1389-1425)
		<?php if ($TRH_user['col36']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_36"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col37']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_37" onclick = "menu_period_pravitel_submit(this)">'?>
		Василий II Тёмный (1425-1462)
		<?php if ($TRH_user['col37']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_37"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col38']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_38" onclick = "menu_period_pravitel_submit(this)">'?>
		Литовское княжество
		<?php if ($TRH_user['col38']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_38"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "4">
		Формирование единого русского государства
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col39']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_39" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван III Великий (1462-1505)
		<?php if ($TRH_user['col39']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_39"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col40']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_40" onclick = "menu_period_pravitel_submit(this)">'?>
		Василий III (1505-1533)
		<?php if ($TRH_user['col40']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_40"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col41']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_41" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван IV. Грозный (1533-1538) при рег. Ел. Глинской
		<?php if ($TRH_user['col41']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_41"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col42']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_42" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван IV. Боярское правление
		<?php if ($TRH_user['col42']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_42"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "3">
		Русское царство
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col43']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_43" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван IV Грозный ((1533) 1547-1584)
		<?php if ($TRH_user['col43']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_43"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col45']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_45" onclick = "menu_period_pravitel_submit(this)">'?>
		Фёдор Иоаннович (1584-1598)
		<?php if ($TRH_user['col45']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_45"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col46']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_46" onclick = "menu_period_pravitel_submit(this)">'?>
		Борис Годунов (1598-1605)
		<?php if ($TRH_user['col46']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_46"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col47']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_47" onclick = "menu_period_pravitel_submit(this)">'?>
		﻿Русское царство. Бунташный век (ХVII) - <br>Смутное время (1604-1618)
		<?php if ($TRH_user['col47']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_47"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "3">
		Русское царство. Бунташный век (ХVII) - <br>Смутное время (1604-1618)
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col48']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_48" onclick = "menu_period_pravitel_submit(this)">'?>
		Лжедмитрий I (1605-1606)
		<?php if ($TRH_user['col48']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_48"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col49']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_49" onclick = "menu_period_pravitel_submit(this)">'?>
		Василий Шуйский (1606-1610) «Боярский царь»
		<?php if ($TRH_user['col49']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_49"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col50']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_50" onclick = "menu_period_pravitel_submit(this)">'?>
		Семибоярщина (1610-1612)
		<?php if ($TRH_user['col50']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_50"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Русское царство. Бунташный век (ХVII) - <br>Смутное время (1604-1618)<br>(Завершение). Воцарение династии  Романовых
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col51']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_51" onclick = "menu_period_pravitel_submit(this)">'?>
		Михаил Фёдорович Романов (1613-1645)
		<?php if ($TRH_user['col51']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_51"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "3">
		Русское царство - Бунташный век (ХVII)
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col52']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_52" onclick = "menu_period_pravitel_submit(this)">'?>
		Алексей Михайлович (Тишайший) (1645-1676)
		<?php if ($TRH_user['col52']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_52"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col53']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_53" onclick = "menu_period_pravitel_submit(this)">'?>
		Фёдор Алексеевич (1676-1682)
		<?php if ($TRH_user['col53']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_53"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col54']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_54" onclick = "menu_period_pravitel_submit(this)">'?>
		Пётр и Иван при регентстве Софьи (1682—1689)
		<?php if ($TRH_user['col54']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_54"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Российская империя - <br>Эпоха петровских преобразований
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col55']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_55" onclick = "menu_period_pravitel_submit(this)">'?>
		Петр I Великий (1689-1725)
		<?php if ($TRH_user['col55']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_55"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" colspan = "2">
		<?php if ($TRH_user['col56']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_56" onclick = "menu_period_pravitel_submit(this)">'?>
		Российская империя - <br>Эпоха дворцовых переворотов (1725-1762)
		<?php if ($TRH_user['col56']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_56"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "6">
		Российская империя - <br>Эпоха дворцовых переворотов (1725-1762) 
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col57']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_57" onclick = "menu_period_pravitel_submit(this)">'?>
		Екатерина I (1725-1727)
		<?php if ($TRH_user['col57']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_57"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col58']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_58" onclick = "menu_period_pravitel_submit(this)">'?>
		Пётр II (1727-1730)
		<?php if ($TRH_user['col58']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_58"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col59']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_59" onclick = "menu_period_pravitel_submit(this)">'?>
		Анна Иоанновна (1730-1740)<br> (Бироновщина)
		<?php if ($TRH_user['col59']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_59"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col60']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_60" onclick = "menu_period_pravitel_submit(this)">'?>
		Иван VI (1740-1741)
		<?php if ($TRH_user['col60']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_60"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col61']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_61" onclick = "menu_period_pravitel_submit(this)">'?>
		Елизавета Петровна (1741-1761)
		<?php if ($TRH_user['col61']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_61"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col62']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_62" onclick = "menu_period_pravitel_submit(this)">'?>
		Пётр III (1761-1762)
		<?php if ($TRH_user['col62']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_62"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Российская империя - <br>Эпоха «Просвещённого абсолютизма»
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col63']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_63" onclick = "menu_period_pravitel_submit(this)">'?>
		Екатерина II Великая (1762-1796)
		<?php if ($TRH_user['col63']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_63"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		﻿Российская империя - <br>Эпоха «Непросвещенного абсолютизма»
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col64']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_64" onclick = "menu_period_pravitel_submit(this)">'?>
		Павел I (1796-1801)
		<?php if ($TRH_user['col64']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_64"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Российская империя - <br>Время упущенных возможностей
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col65']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_65" onclick = "menu_period_pravitel_submit(this)">'?>
		Александр I (Благословенный) (1801-1825) 
		<?php if ($TRH_user['col65']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_65"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Российская империя - Апогей самодержавия
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col67']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_67" onclick = "menu_period_pravitel_submit(this)">'?>
		Николай I (Палкин:-) (1825-1855)
		<?php if ($TRH_user['col67']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_67"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Российская империя - Эпоха великих реформ
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col68']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_68" onclick = "menu_period_pravitel_submit(this)">'?>
		Александр II (Освободитель) (1855-1881)
		<?php if ($TRH_user['col68']) echo '</span>'?>
		</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_68"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		Российская империя - Эпоха контрреформ
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col69']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_69" onclick = "menu_period_pravitel_submit(this)">'?>
		Александр III (Миротворец) (1881–1894)
		<?php if ($TRH_user['col69']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_69"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "3">
		Российская империя - Закат
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col70']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_70" onclick = "menu_period_pravitel_submit(this)">'?>
		Николай II (Кровавый-Святой) (1894-1917) - <br>правление до революции 1905 г.
		<?php if ($TRH_user['col70']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_70"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col71']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_71" onclick = "menu_period_pravitel_submit(this)">'?>
		Николай II (Кровавый-Святой) (1894-1917) - <br>от революции 1905 г. до первой мировой войны
		<?php if ($TRH_user['col71']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_71"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col72']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_72" onclick = "menu_period_pravitel_submit(this)">'?>
		Николай II (Кровавый-Святой) (1894-1917) - <br>Первая мировая война до 1917 г.
		<?php if ($TRH_user['col72']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_72"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		От февраля к октябрю. 1917 год
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col73']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_73" onclick = "menu_period_pravitel_submit(this)">'?>
		Временное правительство => В.И. Ленин<br> (Вождь мирового пролетариата) <br>(Большевики) (1917-1924) 
		<?php if ($TRH_user['col73']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_73"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "2">
		РСФСР - первые годы Советской власти
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col74']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_74" onclick = "menu_period_pravitel_submit(this)">'?>
		В.И. Ленин (Вождь мирового пролетариата) (1917-1924) - <br>от Октября до Гражданской войны
		<?php if ($TRH_user['col74']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_74"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col75']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_75" onclick = "menu_period_pravitel_submit(this)">'?>
		В.И. Ленин (Вождь мирового пролетариата) (1917-1924) - <br>Гражданская война и интервенция (1918-1922)
		<?php if ($TRH_user['col75']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_75"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		СССР - 20-е годы и НЭП (1921-1929)
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col76']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_76" onclick = "menu_period_pravitel_submit(this)">'?>
		В.И. Ленин (1917-1924) => Борьба за власть (1924-1929)
		<?php if ($TRH_user['col76']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_76"></td>
		</tr>

		<!------------------------------------------>
		<tr><td class = "td_menu_period_pravitel" rowspan = "4">
		СССР - Эпоха сталинизма
		</td><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col77']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_77" onclick = "menu_period_pravitel_submit(this)">'?>
		И.В. Сталин (Отец народов) (1929-1953) - <br>Форсированная индустриализация (1929-1939)
		<?php if ($TRH_user['col77']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_77"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col78']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_78" onclick = "menu_period_pravitel_submit(this)">'?>
		И.В. Сталин (Отец народов) (1929-1953) - <br>Начало Второй мировой войны (1939-1941)
		<?php if ($TRH_user['col78']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_78"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col79']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_79" onclick = "menu_period_pravitel_submit(this)">'?>
		И.В. Сталин (Отец народов) (1929-1953) - <br>Великая Отечественная война <br>и продолжение Второй мировой 1941–1945 гг.
		<?php if ($TRH_user['col79']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_79"></td>
		</tr>

		<tr><td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col80']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_80" onclick = "menu_period_pravitel_submit(this)">'?>
		И.В. Сталин (Отец народов) (1929-1953) - <br>Восстановление страны <br>и разделение мира на два лагеря (1945-1953)
		<?php if ($TRH_user['col80']) echo '</span>'?>
		</td><td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_80"></td></tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		СССР - Оттепель
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col81']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_81" onclick = "menu_period_pravitel_submit(this)">'?>
		Н.С. Хрущёв (Кукурузник) (1953-1964)
		<?php if ($TRH_user['col81']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_81"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		СССР - Застой, эпоха развитого социализма
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col82']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_82" onclick = "menu_period_pravitel_submit(this)">'?>
		Л.И. Брежнев (1964-1982)
		<?php if ($TRH_user['col82']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_82"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		﻿СССР - Совершенствование развитого социализма
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col83']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_83" onclick = "menu_period_pravitel_submit(this)">'?>
		Ю.В. Андропов (чекист) (1982-1984)
		<?php if ($TRH_user['col83']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_83"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		СССР - Мини застой
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col84']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_84" onclick = "menu_period_pravitel_submit(this)">'?>
		К.У. Черненко (1984-1985)
		<?php if ($TRH_user['col84']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_84"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		СССР - Перестройка
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col85']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_85" onclick = "menu_period_pravitel_submit(this)">'?>
		М.С. Горбачёв (Меченый) (1985-1987)  I этап
		<?php if ($TRH_user['col85']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_85"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		СССР - Перестройка
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col86']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_86" onclick = "menu_period_pravitel_submit(this)">'?>
		М.С. Горбачёв (Меченый) (1987-1991)  II этап
		<?php if ($TRH_user['col86']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_86"></td>
		</tr>

		<!------------------------------------------>
		<tr>
		<td class = "td_menu_period_pravitel">
		﻿Российская Федерация
		</td>
		<td class = "td_menu_period_pravitel">
		<?php if ($TRH_user['col87']) echo '<span class = "vernutsya_k_tablice" id = "link_to_col_87" onclick = "menu_period_pravitel_submit(this)">'?>
		Б.Н. Ельцин (алкоголик) (1991-1999)
		<?php if ($TRH_user['col87']) echo '</span>'?>
		</td>
		<td  class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_87"></td>
		</tr>

		<tr>
		<td colspan = "2" align = "right">Выбрать/отменить всё</td>
		<td class = "td_menu_period_pravitel"><input type = "checkbox" id = "checkbox_menu_period_pravitel_all_2"></td>
		</tr>
		</table>
	</div>

	<div class="childOfConForTableOfMenu">
		<table id="tableMenuSfery" border = '3px' rules = 'all'>
		<tr>
		<td colspan = "3" class = "razdel_right" align = "right">Выбрать/отменить всё</td>
		<td class = "razdel_bottom"><input type = "checkbox" id = "checkbox_punkti_all_1"></td>
		</tr>
		<tr>
		<td id = 'row_1_3' class = 'razdel_right razdel_top' align = 'right' valign = 'center' colspan = '3'><b>Приход к власти / <br> Предпосылки, <br>Основания</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_0">
		</td>
		</tr>
		<tr>
		<td id = 'row_1_4' class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Общее описание правления / <br>пояснения, <br>дополнения</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_1">
		</td>
		</tr>
		<tr>
		<td id = 'row_1_5' class = 'razdel_right razdel_top' align = 'right' valign = 'center' colspan = '3'><b>Внешняя политика</b> <br>(дипломатич., военная) <br> и взаимоотношения
		</td>
		<td class = 'razdel_top rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_2">
		</td>
		</tr>
		<tr>
		<td id = 'row_1_6' class = 'razdel_right razdel_top' align = 'right' valign = 'center' colspan = '3'><b>Внутренняя политика</b><br>общее описание, <br> пояснения, <br>дополнения
		</td>
		<td class = 'razdel_top rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_3">
		</td>
		</tr>
		<tr>
		<td align = 'center' valign = 'center' rowspan = '7' class = 'razdel_top'><b>Э<br>к<br>о<br>н<br>о<br>м<br>и<br>к<br>а</b></td><td align = 'right' valign = 'center' colspan = '2' class = 'razdel_top razdel_right'>Общее описание<br>Экономич. политика
		</td>
		<td class = 'rab_yach_checkbox razdel_top' rowspan = "7"><input type = "checkbox" id = "checkbox_punkti_4">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Финансы/ Налоговая система
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Собственность
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>С/Х
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Производство
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Транспорт <br>Торговля<br> Экспорт/импорт
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Итоги эк. политики
		</td>
		</tr>
		<tr>
		<td class = 'razdel_top padding-y' align = 'center' valign = 'center' rowspan = '4'><b>С<br>о<br>ц<br>и<br>а<br>л<br>ь<br>н<br>а<br>я<br> <br>с<br>ф<br>е<br>р<br>а</b></td><td class = 'razdel_top razdel_right' align = 'right' valign = 'center' colspan = '2'>Общее описание<br>Социальная политика
		</td>
		<td class = 'razdel_top rab_yach_checkbox' rowspan = "4"><input type = "checkbox" id = "checkbox_punkti_5">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Социально-экономическая <br>структура общества
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Крестьянский вопрос
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Социальные процессы <br>(движения)
		</td>
		</tr>
		<tr>
		<td class = 'razdel_top razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Армия</b>
		</td>
		<td class = 'razdel_top rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_6">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_top razdel_bottom padding-y' align = 'center' valign = 'center' rowspan = '6'>
			<table class="no-border-1">
				<tr><td>&nbsp;</td>
				<td valign = 'center' align = 'center'><b>С<br>т<br>р<br>у<br>к<br>т<br>у<br>р<br>а<br> <br>в<br>л<br>а<br>с<br>т<br>и<br><br>и</b></td>
				<td>&nbsp;</td>
				<td valign = 'center' align = 'center'><b>с<br>и<br>с<br>т<br>е<br>м<br>а<br> <br>у<br>п<br>р<br>а<br>в<br>л<br>е<br>н<br>и<br>я</b></td>
				<td>&nbsp;</td>
				</tr>
			</table>
			</td><td class = 'razdel_top razdel_right' align = 'right' valign = 'center' colspan = '2'>Высшая власть
		</td>
		<td class = 'razdel_top razdel_bottom rab_yach_checkbox' rowspan = "6"><input type = "checkbox" id = "checkbox_punkti_7">
		</td>
		</tr>
		<tr>
		<td align = 'center' valign = 'center' rowspan = '4'>
			<table class="no-border-2">
				<tr><td>&nbsp;</td>
				<td valign = 'center' align = 'center'><b>В<br>е<br>т<br>в<br>и<br> <br>в<br>л<br>а<br>с<br>т<br>и</b>
				<td>&nbsp;</td>
				</tr>
			</table>
			</td><td class = 'razdel_right' align = 'right' valign = 'center'>Представительная/<br>Законодательная
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center'>Исполнительная<br> (правительство)
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center'>Судебная
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center'>(Местное)<br>Самоуправление
		</td>
		</tr>
		<td class = 'razdel_bottom razdel_right' align = 'right' valign = 'center' colspan = '2'><b>Система передачи власти</b>
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right razdel_bottom' align = 'right' valign = 'center' colspan = '3'><b>Законодательство</b><br>Список принимаемых<br> нормативнопрововых<br> актов
		</td>
		<td class = 'rab_yach_checkbox razdel_bottom'><input type = "checkbox" id = "checkbox_punkti_8">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Территориальное устройство</b><br><b>Изменение <br>территории</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_9">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right razdel_bottom' align = 'right' valign = 'center' colspan = '3'><b>Национальный вопрос</b>
		</td>
		<td class = 'rab_yach_checkbox razdel_bottom'><input type = "checkbox" id = "checkbox_punkti_10">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right razdel_bottom' align = 'right' valign = 'center' colspan = '3'><b>Политические<br>идеологии<br>процессы / движения</b>
		</td>
		<td class = 'rab_yach_checkbox razdel_bottom'><input type = "checkbox" id = "checkbox_punkti_11">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right razdel_bottom' align = 'right' valign = 'center' colspan = '3'><b>Религия/Церковь</b>
		</td>
		<td class = 'rab_yach_checkbox razdel_bottom'><input type = "checkbox" id = "checkbox_punkti_12">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right razdel_bottom' align = 'right' valign = 'center' colspan = '3'><b>Итоги периода</b>
		</td>
		<td class = 'rab_yach_checkbox razdel_bottom'><input type = "checkbox" id = "checkbox_punkti_13">
		</td>
		</tr>
		<tr>
		<td  class = 'razdel_top' align = 'center' valign = 'center' rowspan = '12'><b>К<br>у<br>л<br>ь<br>т<br>у<br>р<br>а</b></td><td  class = 'razdel_top razdel_right' align = 'right' valign = 'center' colspan = '2'>Общая характеристика/<br>Идеология
		</td>
		<td  class = 'razdel_top rab_yach_checkbox' rowspan = "12"><input type = "checkbox" id = "checkbox_punkti_14">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Образование/Просвещение
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Экспедиции
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Наука/Летописание
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Литература
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Архитектура
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Изобразительное
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Музыка
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Театр, кино
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Ремёсла /<br>ремесленное производство
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Народная
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '2'>Быт
		</td>
		</tr>
		<tr>
		<td class = 'razdel_top razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Персоналии</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_15">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Понятия</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_16">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Даты истории России</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_17">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Мировая история</b>
		</td>
		<td class = 'rab_yach'><input type = "checkbox" id = "checkbox_punkti_18">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Договоры (названия)</b>
		</td>
		<td class = 'rab_yach'><input type = "checkbox" id = "checkbox_punkti_19">
		</td>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Карты, выжные места</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_20">
		</td>
		</tr><tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Изображения</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_21">
		</td>
		</tr><tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Анализ событий</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_22">
		</td>
		</tr>
		<tr>
		<td class = 'razdel_right' align = 'right' valign = 'center' colspan = '3'><b>Дискуссионные вопросы</b>
		</td>
		<td class = 'rab_yach_checkbox'><input type = "checkbox" id = "checkbox_punkti_23">
		</td>
		</tr>
		<tr>
		<td colspan = "3" class = "razdel_right" align = "right">Выбрать/отменить всё</td>
		<td class = "razdel_bottom"><input type = "checkbox" id = "checkbox_punkti_all_2">
		</td>
		</tr>
		</table>
	</div>
</div>
</center>


<script>
//Инициализируем checkboxы punkti
for (let i = 0;i<24;i++) {
	let s = 'checkbox_punkti_'+i;
	let el = document.getElementById(s);
	if (document.punkti[i] == '1') el.checked = true;
}

//Настраиваем checkbox_punkti_all
for (let i = 1;i<3;i++) {
	let s = 'checkbox_punkti_all_'+i;
	let el = document.getElementById(s);
	el.onclick = function() {
		if (el.checked) {
			for (let j = 0;j<24;j++) document.getElementById('checkbox_punkti_'+j).checked = true;
		} else {
			for (let j = 0;j<24;j++) document.getElementById('checkbox_punkti_'+j).checked = false;
		}
	}
	
}

//Инициализируем checkboxы период правитель
for (let i = 2;i<88;i++) {
	let s = 'checkbox_menu_period_pravitel_'+i;
	let el = document.getElementById(s);
	if (el) {
		if (document.list_of_cols[i-1] == '1') el.checked = true;
	}
}

//Настраиваем checkbox_menu_period_pravitel_all
for (let i = 1;i<3;i++) {
	let s = 'checkbox_menu_period_pravitel_all_'+i;
	let el = document.getElementById(s);
	el.onclick = function() {
		if (el.checked) {
			for (let j = 2;j<88;j++) {
				let el_temp = document.getElementById('checkbox_menu_period_pravitel_'+j);
				if (el_temp) el_temp.checked = true;
			} 
		} else {
			for (let j = 2;j<88;j++) {
				let el_temp = document.getElementById('checkbox_menu_period_pravitel_'+j);
				if (el_temp) el_temp.checked = false;
			}
		}
	}
}

function menu_period_pravitel_submit(el_link_to_col) {
	if (el_link_to_col) {
		let n_link_to_col = el_link_to_col.id.slice(12,el_link_to_col.id.length);
		document.number_of_col=n_link_to_col;
		document.getElementById('checkbox_menu_period_pravitel_'+n_link_to_col).checked = true;
	}
	let list_of_cols = '1';
	for (let i = 2;i<88;i++) {
		if (i == 44 || i == 66) {
			list_of_cols = list_of_cols+'1';
			continue;
		}
		let s = 'checkbox_menu_period_pravitel_'+i;
		let el = document.getElementById(s);
		if (el.checked) {
			list_of_cols = list_of_cols + '1';
		} else {
			list_of_cols = list_of_cols + '0';
		}
	}
	
	let punkti = '';
	for (let i = 0;i<24;i++) {
		let s = 'checkbox_punkti_'+i;
		let el = document.getElementById(s);
		if (el.checked) {
			punkti = punkti + '1';
		} else {
			punkti = punkti + '0';
		}
	}
	window.location = 'index.php?n='+document.number_of_col+'&list_of_cols='+list_of_cols+'&punkti='+punkti+'&position=1';
}

konteyner_dlya_knopok.width = document.documentElement.clientWidth - 20;

window.addEventListener('scroll', function() {
	if (pageYOffset >= 80) {
		konteyner_dlya_knopok.style.position = 'fixed';
		konteyner_dlya_knopok.style.top = '0px';
		konteyner_dlya_knopok.style.width = "calc(100% - 16px)";
		//alert(konteyner_dlya_knopok.width);
	}
	if (pageYOffset<80) {
		konteyner_dlya_knopok.style.position = 'static';
		konteyner_dlya_knopok.style.width = "100%";
	} 
});

// window.addEventListener('resize',function() {
// 	konteyner_dlya_knopok.width = document.documentElement.clientWidth - 20;
// });

//Убираем навигацию и все верхние кнопки
let headerNav = document.getElementsByClassName("header-nav");
if (headerNav) {
	headerNav[0].style.display = 'none';
}

let headerMenu = document.getElementsByClassName("header-menu");
if (headerMenu) {
	headerMenu[0].style.display = 'none';
}
//Вставляем новые кнопки
let header = document.getElementsByClassName('header');
console.log(header[0]);
console.log(konteyner_dlya_knopok);
header[0].innerHTML += konteyner_dlya_knopok.innerHTML;
konteyner_dlya_knopok.innerHTML = '';

//Поведение кнопки выхода
let menuExit = document.getElementById('menuMainBtn-Exit');
menuExit.onmouseenter=function() {
	menuExit.src="TRH/buttonExitMenu_hover.svg";	
}
menuExit.onmouseleave=function() {
	console.log('onmouseleave');
	menuExit.src="TRH/buttonExitMenu.svg";
}

//Прикрепляем кнопки при прокрутке
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
	//Если на мобильном, то увеличиваем размер страницы, что бы все выглядело примерно как на главной
	let html = document.querySelectorAll('html');
	html[0].style.width=460+'px';

} else {
	window.addEventListener('scroll', function() {
		if (pageYOffset>0) {
			let headerForSticky = document.querySelectorAll('.header');
			headerForSticky[0].style.position="fixed";
			headerForSticky[0].style.width="calc(100% - 16px)";
			TRH_logo.src="TRH/TRH_logo_placeholder.svg";
			TRH_logo.style.boxShadow = "none";
			logo_text.style.display="none";
		} else {
			let headerForSticky = document.querySelectorAll('.header');
			headerForSticky[0].style.position="static";
			headerForSticky[0].style.width="";
			TRH_logo.src="TRH/TRH_logo.svg";
			TRH_logo.style.boxShadow = "4px 4px 8px rgba(0, 0, 0, 0.6)";
			logo_text.style.display="inline";
		}
	});
}
</script>