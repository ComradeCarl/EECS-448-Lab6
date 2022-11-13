<html>

  <style>
    body
    {
      font-size: 13.5px;
      background: lightblue;
    } 
  </style>
  <head>
    <title>Multiplication Table</title>
    <h1>Multiplication table</h1>
  </head>
  <body>
    <table align="center" border='1' width="100%">
    <?php 
      function table()
      { 
        for($i = 1; $i <= 100; $i++)
        {  
          echo " <tr>";

          for($j = 1; $j <= 100; $j++)
          {
            $multiplication_table = ($i*$j);
            echo "<td>$multiplication_table</td>";
          }
        }
      }

      table(); 
    ?> 
    </table>
  </body>
</html>