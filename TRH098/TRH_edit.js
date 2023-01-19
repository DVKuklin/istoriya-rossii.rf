//Добавляем номера столбиков в список выбора столбиков при создании ссылки на якорь
for (let i=2;i<88;i++) {
	if ( i == 44 || i == 66) continue;
	let el = document.createElement('option');
	el.value = i;
	el.innerHTML = i;
	document.getElementById('select_sYakor_col').append(el);
}

//Возможность редактировать элементы
//Добавляем номера столбиков в список выбора столбиков при создании ссылки на якорь
for (let i=2;i<88;i++) {
	if ( i == 44 || i == 66) continue;
	let el = document.createElement('option');
	el.value = i;
	el.innerHTML = i;
	document.getElementById('select_sYakor_col_for_edit').append(el);
}

let editingEl = [];//Массив элементов, которые надо будет редактировать

function creatEditingEl() {
	let ims = document.getElementsByClassName('sImage');
	let yaks = document.getElementsByClassName('Yakor');
	let sYaks = document.getElementsByClassName('sYak');
	let k = 0;
	for (let i = 0;i<ims.length;i++) {
		editingEl[k++] = ims[i];
	}
	for (let i = 0;i<yaks.length;i++) {
		editingEl[k++] = yaks[i];
	}
	for (let i = 0;i<sYaks.length;i++) {
		editingEl[k++] = sYaks[i];
	}
}

window.onload = editingElAddEvent;

function editingElAddEvent() {
	creatEditingEl();
	for (let i = 0;i<editingEl.length;i++) {
		editingEl[i].addEventListener('mouseover',function() {
			window_about_edit.style.display = 'block';
			let coor = editingEl[i].getBoundingClientRect();
			window_about_edit.style.top = coor.y + coor.height + 10 + window.pageYOffset + 'px';
			window_about_edit.style.left = event.clientX + window.pageXOffset + 'px';
			editingEl[i].foc = true;
			window_about_edit.style.zIndex = zIndex + 100;
		});
		editingEl[i].addEventListener('mouseout',function() {
			window_about_edit.style.display = 'none';
			editingEl[i].foc = false;
		});
	}	
	document.body.addEventListener('keydown',function() {
		if (event.code == 'KeyQ' && (event.ctrlKey || event.metaKey)) {
			for (let i = 0;i<editingEl.length;i++) {
				if (editingEl[i].foc) {
					editingEl[i].foc = false;
					editingEl[i].editing = 'true';
					let coor = editingEl[i].getBoundingClientRect();
					if (editingEl[i].className == 'sImage') {
						editImageHref.value = editingEl[i].getAttribute('href');
						editImageCaption.value = editingEl[i].getAttribute('data-caption');
						window_for_edit_image.style.top = coor.y + window.pageYOffset + 'px';
						window_for_edit_image.style.left = coor.x + window.pageXOffset + 'px';
						window_for_edit_image.style.display = 'block';
						window_for_edit_image.style.zIndex = zIndex + 100;
					}
					if (editingEl[i].className == 'sYak') {
						//Заполняем поля окна для редактирования
						let s = editingEl[i].getAttribute('onclick');
						let z_1 = s.indexOf(',');
						let z_2 = s.indexOf(',',z_1+1);
						let yakName = s.slice(9,z_1-1);
						let col = s.slice(z_1+1,z_2);
						let punkt = s.slice(z_2+1,s.length-1);
						editNameSYak.value = yakName;
						for (let i = 0;i<select_sYakor_col_for_edit.options.length;i++) {
							if (select_sYakor_col_for_edit.options[i].value == col) {
								select_sYakor_col_for_edit.options[i].selected = true;
								break;
							}
						}
						for (let i = 0;i<select_sYakor_punkt_for_edit.options.length;i++) {
							if (select_sYakor_punkt_for_edit.options[i].value == punkt) {
								select_sYakor_punkt_for_edit.options[i].selected = true;
								break;
							}
						}
						window_for_edit_sYak.style.top = coor.y + window.pageYOffset + 'px';
						window_for_edit_sYak.style.left = coor.x + window.pageXOffset + 'px';
						window_for_edit_sYak.style.display = 'block';					
					}
					if (editingEl[i].className == 'Yakor') {
						editNameYak.value = editingEl[i].id;
						window_for_edit_yak.style.top = coor.y + window.pageYOffset + 'px';
						window_for_edit_yak.style.left = coor.x + window.pageXOffset + 'px';
						window_for_edit_yak.style.display = 'block';						
					}
					break;
				}	
			}
		}
	});
}

function editYak() {
	for (let i = 0;i<editingEl.length;i++) {
		if (editingEl[i].editing == 'true') {
			editingEl[i].setAttribute('id',editNameYak.value);
			let td = getTD(editingEl[i]);
			let s_temp = '';
			let b = false;
			for (let i = 4;i<td.id.length;i++) {
				if (b) s_temp = s_temp + td.id[i];
				if (td.id[i] == '_') b = true;
			}
			s_temp = s_temp*1-1;
			cks[s_temp].setData(td.innerHTML);
			window_for_edit_yak.style.display = 'none';
			editingEl[i].editing = false;
			//Перезаписываем собитие для показа сообщения для редактирования элементами
			setTimeout(editingElAddEvent,2000);  
			return;
		} 
	}
}


function editSYak() {
	for (let i = 0;i<editingEl.length;i++) {
		if (editingEl[i].editing == 'true') {
			let col = select_sYakor_col_for_edit.options[select_sYakor_col_for_edit.options.selectedIndex].value;
			let punkt = select_sYakor_punkt_for_edit.options[select_sYakor_punkt_for_edit.options.selectedIndex].value;
			editingEl[i].setAttribute('onclick',"goToYak('"+editNameSYak.value+"',"+col+","+punkt+")");
			let td = getTD(editingEl[i]);
			let s_temp = '';
			let b = false;
			for (let i = 4;i<td.id.length;i++) {
				if (b) s_temp = s_temp + td.id[i];
				if (td.id[i] == '_') b = true;
			}
			s_temp = s_temp*1-1;
			cks[s_temp].setData(td.innerHTML);
			window_for_edit_sYak.style.display = 'none';
			editingEl[i].editing = false;
			//Перезаписываем собитие для показа сообщения для редактирования элементами
			setTimeout(editingElAddEvent,2000);  
			return;
		} 
	}
}

function editImage() {
	for (let i = 0;i<editingEl.length;i++) {
		if (editingEl[i].editing == 'true') {
			editingEl[i].setAttribute('href',editImageHref.value);
			editingEl[i].setAttribute('data-caption',editImageCaption.value);
			
			let td = getTD(editingEl[i]);
			if (!td.hasAttribute('data-type')) {
				let s_temp = '';
				let b = false;
				for (let i = 4;i<td.id.length;i++) {
					if (b) s_temp = s_temp + td.id[i];
					if (td.id[i] == '_') b = true;
				}
				s_temp = s_temp*1-1;
				cks[s_temp].setData(td.innerHTML);
			} else {
				  let cke;
				  for (let i = 0;i<ck_koms.length;i++) {
					  if (ck_koms[i].ckId == td.getAttribute('data-id')) {
						cke = ck_koms[i];
						break;
					  }
				  }
				  cke.setData(td.innerHTML);
			}
			window_for_edit_image.style.display = 'none';
			editingEl[i].editing = false;
			//Перезаписываем собитие для показа сообщения для редактирования элементами
			setTimeout(editingElAddEvent,2000);  
			return;
		} 
	}
}

function exitFromWindowForEdit() {
	for (let i = 0;i<editingEl.length;i++) {
		if (editingEl[i].editing == 'true') {
			editingEl[i].editing = false;
		}
	}
	window_for_edit_image.style.display = 'none';
	window_for_edit_sYak.style.display = 'none';
	window_for_edit_yak.style.display = 'none';
}

function getTD(el) {
	if (el.tagName == 'TD') {
		return el;
	} else if (el.hasAttribute('data-type')) {
		return el;
	} else {
		return getTD(el.parentNode)
	}
}


//Конец кода возможность редактировать элементы

//Убираем заголовок скроллинг и делаем таблицу на всю страницу
main_table_scroll.style.display = "none";
main_table.width = "100%";
main_table.style.tableLayout = 'auto';

//Убираем выравнивание колонок
let el_col = main_table.getElementsByTagName('col');
for (let i = 0;i<el_col.length;i++) {
	el_col[i].width = '';
}

//Подключаем к ckeditor свои стили
CKEDITOR.config.contentsCss = '../../TRH_for_edit.css';

//Находим все рабочие ячейки
var rab_yachs = document.getElementsByClassName('rab_yach');

//Удаляем символ конца строки из ячеек таблицы
for (let i = 0;i<rab_yachs.length;i=i+4) {
	rab_yachs[i].innerHTML = rab_yachs[i].innerHTML.slice(0,rab_yachs[i].innerHTML.length-1);
}

//вставляем text area
var cks = [];//ck эдиторы
for (let i = 0;i<rab_yachs.length;i=i+4) {
	rab_yachs[i+2].innerHTML = '<textarea form = "TRH_main_form" name = "ck'+i/4+'" id = "ck'+(i/4)+'">'+rab_yachs[i].innerHTML+'</textarea>';
	
	rab_yachs[i+3].innerHTML = '<textarea name = "ta" id = "ta'+(i/4)+'">'+rab_yachs[i].innerHTML+'</textarea>';
	cks[i/4] = CKEDITOR.replace('ck'+(i/4));
}

//находим все та
var tas = document.getElementsByName('ta');

//Настраиваем ширину столбца с ckeditorom
document.getElementById('row_98_1').width = '40%';

//Передача данных из ckeditors в другие ячейки при изменении данных
for (let i = 0;i<cks.length;i++) {
  cks[i].on('change',
  function() {
     tas[i].value = cks[i].getData();
     rab_yachs[i*4].innerHTML = cks[i].getData();
	 setTimeout(editingElAddEvent,2000);
  });
}

//Передача данных из ta при изменении данных
for (let i = 0;i<cks.length;i++) {
  tas[i].onchange = function() {
	 cks[i].setData(tas[i].value); 
  }
}

//Удаление <p> из текста при копировании
for (let i = 0;i<cks.length;i++) {
  cks[i].on('afterPaste',
  function() {
   let str = cks[i].getData();
   let p,s1,s2;

//Удаляем <p>
   p = str.indexOf('<p>');
   do {
   if (p!=-1) {
   s1 = str.slice(0,p);
   s2 = str.slice(p+3,str.length);
   str = s1+s2;}
   p = str.indexOf('<p>');
  } while (p!=-1);
   
//Удаляем </p> и вставляем <br>   
   p = str.indexOf('</p>');
   do {
   if (p!=-1) {
   s1 = str.slice(0,p);
   s2 = str.slice(p+4,str.length);
   str = s1+'<br>'+s2;}
   p = str.indexOf('</p>');
   } while (p!=-1);

   cks[i].setData(str);
});
}

//Следующий блок кода отвечает за организацию интерфейса вставки картинок, комментариев, выделения красным дат,ссылок на якоря (будет сделано позже) 

var sel;//Объект содержит в себе координаты выделения
var range;//Объект для работы с выделленными элементами
var yach_dlya_videleniya;//Ячейка для выделения

//Назначаем обработчик события onmouseup для рабочих ячеек
for (let i = 0;i<cks.length;i++) {
  rab_yachs[i*4].setAttribute('onmouseup','surroundContents('+i*4+')');
}

function surroundContents(num_rab_yach){//Функция запускается после выделения текста
  yach_dlya_videleniya = num_rab_yach;
  sel = document.getSelection();//Объект содержит в себе координаты выделения
  range = new Range();//Объект для работы с выделленными элементами
  range.setStart(sel.anchorNode, sel.anchorOffset);//Начало выделения
  range.setEnd(sel.focusNode, sel.focusOffset);//Конец выделения

//Если ничего не выделено, то выходим
  if (range.collapsed) return;


//Показываем окно для выбора того что вставить
  if (promt.style.display == 'block') return;
  promt.style.display = 'block';
  promt.style.left = event.pageX + 'px';
  promt.style.top = event.pageY + 'px';

//Формируем имя комментария
  let s_T_kom = '';
  if (document.num_of_col<10)
	  s_T_kom = 'kom'+'0'+document.num_of_col
    else 
	  s_T_kom = 'kom'+document.num_of_col;
  if ((yach_dlya_videleniya/4+1)<10) 
	  s_T_kom = s_T_kom+'_0'+(yach_dlya_videleniya/4+1)
    else 
	  s_T_kom = s_T_kom +'_'+ (yach_dlya_videleniya/4+1);
  let sKoms_inRabYach = [];//все ссылки на комментарии в ячейке
  sKoms_inRabYach = rab_yachs[yach_dlya_videleniya].getElementsByClassName('skom');
  if (sKoms_inRabYach.length<10) 
	  s_T_kom = s_T_kom+'_0'+(sKoms_inRabYach.length+1)
    else 
	  s_T_kom = s_T_kom +'_'+ (sKoms_inRabYach.length+1);
  input_kom.value = s_T_kom;
}

function vstavka() {//функция запускается при нажатии на ок модального окна
  promt.style.display = 'none';

  if (rad_date.checked) {
//Создаем элемнт для обертки выделенного
  let newNode = document.createElement('span');
  newNode.setAttribute('class','date');
  range.surroundContents(newNode);//обертываем выделенный текст
//Обновляем данные в других едиторах
  cks[yach_dlya_videleniya/4].setData(rab_yachs[yach_dlya_videleniya].innerHTML);
}

if (rad_im.checked) {
//Создаем элемнт для обертки выделенного
  let newNode = document.createElement('a');
  newNode.setAttribute('class','sImage');  
  newNode.setAttribute('target','_blank');
  newNode.setAttribute('data-caption',input_im_caption.value);
  newNode.setAttribute('href',input_im.value);
  newNode.setAttribute('style','background-color:RGB(192,192,192);');
  range.surroundContents(newNode);//обертываем выделенный текст
//Обновляем данные в других едиторах
  cks[yach_dlya_videleniya/4].setData(rab_yachs[yach_dlya_videleniya].innerHTML);
}

if (rad_kom.checked) {
//Создаем элемнт для обертки выделенного
  let newNode = document.createElement('span');
  newNode.className = 'skom';
  newNode.setAttribute('onclick',"showKom('"+input_kom.value+"');");
  range.surroundContents(newNode);//обертываем выделенный текст
//Устанавливаем title
  setTitle_inSkoms();
//Проверяем существует ли комментарий с таким имененем
  let komExist = false;//Комментарий не существует
  let okkoms = document.getElementsByClassName('okkom');
  for (let i = 0;i<okkoms.length;i++) {
     if (okkoms[i].id == input_kom.value) {
		  //alert('Комментарий '+input_kom.value+' существует');
		  komExist = true;
		}
  }
//Если комментария с таким именем несуществует, создаем сам комменнтарий
  if (!komExist) {
  let num_kom = koms.length;
  let sKomTemp = '<div id = "'+input_kom.value+'" title = "'+input_kom.value+'" class = "okkom">'+
                 '<div class = "zakr"><span onclick = "'+input_kom.value+'.style.display = '+"'none'"+';" style = "cursor:pointer;">X</span></div>'+
                 '<div class = "kom">'+
				 '<textarea form = "TRH_main_form" id = "ck_kom'+num_kom+'"></textarea>'+
                 '</div>'+
                 '</div>';
  let div = document.createElement('div');
  div.setAttribute('name','obertka_dla_kom');
  div.innerHTML = sKomTemp;
  document.body.append(div);
//Добавляем в него ckeditor  
  ck_koms[num_kom] = CKEDITOR.replace('ck_kom'+num_kom);
  ck_koms[num_kom].ckId = input_kom.value;
//Делаем так, что бы при копировании удалялись <p>
  ck_koms[num_kom].on('afterPaste',
  function() {
   let str = ck_koms[num_kom].getData();
   let p,s1,s2;

//Удаляем <p>
   p = str.indexOf('<p>');
   do {
   if (p!=-1) {
   s1 = str.slice(0,p);
   s2 = str.slice(p+3,str.length);
   str = s1+s2;}
   p = str.indexOf('<p>');
  } while (p!=-1);
   
//Удаляем </p> и вставляем <br>   
   p = str.indexOf('</p>');
   do {
   if (p!=-1) {
   s1 = str.slice(0,p);
   s2 = str.slice(p+4,str.length);
   str = s1+'<br>'+s2;}
   p = str.indexOf('</p>');
   } while (p!=-1);

   ck_koms[num_kom].setData(str);
});

  }

//Обновляем данные в других едиторах
  cks[yach_dlya_videleniya/4].setData(rab_yachs[yach_dlya_videleniya].innerHTML);
}

 if (rad_gray.checked) {
//Создаем элемнт для обертки выделенного
  let newNode = document.createElement('span');
  newNode.setAttribute('class','gray');
  range.surroundContents(newNode);//обертываем выделенный текст
//Обновляем данные в других едиторах
  cks[yach_dlya_videleniya/4].setData(rab_yachs[yach_dlya_videleniya].innerHTML);
}

if (rad_sYakor.checked) {
  let col = select_sYakor_col.options[select_sYakor_col.options.selectedIndex].value;
  let punkt = select_sYakor_punkt.options[select_sYakor_punkt.options.selectedIndex].value;
//Создаем элемнт для обертки выделенного
  let newNode = document.createElement('span');
  newNode.setAttribute('class','sYak');
  newNode.setAttribute('onclick',"goToYak('"+input_sYakor.value+"',"+col+","+punkt+")");
  range.surroundContents(newNode);//обертываем выделенный текст
//Обновляем данные в других едиторах
  cks[yach_dlya_videleniya/4].setData(rab_yachs[yach_dlya_videleniya].innerHTML);
}

if (rad_Yakor.checked) {
//Создаем элемнт для обертки выделенного
  let newNode = document.createElement('span');
  newNode.setAttribute('id',input_Yakor.value);
  newNode.setAttribute('class','Yakor');
  range.surroundContents(newNode);//обертываем выделенный текст
//Обновляем данные в других едиторах
  cks[yach_dlya_videleniya/4].setData(rab_yachs[yach_dlya_videleniya].innerHTML);
}

//Перезаписываем собитие для показа сообщения для редактирования элементами
  setTimeout(editingElAddEvent,2000);  
}

//Следующий блок кода добавляет в комментарии ckeditorы
var koms = [];//Все комментарии
var ck_koms = [];//все ck editorы в комментариях
koms = document.getElementsByClassName('kom');
for (let i = 0;i<koms.length;i++) {
	koms[i].innerHTML = '<textarea form = "TRH_main_form" id = "ck_kom'+i+'">'+koms[i].innerHTML+'</textarea>';
	ck_koms[i] = CKEDITOR.replace('ck_kom'+i);
	ck_koms[i].ckId = getOkKomEl(koms[i]).id;
}

function getOkKomEl(el) {
	if (el.parentElement.getAttribute('class') == 'okkom') {
		return el.parentElement;
	} else {
		getOkKomEl(el.parentElement);
	}
}

//Устанавливаем title (имя комментария) в комментариях
let okkoms = document.getElementsByClassName('okkom');
for (let i = 0;i<okkoms.length;i++) {
	okkoms[i].setAttribute('title',okkoms[i].id);
}

//Функция установки title у ссылок на комментарии
function setTitle_inSkoms() {
	let skoms = document.getElementsByClassName('skom');
    for (let i = 0;i<skoms.length;i++) {
		let s_title = '';
		let s_onclick = ''+skoms[i]['onclick'];
		for (let n = 35;n<46;n++) s_title = s_title+s_onclick[n];
		skoms[i].setAttribute('title',s_title);
	}
	for (let i = 0;i<cks.length;i++) {
		cks[i].setData(rab_yachs[i*4].innerHTML);
	}
	
}
setTitle_inSkoms();



//Удаление <p> при копировании в комментариях
for (let i = 0;i<ck_koms.length;i++) {
  ck_koms[i].on('afterPaste',
  function() {
   let str = ck_koms[i].getData();
   let p,s1,s2;

//Удаляем <p>
   p = str.indexOf('<p>');
   do {
   if (p!=-1) {
   s1 = str.slice(0,p);
   s2 = str.slice(p+3,str.length);
   str = s1+s2;}
   p = str.indexOf('<p>');
  } while (p!=-1);
   
//Удаляем </p> и вставляем <br>   
   p = str.indexOf('</p>');
   do {
   if (p!=-1) {
   s1 = str.slice(0,p);
   s2 = str.slice(p+4,str.length);
   str = s1+'<br>'+s2;}
   p = str.indexOf('</p>');
   } while (p!=-1);

   ck_koms[i].setData(str);
});
}

//Отправка данных на сервер
function TRH_main_form_onsubmit(){
//Закрываем все комментарии
	let el_temp = document.getElementsByClassName('okkom');
	for (let i = 0;i<el_temp.length;i++) {
		el_temp[i].style.display = 'none';
	}

//Удаляем все title
  let okkoms = document.getElementsByClassName('okkom');
  for (let i = 0;i<okkoms.length;i++) {
    	okkoms[i].setAttribute('title','');
  }	

  let skoms = document.getElementsByClassName('skom');
  for (let i = 0;i<skoms.length;i++) {
	skoms[i].removeAttribute('title'); 
  }	
	for (let i = 0;i<cks.length;i++) {
		cks[i].setData(rab_yachs[i*4].innerHTML);
	}


//Удаляем из комментарие ckeditorы
    let koms = document.getElementsByClassName('kom');
    for (let i = 0;i<koms.length;i++) {
		let s_T = ck_koms[i].getData();
		koms[i].innerHTML = s_T;
	}    
//Создаем textarea с комментариями
    let TAkoms = document.getElementsByName('obertka_dla_kom');
    let i;
    for (i = 0;i<TAkoms.length;i++) {
        let s_T =  TAkoms[i].innerHTML;
		TAkoms[i].innerHTML = '<textarea form = "TRH_main_form" name = "kom'+i+'" id = "idkom'+i+'">'+s_T+'</textarea>';
    }
//Создаем textarea с номером столбца
    let num_of_col = document.createElement('textarea');
	num_of_col.setAttribute('form','TRH_main_form');
	num_of_col.value = document.num_of_col;
	i = i+1;
	num_of_col.setAttribute('name','kom'+i);
    document.body.append(num_of_col);
	
//Создаем textarea с позицией прокрутки страницы
    let poz = document.createElement('textarea');
	poz.setAttribute('form','TRH_main_form');
	poz.value = window.pageYOffset;
	i = i+1;
	poz.setAttribute('name','kom'+i);
    document.body.append(poz);
	

}


//Показ и редактирование комментариев
var zIndex = 100;
function showKom(str) {
  let obKom = document.getElementById(str);
  
  let komContent = document.createElement('div');
  komContent.setAttribute('data-id',str);
  komContent.setAttribute('data-type','editKomIm');
  komContent.style.position = 'absolute';
  komContent.style.border = 'solid black 1px';
  komContent.style.backgroundColor = 'yellow';
  document.body.append(komContent);
  
  if (obKom.style.display == 'block') return;
  obKom.style.display = 'block';
  obKom.style.zIndex = zIndex++;
  komContent.style.zIndex = zIndex++;
  let x = document.documentElement.clientWidth - obKom.offsetWidth
  if (event.pageX > x) {
     obKom.style.left = x + 'px';
	 komContent.style.left = x + 'px';
    }
	else {
     obKom.style.left = event.pageX + 'px';
	 komContent.style.left = event.pageX + 'px';
	}
  obKom.style.top = event.pageY + 'px';
  komContent.style.top = event.pageY + obKom.clientHeight + 1 + 'px';
  
  let cke;
  for (let i = 0;i<ck_koms.length;i++) {
	  if (ck_koms[i].ckId == str) {
		cke = ck_koms[i];
		break;
	  }
  }
  
  komContent.innerHTML = cke.getData();
  komContent.style.width = obKom.clientWidth + 'px';
  //Перезаписываем собитие для показа сообщения для редактирования элементами
  setTimeout(editingElAddEvent,2000);  
  
  cke.on('change',function() {
     komContent.innerHTML = cke.getData();
	 setTimeout(editingElAddEvent,2000);
  });
  
  let range;
  komContent.addEventListener('mouseup',function() {
	  if (komPromt.style.display == 'block') return;
	  let sel = document.getSelection();//Объект содержит в себе координаты выделения
	  range = new Range();//Объект для работы с выделленными элементами
	  range.setStart(sel.anchorNode, sel.anchorOffset);//Начало выделения
	  range.setEnd(sel.focusNode, sel.focusOffset);//Конец выделения
	  //Если ничего не выделено, то выходим
	  if (range.collapsed) return;
	  komPromt.style.display = 'block';
      komPromt.style.left = event.pageX + 'px';
      komPromt.style.top = event.pageY + 'px';
	  komPromt.style.zIndex = zIndex+1;	  
  });
  
  komImOk.addEventListener('click',function() {
	  let newNode = document.createElement('a');
	  newNode.setAttribute('class','sImage');  
	  newNode.setAttribute('target','_blank');
	  newNode.setAttribute('data-caption',komImCaption.value);
	  newNode.setAttribute('href',komImRote.value);
	  newNode.setAttribute('style','background-color:RGB(192,192,192);');
	  range.surroundContents(newNode);//обертываем выделенный текст
	  cke.setData(komContent.innerHTML);
	  komPromt.style.display = 'none';
	  //Перезаписываем собитие для показа сообщения для редактирования элементами
      setTimeout(editingElAddEvent,2000);  
  });
  
  //Устанавливаем закрытие
  let elTemp = obKom.getElementsByClassName('zakr');
  elTemp = elTemp[0].getElementsByTagName('SPAN');
  elTemp[0].addEventListener('click',function() {komContent.remove();});
}

//что бы по ctr+s происходило сохранение
document.addEventListener('keydown',function() {
	if (event.keyCode == 83 && (event.ctrlKey || event.metaKey)) {
		event.preventDefault();
		TRH_main_form_onsubmit();
		TRH_main_form.submit();
	}	
});
