<?php phpinfo();

for ($i=1;$i<10000;$i++) {
	echo '<tr>';
	for ($j=1;$j<10000;$j++) {
		echo '<td style="background-color:'.(($i+$j)?'#ff0000':'#00ff00').'">'.$i.'</td>';
	}
	echo '</tr>';
}
die();

?>
