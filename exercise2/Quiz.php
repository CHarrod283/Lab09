<?php

$score = 0;

echo "<br><p>Question 1: What is the best number?</p>";
echo "You answered: " . $_POST["bestNumber"] . "<br>";
echo "Correct answer: 283";
if($_POST["bestNumber"] == 283){
	$score += 20;
}

echo "<br><p>Question 2: Which is a fruit?</p>";
echo "You answered: " . $_POST["fruit"] . "<br>";
echo "Correct answer: apple";
if($_POST["fruit"] == "apple"){
	$score += 20;
}

echo "<br><p>Question 2: Which is a bird?</p>";
echo "You answered: " . $_POST["bird"] . "<br>";
echo "Correct answer: bluebird";
if($_POST["bird"] == "bluebird"){
	$score += 20;
}

echo "<br><p>Question 2: Which is an insect?</p>";
echo "You answered: " . $_POST["insect"] . "<br>";
echo "Correct answer: ant";
if($_POST["insect"] == "ant"){
	$score += 20;
}

echo "<br><p>Question 2: Which is a food?</p>";
echo "You answered: " . $_POST["food"] . "<br>";
echo "Correct answer: pizza";
if($_POST["food"] == "pizza"){
	$score += 20;
}

echo "<p>You got a $score% on the quiz, or " . $score / 20 . "/5 answers correct.</p>";


?>

