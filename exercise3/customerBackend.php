<?php
echo "<html>";
echo "<head>";
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\"/>";
echo "</head>";
echo "<b>Welcome " . $_POST["username"] . " </b><br>";

echo "Your password was: " . $_POST["password"] . "<br>";

echo "<table style=\"width:500\">";
echo "<tr>";
echo "<th></th> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th>";
echo "</tr>";
echo "<tr>";
addRow("numBlanket");
echo "</tr><tr>";
addRow("numFork");
echo "</tr><tr>";
addRow("numNote");
echo "</tr>";

echo "<tr>";
echo "<th>Shipping</th>";
echo "<td colspan=\"2\">" . $_POST["shipping"] . "</td>";
echo "<td>$";
shippingSum();
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=\"3\"> Total Cost</th> <td>$";
totalCost();
echo "</td>";
echo "</tr>";
echo "</table>";

echo "</html>";
function totalCost(){
	$tc = 0;
	if($_POST["shipping"] == "Three Day"){
		$tc += 5;
	} else if($_POST["shipping"] == "Express Overnight"){
		$tc += 50;
	}
	$tc += 5 * $_POST["numBlanket"];
	$tc += 2 * $_POST["numFork"];
	$tc += 2.5 * $_POST["numNote"];
	echo "$tc";
}

function shippingSum(){
	if($_POST["shipping"] == "Free"){
		echo "0";
	}	
	if($_POST["shipping"] == "Three Day"){
		echo "5";
	}
	if($_POST["shipping"] == "Express Overnight"){
		echo "50";
	}
}

function addRow($str){
	if($str == "numBlanket"){
		echo "<th>Blanket(s)</th>";
		echo "<td>" . $_POST[$str] . "</td>";
		echo "<td>$5.00</td>";
		echo "<td>$" . 5 * $_POST[$str] . "</td>";
	}
	if($str == "numFork"){
		echo "<th>Fork(s)</th>";
		echo "<td>" . $_POST[$str] . "</td>";
		echo "<td>$2.00</td>";
		echo "<td>$" . 2 * $_POST[$str] . "</td>";
	}
	if($str == "numNote"){
		echo "<th>Sticky Note(s)</th>";
		echo "<td>" . $_POST[$str] . "</td>";
		echo "<td>$2.50</td>";
		echo "<td>$" . 2.5 * $_POST[$str] . "</td>";
	}
}

?>
