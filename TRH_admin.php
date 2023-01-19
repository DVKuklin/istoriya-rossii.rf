<?php
include "TRH_avt.php";
?>

<?php if ($TRH_user['type'] <> "neuser"): ?>
<!DOCTYPE HTML>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel = "StyleSheet" href = "TRH_for_edit.css">  
 <link rel="icon" href="TRH.ico">
 <style>
	td {padding:10px}
 </style>
</head>
<body style = "font-family:arial;font-size:small;margin-top:0px">
<center>
	<table border = "1px" rules = "all">
	<?php
	for ($i = 2; $i<88;$i++) {
		if ($i==44 OR $i==66) continue;
		if ($i<10) {
			$f_name = "TRH00".$i."/TRH00".$i.".html";
		} else {
			$f_name = "TRH0".$i."/TRH0".$i.".html";
		}
		$file = fopen ($f_name, "r");
		$s_temp = fgets($file);
		echo '<tr>';
		echo '<td';
		if ($i==43 OR $i==65) {
			if ($TRH_user['type'] == "admin") {
				echo ' rowspan = "2">';
			} else {
				echo '>';
			}
		} else {
			echo '>';
		}
		if ($TRH_user['col'.$i]) {
			echo '<a href = "index.php?n='.$i.'" target = "_blank">';
		}
		echo $i;
		if ($i==43 OR $i==65) echo '/'.($i+1);
		echo ' - '.$s_temp.' / ';
		$s_temp = fgets($file);
		echo $s_temp;
		if ($TRH_user['col'.$i]) {
			echo '</a>';
		}
		echo '</td>';
		if ($TRH_user['type'] == "admin") {
			if ($i==43 OR $i==65) {
				echo '<td><a href = "TRH_edit.php?n='.$i.'" target = "_blank">Редактировать</a></td></tr>';
				echo '<tr><td><a href = "TRH_edit.php?n='.($i+1).'" target = "_blank">Редактировать</a></td>';
			} else {
				echo '<td><a href = "TRH_edit.php?n='.$i.'" target = "_blank">Редактировать</a></td>';
			}
			
		}
		echo '</tr>';
	}

	?>
	</table>
</center>
</body>


<?php endif; ?>