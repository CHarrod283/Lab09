<?php

$score = 0;

echo "<br><p>Question 1: What is the best number?</p>";
echo "<pre>&#9</pre>You answered: " . $_POST["bestNumber"] "<br>";
echo "<pre>&#9</pre>Correct answer: 283";
if($_POST["bestNumber"] == 283){
	$score += 20;
}

echo "<br><p>Question 2: Which is a fruit?</p>";
echo "<pre>&#9</pre>You answered: " . $_POST["fruit"] "<br>";
echo "<pre>&#9</pre>Correct answer: apple";
if($_POST["fruit"] == "apple"){
	$score += 20;
}

echo "<br><p>Question 2: Which is a bird?</p>";
echo "<pre>&#9</pre>You answered: " . $_POST["bird"] "<br>";
echo "<pre>&#9</pre>Correct answer: bluebird";
if($_POST["bird"] == "bluebird"){
	$score += 20;
}

echo "<br><p>Question 2: Which is an insect?</p>";
echo "<pre>&#9</pre>You answered: " . $_POST["insect"] "<br>";
echo "<pre>&#9</pre>Correct answer: ant";
if($_POST["insect"] == "ant"){
	$score += 20;
}

echo "<br><p>Question 2: Which is a food?</p>";
echo "<pre>&#9</pre>You answered: " . $_POST["food"] "<br>";
echo "<pre>&#9</pre>Correct answer: pizza";
if($_POST["food"] == "pizza"){
	$score += 20;
}

echo "<p>You got a $score% on the quiz, or " . $score / 20 . "/5 answers correct.</p>";


?>
