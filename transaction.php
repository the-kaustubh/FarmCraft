<!DOCTYPE html>
<html>
<head>
  <meta content="text/html">
  <title>Transaction</title>
  </head>
<body  bgcolor="#9ce575">
<center>
    <h1>Transaction
<?php

if(isset($_REQUEST['submit'])) {
  $utype = $_REQUEST['uType'];
  $id    = $_REQUEST['uid'];
  $uname = $_REQUEST['uname'];
  $comm  = $_REQUEST['comm'];
  $qty   = $_REQUEST['qty'];
  $price = $_REQUEST['price'];

  // str_replace("{farmer}", $uname, $sqlFarmer);
  }
 ?>
 </h1>
<!-- <form action="<?php #echo $_SERVER['PHP_SELF'];?>" method="post"> -->

 <form action="http://localhost/FarmCraft/blockchain/addTransaction.php" method="post">
  User Type :-
  <select name="uType">
    <option value="farmer">Farmer</option>
    <option value="buyer">Buyer</option>
  </select>
  <input type="hidden" name="ASSOC">
  <pre>
  User ID:   <input type="text" name="uid"><br><br>
  User name: <input type="text" name="uname"><br><br>
  Comodity:  <input type="text" name="comm"><br><br>
  Quantity:  <input type="text" name="qty"><br><br>
  Price:     <input type="text" name="price"><br><br>
  </pre>
  <input type="submit" value="go">
</form>
</center>
</body>
</html>
