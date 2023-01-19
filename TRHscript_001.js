//Меняем цвет букв в .skom если он внутри .gray
let elsGray = document.getElementsByClassName('gray');
if (elsGray.lenght != 0) {
	for (let i=0;i<elsGray.length;i++) {
		let elsSkom = elsGray[i].getElementsByClassName('skom');
		if (elsSkom.lenght != 0) {
			for (let j=0;j<elsSkom.length;j++) {
				elsSkom[j].style.color = 'white';
				elsSkom[j].style.paddingLeft = '1px';
				elsSkom[j].style.paddingRight = '1px';
			}
		}
	}
}

//Функция настраивает ширину колонок таблицы и положение строки для скроллинга
function nastroyka() {
	//Настраиваем ширину колонок
	let win_width = document.documentElement.clientWidth-50;
	let col_scroll = main_table_scroll.getElementsByTagName('col');
	let col = main_table.getElementsByTagName('col');
	let width = Math.round((win_width - col[0].width - col[1].width -col[2].width) / (col.length -3));
	if (width <170) width = 170;
	let table_width = 230+width*(col.length-3);
	main_table.width = table_width;
	for (let i = 3;i<col.length;i++) {
		col_scroll[i].width = width;
		col[i].width = width;
	}
	//Настраиваем положение строки для скроллинга
	main_table_scroll.width = main_table.clientWidth +'px';
	let main_table_coor = main_table.getBoundingClientRect();
	main_table_scroll.style.left = main_table_coor.left + 'px';
}


//Если на моблиьном устройстве, то строку для скроллинга не показиаем и ничего не настраиваем
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    if (document.getElementById('main_table_scroll')) main_table_scroll.style.display = 'none';
} else {// Код если это компьютер
	if (document.getElementById('row_1_1')) {//Если таблица существует
		nastroyka();
		//Код, что бы первые две строки оставались на экране при прокрутке
		window.addEventListener('scroll', function() {
			let main_table_coor = main_table.getBoundingClientRect();
			main_table_scroll.style.left = main_table_coor.left + 'px';
			if (pageYOffset>80) {
				main_table_scroll.style.display = 'block';
			} else {
				main_table_scroll.style.display = 'none';
			}
		});
		
		//Прокрутка окна в текущую позицию
		if (document.position > 2) {
			document.addEventListener("DOMContentLoaded",function() {
				let el = document.getElementById('row_1_'+document.position);
				if (el) {
					let coor_el = el.getBoundingClientRect();
					let coor_row_1_1 = row_1_1.getBoundingClientRect();
					let coor_row_1_2 = row_1_2.getBoundingClientRect();
					let h = coor_el.top - (coor_row_1_1.height + coor_row_1_2.height) - 3;
					window.scrollTo(0,h);
				}
			});
		} 
		
		//Код корректирует ширину колонок при изменении ширины окна
		window.addEventListener(`resize`, event => {
			nastroyka();
		}, false);
		
		//Navigaciya
		document.onmousemove = function() {
			//nazad
			if (event.clientX==0) {
				navigaciya_nazad.style.display = 'block';
			}
			if (navigaciya_nazad.style.display == 'block') navigaciya_nazad.style.top = (event.clientY - 20) + 'px';
			let coor = navigaciya_nazad.getBoundingClientRect();
			if (event.clientX>80) {
				navigaciya_nazad.style.display = 'none';
			}
			
			//vpered
			let vperedX = document.documentElement.clientWidth - 100;
			if (event.clientX >= (document.documentElement.clientWidth-10)) {
				navigaciya_vpered.style.left = vperedX + 'px';
				navigaciya_vpered.style.display = 'block';
			}
			if (navigaciya_vpered.style.display == 'block') navigaciya_vpered.style.top = (event.clientY - 20) + 'px';
			let cor = navigaciya_vpered.getBoundingClientRect();
			if (event.clientX<vperedX) {
				navigaciya_vpered.style.display = 'none';
			}
			
		}

	}

	
	
//Код что бы комментарии можно было двигать и изменять их размеры
//находим все элементы
var okkoms = document.getElementsByClassName('okkom');



for (let i = 0;i<okkoms.length;i++) {
	
	//Только для двигания
	let elZakr = okkoms[i].getElementsByClassName('zakr');
	elZakr[0].onmousedown = function() {
		okkoms[i].opportunityMove = true;
	}
	
	okkoms[i].onmousedown = function() {	
		okkoms[i].down = true;
		okkoms[i].lastX = event.clientX;
		okkoms[i].lastY = event.clientY;
		okkoms[i].style.zIndex = Z_Index++;
		main_table_scroll.style.zIndex = Z_Index++;
	};
}

window.onmouseup = function() {
	for (let i = 0;i<okkoms.length;i++) {
		okkoms[i].down = false;
		okkoms[i].opportunityMove = false;
		okkoms[i].classList.remove('noSelect');
	} 
}

window.onmousemove = function() {
	for (let i = 0;i<okkoms.length;i++) {
		//Двигание коментариев
		if (okkoms[i].down && (okkoms[i].style.cursor == "auto") && okkoms[i].opportunityMove) {
			let border_width = 2;
			let okkom_coor = okkoms[i].getBoundingClientRect();
			okkoms[i].style.width = okkom_coor.width-border_width+'px';
			let dX = okkoms[i].lastX-event.clientX;
			let dY = okkoms[i].lastY-event.clientY;
			let str = '';
			str = str+okkoms[i].style.left;
			str = str.slice(0,str.length-2);
			okkoms[i].style.left = parseInt(str)-dX +'px';
			str = '';
			str = str+okkoms[i].style.top;
			str = str.slice(0,str.length-2);
			okkoms[i].style.top = parseInt(str)-dY +'px';
			okkoms[i].lastX = event.clientX;
			okkoms[i].lastY = event.clientY;
		}
	
		//Изменение размеров комментариев

		if (okkoms[i].style.cursor == "n-resize" || 
			okkoms[i].style.cursor == "e-resize" || 
			okkoms[i].style.cursor == "nw-resize" || 
			okkoms[i].style.cursor == "sw-resize") {
			okkoms[i].classList.add('noSelect');
			let okkom_coor = okkoms[i].getBoundingClientRect();
			if (okkoms[i].down) {
				let border_width = 2;
				okkoms[i].style.width = okkom_coor.width-border_width+'px';
				okkoms[i].style.maxWidth = '100%';
				if (okkoms[i].put == 'left') {
					okkoms[i].style.left = okkom_coor.left + (event.clientX + pageXOffset - okkom_coor.left)+'px';
					okkoms[i].style.width = (okkom_coor.width-border_width) - (event.clientX - okkom_coor.left) +'px';
				}

				if (okkoms[i].put == 'right') {
					okkoms[i].style.width = (okkom_coor.width-border_width) + (event.clientX - okkom_coor.right) +'px';
				}
	
				if (okkoms[i].put == 'top') {
					okkoms[i].style.top = okkom_coor.top + (event.clientY + pageYOffset - okkom_coor.top)+'px';
					okkoms[i].style.height = (okkom_coor.height-border_width) - (event.clientY - okkom_coor.top) +'px';
				}
		
				if (okkoms[i].put == 'bottom') {
					okkoms[i].style.height = (okkom_coor.height-border_width) - (okkom_coor.bottom - event.clientY) +'px';
				}

				if (okkoms[i].put == 'top_left') {
					okkoms[i].style.top = okkom_coor.top + (event.clientY + pageYOffset - okkom_coor.top)+'px';
					okkoms[i].style.height = (okkom_coor.height-border_width) - (event.clientY - okkom_coor.top) +'px';
					okkoms[i].style.left = okkom_coor.left + (event.clientX + pageXOffset - okkom_coor.left)+'px';
					okkoms[i].style.width = (okkom_coor.width-border_width) - (event.clientX - okkom_coor.left) +'px';
				}
			
				if (okkoms[i].put == 'bottom_left') {
					okkoms[i].style.height = (okkom_coor.height-border_width) - (okkom_coor.bottom - event.clientY) +'px';
					okkoms[i].style.left = okkom_coor.left + (event.clientX + pageXOffset - okkom_coor.left)+'px';
					okkoms[i].style.width = (okkom_coor.width-border_width) - (event.clientX - okkom_coor.left) +'px';
				}
			
				if (okkoms[i].put == 'top_right') {
					okkoms[i].style.top = okkom_coor.top + (event.clientY + pageYOffset - okkom_coor.top)+'px';
					okkoms[i].style.height = (okkom_coor.height-border_width) - (event.clientY - okkom_coor.top) +'px';
					okkoms[i].style.width = (okkom_coor.width-border_width) + (event.clientX - okkom_coor.right) +'px';
				}
			
				if (okkoms[i].put == 'bottom_right') {
					okkoms[i].style.height = (okkom_coor.height-border_width) - (okkom_coor.bottom - event.clientY) +'px';
					okkoms[i].style.width = (okkom_coor.width-border_width) + (event.clientX - okkom_coor.right) +'px';
				}
			
			}
		}		

	}
}

//Изменение размеров комментариев
for (let i = 0;i<okkoms.length;i++) {
	okkoms[i].onmousemove = function() {
		let okkom_coor = okkoms[i].getBoundingClientRect();
	
		if (!okkoms[i].down) {
			okkoms[i].style.cursor = "auto";
			if (event.clientX > okkom_coor.left && event.clientX<(okkom_coor.left+8)) {
				okkoms[i].style.cursor = "e-resize";
				okkoms[i].put = 'left';
			} 
			
			if (event.clientX > (okkom_coor.right-8) && event.clientX<okkom_coor.right) {
				okkoms[i].style.cursor = "e-resize";
				okkoms[i].put = 'right';
			} 
	
			if (event.clientY > okkom_coor.top && event.clientY<(okkom_coor.top+8)) {
				okkoms[i].style.cursor = "n-resize";
				okkoms[i].put = 'top';
			} 

			if (event.clientY > (okkom_coor.bottom-8) && event.clientY<okkom_coor.bottom) {
				okkoms[i].style.cursor = "n-resize";
				okkoms[i].put = 'bottom';
			}
		
			if ((event.clientY > okkom_coor.top && event.clientY<(okkom_coor.top+8))
												&& 
				(event.clientX > okkom_coor.left && event.clientX<(okkom_coor.left+8))) {
				okkoms[i].style.cursor = "nw-resize";
				okkoms[i].put = 'top_left';
			} 

			if ((event.clientY > (okkom_coor.bottom-8) && event.clientY<okkom_coor.bottom)
												&&
				(event.clientX > okkom_coor.left && event.clientX<(okkom_coor.left+8))) {
				okkoms[i].style.cursor = "sw-resize";
				okkoms[i].put = 'bottom_left';
			}
		
			if ((event.clientY > okkom_coor.top && event.clientY<(okkom_coor.top+8))
												&&
				(event.clientX > (okkom_coor.right-8) && event.clientX<okkom_coor.right)) {
				okkoms[i].style.cursor = "sw-resize";
				okkoms[i].put = 'top_right';
			}
		
			if ((event.clientY > (okkom_coor.bottom-8) && event.clientY<okkom_coor.bottom)
												&&
				(event.clientX > (okkom_coor.right-8) && event.clientX<okkom_coor.right)) {
				okkoms[i].style.cursor = "nw-resize";
				okkoms[i].put = 'bottom_right';
			}
		
		} 
		
	};
}	

//Открытие картинок в этом же окне
let mas_im = document.getElementsByTagName('a');
if (mas_im) {
	for (let i = 0; i<mas_im.length; i++) {
		mas_im[i].addEventListener('click',function() {
			event.preventDefault();//Предотвращаем действие по умолчанию, т.е. убираем переход по ссылке

			con_for_image.style.display = 'block';
			con_for_image.style.zIndex = Z_Index;
			con_for_im_caption.style.display = 'block';
			con_for_im_caption.style.zIndex = Z_Index+1;
			let s_t = this.href;
			if (s_t.indexOf('?') != -1) {
				im_caption.innerHTML = s_t.slice(s_t.indexOf('?')+1,s_t.length);
			} else {
				im_caption.innerHTML = this.getAttribute('data-caption');
			}
			
			//Определяем, что открываем картинки или видео
			let ss = this.href.slice(0,17);
			
			if (ss == "https://youtu.be/") {//Открываем видео
				ss = this.href.slice(17,this.href.helgth);
				ss = 'https://www.youtube.com/embed/'+ss;
				
				let ifEl = document.createElement('iframe');//Окно для вывода видео
				ifEl.setAttribute('width','560');
				ifEl.setAttribute('height','315');
				ifEl.setAttribute('src',ss);
				ifEl.setAttribute('title','YouTube video player');
				ifEl.setAttribute('frameborder','0');
				ifEl.setAttribute('allow','accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
				ifEl.setAttribute('allowfullscreen','allowfullscreen');
				ifEl.id='iFrameEl';
				
				con_for_image.style.display = 'flex';
				con_for_image.style.justifyContent = 'center';
				con_for_image.style.alignItems = 'center';
				
				con_for_image.append(ifEl);
				/*
				let win = window.open('TRH_winForVideo.html');
				
				let sc = document.createElement('script');
				sc.innerHTML = `
					window.addEventListener('load',function() {
						videoFrame.setAttribute('src','${ss}');
					});
				`;
				win.document.body.append(sc);
				*/



			} else {//Открываем картинку

				var im = new Image();
				im.src = this.href;
				im.id = 'imag';
				im.onload = function() {
					im.style.position = 'fixed';
					let x = im.naturalWidth;
					let y = im.naturalHeight;
					let X = document.documentElement.clientWidth;
					let Y = document.documentElement.clientHeight-con_for_im_caption.clientHeight-4;
					if (x>X) {
						y = y*(X/x);
						x = X;
					}
					if (y>Y) {
						x = x*(Y/y);
						y = Y;
					}
					im.style.width = x + 'px';
					im.style.top = (Y-y-con_for_im_caption.clientHeight)/2+con_for_im_caption.clientHeight + 15 + 'px';
					im.style.left = (X-x)/2 + 'px';		

					con_for_image.append(im);
					im.addEventListener('mousedown', im_mouse_down);
					document.body.addEventListener('mouseup', im_mouse_up);
					im.addEventListener('mousemove',im_mouse_move);
					im.addEventListener('wheel',wheel_resize_im);//Изменение размеров при прокручивании колесиком
				}
			}
		});
	}
}	

function wheel_resize_im(e) {
	event.preventDefault();
	if (e.deltaY<0) {
		plus.foc = true;
		plusImage(80);
		plus.foc = false;
	}
	if (e.deltaY>0) {
		minus.foc = true;
		minusImage(80);
		minus.foc = false;
	}
}


function closeImage() {
	con_for_image.style.display = 'none';
	con_for_im_caption.style.display = 'none';
	im_caption.innerHTML = '';
	document.body.removeEventListener('mouseup', im_mouse_up);
	let imEl = document.getElementById('imag');
	console.log(imEl);
	if (imEl) {
		imEl.removeEventListener('mousedown', im_mouse_down);
		imEl.removeEventListener('mousemove',im_mouse_move);
		imEl.remove();
	}
	let ifEl = document.getElementById('iFrameEl');
	if (ifEl) ifEl.remove();
}

function plusImage(d) {
	if (plus.foc) {
		imag.style.width = imag.clientWidth + d + 'px';
		let k = imag.naturalHeight / imag.naturalWidth;
		let coor = imag.getBoundingClientRect();
		imag.style.top = coor.y - (d/2)*k + 'px';
		imag.style.left = coor.x - (d/2) + 'px';
	}
}

function minusImage(d) {
	if (minus.foc) {
		imag.style.width = imag.clientWidth - d + 'px';
		let k = imag.naturalHeight / imag.naturalWidth;
		let coor = imag.getBoundingClientRect();
		imag.style.top = coor.y + (d/2)*k + 'px';
		imag.style.left = coor.x + (d/2) + 'px';
	}
}

function im_mouse_down() {
	imag.mouseDown = true;
	imag.lastX = event.clientX;
	imag.lastY = event.clientY;
}

function im_mouse_up() {
	imag.mouseDown = false;
}

function im_mouse_move() {
	if (imag.mouseDown) {
		event.preventDefault();
		let coor = imag.getBoundingClientRect();
		imag.style.top = coor.y + event.clientY - imag.lastY + 'px';
		imag.style.left = coor.x + event.clientX - imag.lastX   + 'px';
		imag.lastX = event.clientX;
		imag.lastY = event.clientY;
	}
}

let timerId;
let timeOutId;
	
function zoomImage() {
	plusImage(40);
	timeOutId = setTimeout(function() {
		timerId = setInterval(plusImage,50,80);
	},100);
}


function stopZoomImage() {
	clearInterval(timerId);
	clearTimeout(timeOutId);
}

function plusMouseOut() {
	plus.foc = false;
	clearInterval(timerId);
	clearTimeout(timeOutId);
}

function reduceImage() {
	minusImage(40);
	timeOutId = setTimeout(function() {
		timerId = setInterval(minusImage,50,80);
	},100);
}

function minusMouseOut() {
	minus.foc = false;
	clearInterval(timerId);
	clearTimeout(timeOutId);
}


//Конец кода "Если это компьютер"
}


//Функция объединяет ячейки по вертикали
function merge_cells_vert(col//столбик в котором будуцт объединены ячейки
                     ,row_1,row_2//Первая и вторая ячейки для объединения
						         ) {
	let masEl = [];
	let k=0;
	for (let i = row_1;i<(row_2+1);i++) {
		let elTemp = document.getElementById('row_'+col+'_'+i);
		if (elTemp) masEl[k++] = elTemp;
	}
	if (!masEl[0]) return;
	masEl[0].rowSpan = masEl.length;
	for (let i = 1;i<masEl.length;i++) {
		masEl[i].style.display = 'none';
	}
	if (row_2 == 2){
		masEl[0].className = masEl[0].className + ' razdel_bottom';
	} 
	if (row_1 == 1 && row_2 == 2) {
		let el_1 = document.getElementById('row_'+col+'_'+row_1+'_scroll');
		let el_2 = document.getElementById('row_'+col+'_'+row_2+'_scroll');
		if (el_1 && el_2) {
			el_1.rowSpan = 2;
			el_2.style.display = 'none';
		}
	}
}

merge_cells_vert(12,14,15);
merge_cells_vert(14,21,22);
merge_cells_vert(15,1,2);
merge_cells_vert(15,3,4);
merge_cells_vert(20,1,2);
merge_cells_vert(20,3,4);
merge_cells_vert(21,1,2);
merge_cells_vert(26,14,15);
merge_cells_vert(29,1,2);
merge_cells_vert(39,21,22);
merge_cells_vert(41,21,22);
merge_cells_vert(43,21,22);
merge_cells_vert(47,1,2);
merge_cells_vert(49,5,6);
merge_cells_vert(50,5,6);
merge_cells_vert(52,21,22);
merge_cells_vert(52,14,15);
merge_cells_vert(56,1,2);
merge_cells_vert(57,21,22);
merge_cells_vert(71,14,15);
merge_cells_vert(73,6,13);

for (let i = 74;i<88;i++) {
	merge_cells_vert(i,14,15);
}


//Функция объединяет ячейки по горизонтали
function merge_cells_hor(row,//В какой строке объединять
						col_1,//Номер первого столбика
						col_end//Номер последнего столбика
						) {
	let els = [];
	let k = 0;
	for (let i = col_1;i<=col_end;i++) {
		let el_temp = document.getElementById('row_'+i+'_'+row);
		if (el_temp) els[k++] = el_temp;
	}
	if (els.length < 2) return;
	els[0].colSpan = els.length;
	for (let i = 1;i<els.length;i++) els[i].style.display = 'none';

	//Тоже самое для певрой строки
	if (row < 3) {
		let els = [];
		let k = 0;
		for (let i = col_1;i<=col_end;i++) {
			let el_temp = document.getElementById('row_'+i+'_'+row+'_scroll');
			if (el_temp) els[k++] = el_temp;
		}
		if (els.length < 2) return;
		els[0].colSpan = els.length;
		for (let i = 1;i<els.length;i++) els[i].style.display = 'none';
	}
}

merge_cells_hor(1,3,12);
merge_cells_hor(1,16,19);
merge_cells_hor(1,22,23);
merge_cells_hor(1,24,25);
merge_cells_hor(1,27,28);
merge_cells_hor(1,30,37);
merge_cells_hor(1,39,42);
merge_cells_hor(1,45,46);
merge_cells_hor(1,48,50);
merge_cells_hor(1,52,54);
merge_cells_hor(1,57,62);
merge_cells_hor(1,70,72);
merge_cells_hor(1,74,75);
merge_cells_hor(1,77,80);


merge_cells_hor(1,43,46);
merge_cells_hor(2,43,44);
merge_cells_hor(3,43,44);
for (let i = 31;i<45;i++) {
	merge_cells_hor(i,43,44);
}
merge_cells_hor(50,43,44);

merge_cells_hor(1,65,66);
merge_cells_hor(2,65,66);
merge_cells_hor(3,65,66);
merge_cells_hor(29,65,66);
for (let i = 33;i<45;i++) {
	merge_cells_hor(i,65,66);
}
for (let i = 46;i<50;i++) {
	merge_cells_hor(i,65,66);
}

merge_cells_hor(35,16,17);
merge_cells_hor(18,24,25);
merge_cells_hor(31,24,25);
merge_cells_hor(31,36,37);
merge_cells_hor(34,36,37);
merge_cells_hor(35,36,37);
merge_cells_hor(37,36,37);

merge_cells_hor(31,40,42);
merge_cells_hor(35,40,42);
merge_cells_hor(36,40,42);
merge_cells_hor(23,41,42);

for (let i = 31;i<44;i++) {
	merge_cells_hor(i,45,46);
}

merge_cells_hor(7,53,54);
merge_cells_hor(42,53,54);
merge_cells_hor(43,53,54);
merge_cells_hor(32,57,58);

for (let i = 31;i<39;i++) {
	merge_cells_hor(i,61,62);
}
merge_cells_hor(43,61,62);

merge_cells_hor(1,85,86);
//merge_cells_hor(2,85,86);
merge_cells_hor(50,85,86);
merge_cells_hor(51,85,86);




//Столбики 65 66

/*
//Добавляем верхнюю 4 ячейку
if (document.getElementById('row_65_4')&& document.getElementById('row_66_4')) {
    let s_content; //Содержание ячейки
	let s_kom = "'kom65_04_00'";
	s_content = 'Переменчивый характер, неустойчивость настроения, двуличие, проявившаяся с годами склонность к мистицизму.<br>'+
				'Александр I был полон желания обновить и улучшить страну. В манифесте о восшествии на престол Александр I заявил, '+
				'что будет управлять «по законам и по сердцу бабки своей — Екатерины Великой». <span class = "skom" onclick = "showKom('+s_kom+');">Аракчеевщина</span>'+
				'(Аракчеев — фаворит Ал. I)';
	let yach_menu = document.getElementsByClassName('65_66_4_yach_menu'); //ячейки из меню, столбика слева
	let row_4_menu = document.getElementsByClassName('65_66_4_row');//нужная строка
	yach_menu[1].setAttribute('rowspan','2');
    let rab_yach_1 = row_65_4;
	let rab_yach_2 = row_66_4;
	row_65_4.remove();
	row_66_4.remove();
	let new_yach = document.createElement('td');
	new_yach.innerHTML = s_content;
	new_yach.setAttribute('colspan','2');
	row_4_menu[1].append(new_yach);
	let new_row = document.createElement('tr');
	new_row.append(rab_yach_1);
	new_row.append(rab_yach_2);
	row_4_menu[1].after(new_row);
	
	let new_kom = document.createElement('div');
	let s_temp = "'none'";
	s_kom = '<div id = "kom65_04_00" class = "okkom">'+
            '<div class = "zakr"><span onclick = "kom65_04_00.style.display = '+s_temp+';" style = "cursor:pointer;">X</span></div>'+
            '<div class = "kom">'+
			'<b>Аракчеевщина</b> - система войсковых и полицейских мер и реформ жесткого характера. '+
			'Происходит от фамилии главного инициатора реформ генерала от артиллерии графа А. Аракчеева'+
            '</div></div>';
	new_kom.innerHTML = s_kom;
	document.body.append(new_kom);
	//у 4-х ячеек других столбиков сделаем rowspan = 2
	/*for (let i = 2;i<88;i++) {
		if (i==65 || i==66) continue;
		let el = document.getElementById('row_'+i+'_4');
		if (el) el.setAttribute('rowspan','2');
	}//
//Когда будем выводить несколько столбиков надо будет у 4-х ячеек других столбиков сделать rowspan = 2
}
*/
//Столбики 65 66 закончены

//Функция для перехода на якорь

function goToYak(s,col,punkt) {
   let el = document.getElementById(s);
   if (el) {
		el.scrollIntoView({block: "center", behavior: "smooth"});
		el.style.backgroundColor = 'RGB(165,224,250)';
		document.migYak = true;
		document.f_migYak.i = 1;
		document.yak_bg_color (el, 2);
   } else {
	  if (col != undefined) {
		let s_temp = '1';
		for (let i = 2;i<88;i++) {
			if (i==col) {
				s_temp = s_temp + '1';
			} else {
				s_temp = s_temp+document.list_of_cols[i-1];
			}
		}
      document.list_of_cols = s_temp;
	  document.number_of_col = col;
	  }	
		if ( punkt != undefined ) {
			let s_temp = '';
			for (let i = 0;i<document.punkti.length;i++) {
				if (i == punkt) {
					s_temp = s_temp + '1';
				} else {
					s_temp = s_temp + document.punkti[i];
				}
			}
			document.punkti = s_temp;
		}
		if (punkt == undefined && col == undefined) {
			alert('Ошибка! На данной странице якоря не существует. Возможно он находится в другой колонке или в сфере, которая не открыта. Необходимо в ссылке на данный якорь указать номер колонки и сферу.');
		} else {
			window.location = 'index.php?n='+document.number_of_col+'&list_of_cols='+document.list_of_cols+'&anchor='+s+'&punkti='+document.punkti;
		}
   }
}

document.yak_bg_color = function(el,b) {
	document.body.addEventListener('click',document.f_migYak);
	if (b == 1) {
		el.style.backgroundColor = '';
		el.style.border = '';
		b = 2;
	} else if (b == 2) {
		el.style.backgroundColor = 'RGB(165,224,250)';
		el.style.border = 'solid RGB(165,224,250) 2px';
		b = 1;
	}
	if (document.migYak) {
		setTimeout(document.yak_bg_color, 500, el, b);
	} else {
		el.style.backgroundColor = '';
		el.style.border = '';
		document.body.removeEventListener('click',document.f_migYak);
	}	
}

document.f_migYak = function () {
	if (document.f_migYak.i!=1) document.migYak = false;
	document.f_migYak.i++;
}



