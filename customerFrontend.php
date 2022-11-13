<html>
  <head>
    <title>Web Store</title>
    <link rel="stylesheet" href="style.css">
    <h1>Build your own tank!</h1>
    <img src='http://topwar.ru/uploads/posts/2012-06/1339988470_superkv_13.jpg' width=750px><br>
    <script type='text/javascript' src='formChecker.js'></script>
  </head>
  <body>    
    <form action='customerBackend.php' method='post'>
      <h2>Enter your credentials</h2>
      <label for='text'>Username (Email):</label>
      <input type='text' name='username' id='username' oninput='active_key()'></input>
      <br>
      <label for='password'>Password:</label>
      <input type='password' name='password' id='password' oninput='active_key()'> </input>

      <span id='active'>
        <h3 id='changes'></h3>
      </span>
      
      <h2>Products (Please enter the desired quantity)</h2>      
      <label for='cannon'>Cannon ($50,000)</label>
      <input type="number" name='product' id='cannon' min=0 value=0><br>
      <label for='turret'>Turret ($100,000)</label>
      <input type="number" name='product2' id='turret' min=0 value=0><br>
      <label for='chassis'>Chassis ($150,000)</label>
      <input type="number" name='product3' id='chassis' min=0 value=0><br>
      
      <h2>Shipping options</h2>
      <input type='radio' name='shipping' id='shipping' checked='checked' value='free'>
      <label for='shipping'>7 day (free) </label>
      <br>
      <input type='radio' name='shipping' id='shipping2' value='overnight'>
      <label for='shipping'>Overnight ($50.00)</label>
      <br>
      <input type='radio' name='shipping' id='shipping3' value='three_day'>
      <label for='shipping'>3 day ($5.00) </label>
      <br>
      <br>
      <p>Submit button appears only after entering valid credentials</p>
      <br>
      <input type='reset' name='reset' id='reset' value='Reset'>
      <input type='submit' name='submit' id='submit' value='Submit'>
      <br>
      </form>
    <br>  
    </body>
</html>