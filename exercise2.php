<html>
  <style>
    body
    {
      background: url('https://d3d0lqu00lnqvz.cloudfront.net/media/media/4692396.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    form
    {
      font-size: 15px;
      font-family: verdana;
      margin: 0.5%;
    }
    h1
    {
      display: inline-block;
      background: white;
      font-size: 40px;
      font-family: verdana;
      margin: 0.5%;
    }
    p
    {
      display: inline-block;
      font-size: 20px;
      background: lightblue;
    }
    p1
    {
      display: inline-block;
      font-size: 15px;
      background: pink;
    }
    label
    {
      background: white;
    }
  </style>
  <head>
    <title>History of Tanks Quiz</title>
  </head>
  <body>
    <h1>History of Tanks Quiz</h1>
    <form method='post'>
      
      <p>Q1: What was the most produced tank of WW2?</p><br>
      <input type = "radio" id='t_34' name='q1' value='T-34'>
      <label for="t_34">T-34</label>
      <br>
      <input type = "radio" id='m4_sherman' name='q1' value='M4 Sherman'>
      <label for="m4_sherman">M4 Sherman</label>
      <br>
      <input type = "radio" id='a27_cromwell' name='q1' value='A27 Cromwell'>
      <label for="a27_cromwell">A27 Cromwell</label>
      <br>
      <input type = "radio" id='panzer_4' name='q1' value='Panzer IV'>
      <label for="panzer_4">Panzer IV</label>
      <br>
      <span>
      <?php
        if(isset($_POST['submit']))
        {
         echo '<br><p1>You selected '.$_POST['q1'].'</p1><br>'; 
          echo '<p1>Correct Answer: T-34</p1><br>';
        }
      ?></span>
      
      <p>Q2: What country made the first tank to feature a fully rotatable turret?</p><br>
      <input type = "radio" id='britain' name='q2' value='Great Britain'>
      <label for="britain">Great Britain</label>
      <br>
      <input type = "radio" id='russian_empire' name='q2' value='Russian Empire'>
      <label for="russian_empire">Russian Empire</label>
      <br>
      <input type = "radio" id='france' name='q2' value='France'>
      <label for="france">France</label>
      <br>
      <input type = "radio" id='german_empire' name='q2' value='German Empire'>
      <label for="german_empire">German Empire</label>

      <br>
      <span>
      <?php
        if(isset($_POST['submit']))
        {
         echo '<br><p1>You selected '.$_POST['q2'].'</p1><br>'; 
          echo '<p1>Correct Answer: France</p1><br>';
        }
      ?></span>
      
      <p>Q3: The M4 Sherman is...</p><br>
      <input type = "radio" id='light' name='q3' value='light'>
      <label for="light">a light tank</label>
      <br>
      <input type = "radio" id='heavy' name='q3' value='Heavy'>
      <label for="heavy">a heavy tank</label>
      <br>
      <input type = "radio" id='tank_destroyer' name='q3' value='Tank Destroyer'>
      <label for="tank_destroyer">a tank destroyer</label>
      <br>
      <input type = "radio" id='medium' name='q3' value='Medium'>
      <label for="medium">a medium tank</label>

      <br>

      <span>
      <?php
        if(isset($_POST['submit']))
        {
         echo '<br><p1>You selected '.$_POST['q3'].'</p1><br>'; 
          echo '<p1>Correct Answer: a medium tank</p1><br>';
        }
      ?></span>
      
      <p>Q4: What was the most feared tank of WW2?</p><br>
      <input type = "radio" id='m26' name='q4' value='M26 Pershing'>
      <label for="m26">M26 Pershing</label>
      <br>
      <input type = "radio" id='kv_1' name='q4' value='KV-1'>
      <label for="kv_1">KV-1</label>
      <br>
      <input type = "radio" id='tiger' name='q4' value='Tiger'>
      <label for="tiger">Panzer VI(E) Tiger</label>
      <br>
      <input type = "radio" id='l3' name='q4' value='L3/33'>
      <label for="l3">L3/33</label>

      <br>
      <span>
      <?php
        if(isset($_POST['submit']))
        {
         echo '<br><p1>You selected '.$_POST['q4'].'</p1><br>'; 
          echo '<p1>Correct Answer: Panzer VI(E) Tiger</p1><br>';
        }
      ?></span>
          
      <p>Q5: Which of the following tanks did the USSR (Soviet Union) produce the most during the Cold War?</p><br>
      <input type = "radio" id='2s7' name='q5' value='2S7 Pion'>
      <label for="2s7">2S7 Pion</label>
      <br>
      <input type = "radio" id='asu' name='q5' value='ASU-85'>
      <label for="asu">ASU-85</label>
      <br>
      <input type = "radio" id='2s9' name='q5' value='2S9 Nona'>
      <label for="2s9">2S9 Nona</label>
      <br>
      <input type = "radio" id='t54' name='q5' value='T-54/55'>
      <label for="t54">T-54/55</label>

      <br>
      <br>

      <span>
      <?php
        if(isset($_POST['submit']))
        {
         echo '<br><p1>You selected '.$_POST['q5'].'</p1><br>'; 
          echo '<p1>Correct Answer: T-54/55</p1><br>';
        }
      ?></span>
      
      <input type = 'submit' id='submit' name='submit' value='Submit Quiz'>
      <br>
      <span>
      <?php      
          include 'quiz.php';
      ?>
      </span>
      
    </form>
  </body>
  <br>
</html>