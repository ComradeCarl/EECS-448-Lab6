<?php 
$q_list = array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5']);
$correct_answers = array('T-34','France','Medium','Tiger','T-54/55');

$correct_num = 0;
$total_answers = 5;

function correction()
{
  global $q_list, $correct_answers, $correct_num;
  for($i = 0; $i <= count($q_list)-1; $i++)
  {
    if($q_list[$i] == $correct_answers[$i])
    {
      $correct_num++;
    }
  }
}

correction();
$percentage = (($correct_num/$total_answers)*100);

  if(isset($_POST['submit']))
  {
      echo "<br><p>Current Score: ".$correct_num.'/'.$total_answers." =       %".$percentage."</p>";
  }
?>