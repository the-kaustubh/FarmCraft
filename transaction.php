<!DOCTYPE html>
<html>
<head>
<meta content="text/html">
<title>Transaction</title>
<link rel="stylesheet" href="style.c">
</head>
<?php

define("SERVER", "localhost");
define("username", "root");
define("password", "*******");
define("BC_DB", "FarmCraft");
// include 'blockchain/SQL_Conn.php';
$conn = mysqli_connect(SERVER, username, password, BC_DB);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if(isset($_REQUEST['submit'])) {
echo $_REQUEST['submit'];
$utype = $_REQUEST['uType'];
$uname = $_REQUEST['uname'];
$id = $_REQUEST['uid'];
$comm = $_REQUEST['comm'];
$qty = $_REQUEST['qty'];
$price = $_REQUEST['price'];
$uid = 'trial';
echo $uid."<br>";
settype($id, "int");
settype($qty, "int");
settype($price, "int");
$hash = sha1($comm.$qty.$price.$uid);
$sqlFarmer = "INSERT INTO FarmerData(FName, Id, Commodity, Qty, Price, Hash, uniqueId) VALUES ('$uname', '$id', '$comm', '$qty', '$price', '$hash', '$uid');";
$sqlBuyer = "INSERT INTO BuyerData (BName, Id, Commodity, Qty, Price, Hash, uniqueId) VALUES ('$uname', '$id', '$comm', '$qty', '$price', '$hash', '$uid')";

if($utype === "farmer")
$sql = $sqlFarmer;
else $sql = $sqlBuyer;
echo $sql;
}
?>
<body  bgcolor="#9ce575">
<h1>Transaction</h1>
<!-- <form action="<?php #echo $_SERVER['PHP_SELF'];?>" method="post"> -->
<div class="form">
<form action="http://localhost<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
User Type :-
<select name="uType">
<option value="farmer">Farmer</option>
<option value="buyer">Buyer</option>
</select>
<input type="hidden" name="ASSOC">
User ID:   <input type="text" name="uid"><br><br>
User name: <input type="text" name="uname"><br><br>
Comodity:  <input type="text" name="comm"><br><br>
Quantity:  <input type="text" name="qty"><br><br>
Price:     <input type="text" name="price"><br><br>
<input type="submit" name="submit" value="go">
</form>
</div>
</body>
</html>
