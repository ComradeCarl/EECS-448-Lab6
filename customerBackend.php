<?php
$item1 = 50000;
$item2 = 100000;
$item3 = 150000;

$price_arr = array (($_POST['product'])*($item1), ($_POST['product2'])*($item2), $_POST['product3']*($item3));

$password = $_POST['password'];
$username = $_POST['username'];

if(isset($_POST['submit']))
{ 
  echo '<html>';
  echo '<head>';
  echo '<title>Receipt</title><h1>RECEIPT</h1>';
  echo '<h>Welcome '.$username.'! Your password is '.$password.'</h><br>';
  echo '<style>
  html
  {
    background-image: url("https://images6.alphacoders.com/670/thumb-1920-670597.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }

  h
  {
    background-color: orange;
    font-family: verdana;
    font-size: 25px;
    color: black;
  }

  body
  {
    font-family: verdana;
    font-size: 20px;
    color: black;
    background-color: lightblue;
    margin: 15%;
  }

  td
  {
    background-color: orange;
  }

  </style>';
  echo '</head>';
  echo '<body>';
  echo '<table align="center" border="1" width="100%">';
  echo '<tr><th> Item </th>';
  echo '<th>Quantity</th>';
  echo '<th>Cost Per Item</th>';
  echo '<th>Subtotal</th></tr>';
  echo '<tr><td> Cannon </td>';
  echo '<td>'.$_POST['product'].'</td>';
  echo '<td>$'.$item1.'</td>';
  echo '<td>$'.$price_arr[0].'</td></tr>';
  echo '<tr><td> Turret </td>';
  echo '<td>'.$_POST['product2'].'</td>';
  echo '<td>$'.$item2.'</td>';
  echo '<td>$'.$price_arr[1].'</td></tr>';
  echo '<tr><td> Chassis </td>';
  echo '<td>'.$_POST['product3'].'</td>';
  echo '<td>$'.$item3.'</td>';
  echo '<td>$'.$price_arr[2].'</td></tr><br>';
  echo '<tr><td>Shipping Cost</td>';
  echo '<td></td><td></td>';
  echo '<td>$'.shipping_cost().'</td></tr>';
  echo '<tr><td><strong>Total Price</strong></td>';
  echo '<td></td><td></td>';
  echo '<td><strong>$'.(_sum($price_arr)+shipping_cost()).'</strong></td></tr>';
  echo '</table>';
  echo '</body>';
}

function _sum($arr)
{
  return rec_sum($arr,(count($arr)));
}

function rec_sum($arr, $index)
{
  if($index <= 0)
  {
    return 0;
  }
  else
  {
    return rec_sum($arr,$index-1) + $arr[$index-1]; 
  }
}

function shipping_cost()
{
  if($_POST['shipping'] == 'free')
  {
    return 0;
  }
  else if($_POST['shipping'] == 'overnight')
  {
    return 50;
  }
  else
  {
    return 5;
  }
}
?>