<?php

echo "<table style=\"width:100%\">";
for($i = 0; $i <= 100; $i++){
	echo "<tr>";
	for($j = 0; $j <= 100; $j++){
		echo "<td>";
		if($i == 0){
			if($j != 0){
				echo "$j";
			}
		} else if($j == 0){
			echo "$i";
		} else {
			echo "" . $i * $j . "";
		}

		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>
