<!DOCTYPE HTML>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="icon" href="TRH.ico">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php
 	$fcv = "";//file_css_version
	if (file_exists("TRH_main_003.css")) {	
		$fcv = filemtime("TRH_main_003.css");
	}
 ?>
 <link rel = "StyleSheet" href = "TRH_main_003.css?v=<?php echo $fcv ?>">
</head>
<body>
<div class="header-logo">
		<img id="TRH_logo" src = "TRH/TRH_logo.svg">
		<span id="logo_text">ИСТОРИЯ-РОССИИ.РФ</span>
</div>
<center class="winAvt">
<h1>Пожалуйста введите логин и пароль</h1>
<form id="formAvt" name = "form_avt" action = "index.php" method = "post">
<table>
<tr>
<td>Логин</td>
<td><input type = "text" name = "TRH_POST_log"></input></td>
</tr>
<tr>
<td>Пароль</td>
<td><input type = "password" name = "TRH_POST_pas"></input></td>
</tr>
<tr>
<td colspan = "2" align = "center"><input class="btnAvtSubmit" type = "submit" value = "Отправить"></input></td>
</tr>

</table>

</form>



</center>

</body>
