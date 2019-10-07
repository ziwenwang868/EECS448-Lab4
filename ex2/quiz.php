<?php
echo '<link href="quiz.css" rel="stylesheet" type="text/css" />';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $q1 = $_POST["question1"];
  $q2 = $_POST["question2"];
  $q3 = $_POST["question3"];
  $q4 = $_POST["question4"];
  $q5 = $_POST["question5"];
}
$sore=100;
if($q1!='Gotham City')
{
  $sore=$sore-20;
}
if($q2!='Venus')
{
  $sore=$sore-20;
}
if($q3!='The giraffe')
{
  $sore=$sore-20;
}
if($q4!='Four')
{
  $sore=$sore-20;
}
if($q5!='J.K.Rowling')
{
  $sore=$sore-20;
}
echo '<div class="answer">';
echo "<h1>Answers</h1>";
echo "<h3>Question1</h3>";
echo "<p>Which fictional city is the home of Batman?</p>";
echo "Your Answer: " . $q1 . "<br>";
echo "Correct Answer: Gotham City <br>"; 
echo "<h3>Question2</h3>";
echo "<p>Which planet is the closest to Earth?</p>";
echo "Your Answer: " . $q2 . "<br>";
echo "Correct Answer: Venus <br>"; 
echo "<h3>Question3</h3>";
echo "<p>Which is the tallest mammal?</p>";
echo "Your Answer: " . $q3 . "<br>";
echo "Correct Answer: The giraffe <br>"; 
echo "<h3>Question4</h3>";
echo "<p>How many strings does a violin have?</p>";
echo "Your Answer: " . $q4 . "<br>";
echo "Correct Answer: Four <br>"; 
echo "<h3>Question5</h3>";
echo 'Who is the author of the "Harry Potter" books?</p>';
echo "Your Answer: " . $q5 . "<br>";
echo "Correct Answer: J.K.Rowling <br>"; 
echo "<br>";
echo "<h2>Your Final Score: " .$sore."%</h2>";
echo "</div>";


?>
