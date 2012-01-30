<?php phpinfo();

for ($i=1;$i<5;$i++) {
	echo '<tr>';
	for ($j=1;$j<5;$j++) {
		echo '<td style="background-color:'.(($i+$j)?'#ff0000':'#00ff00').'">'.$i.'</td>';
	}
	echo '</tr>';
}

?>
