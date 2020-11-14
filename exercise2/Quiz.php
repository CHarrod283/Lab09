<?php

$score = 0;

if($_POST["bestNumber"] == 283){
	$score += 20;
}
if($_POST["fruit"] == "apple"){
	$score += 20;
}

echo "<p>You got a $score on the quiz </p>";

?>
