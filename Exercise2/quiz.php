<?php
  $quesOneChoice = $_POST["questionOne"];
  $quesTwoChoice = $_POST["questionTwo"];
  $quesThreeChoice = $_POST["questionThree"];
  $quesFourChoice = $_POST["questionFour"];
  $quesFiveChoice = $_POST["questionFive"];

  $question1Ans = "Washington DC";
  $question2Ans = 7;
  $question3Ans = 12;
  $question4Ans = "Berlin";
  $question5Ans = "Mercury";

  $score =  0;

  echo "Question 1: What is the capital of the United States of America?<br>";
  echo "You answered:" . $quesOneChoice ."<br>";
  echo "Correct answer:" . $question1Ans ."<br>";


  echo "<br>Question 2: How many days are in a week?<br>";
  echo "You answered:" . $quesTwoChoice ."<br>";
  echo "Correct answer:" . $question2Ans ."<br>";


  echo "<br>Question 3: How many months are in a year?<br>";
  echo "You answered:" . $quesThreeChoice ."<br>";
  echo "Correct answer:" . $question3Ans ."<br>";


  echo "<br>Question 4: What is the capital of Germany?<br>";
  echo "You answered:" . $quesFourChoice ."<br>";
  echo "Correct answer:" . $question4Ans ."<br>";

  echo "<br>Question 5: Which planet is closest to the sun?<br>";
  echo "You answered:" . $quesFiveChoice ."<br>";
  echo "Correct answer:" . $question5Ans ."<br>";

  if($quesOneChoice == $question1Ans)
  {
    $score++;
  }

  if($quesTwoChoice == $question2Ans)
  {
    $score++;
  }

  if($quesThreeChoice == $question3Ans)
  {
    $score++;
  }

  if($quesFourChoice == $question4Ans)
  {
    $score++;
  }

  if($quesFiveChoice == $question5Ans)
  {
    $score++;
  }

  echo "<br>You answered " . $score . " questions correctly.<br>";
  $percentage = ($score /5)*100;
  echo "Your score as an percentage is: " . $percentage . "%";

?>
