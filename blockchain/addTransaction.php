<?php
// include 'SQL_Conn.php';

$utype =  $_REQUEST['uType'];
$id  =  $_REQUEST['uid'];
$uname =  $_REQUEST['uname'];
$comm =  $_REQUEST['comm'];
$qty  =  $_REQUEST['qty'];
$price =  $_REQUEST['price'];
$uid = 1;
echo $uname;
$hash = sha1($utype.$id.$uname.$comm);
echo $hash;
if($utype == 'farmer') {
 $sql = "INSERT INTO `FarmerData` (`FName`, `Id`, `Commodity`, `Qty`, `Pri`, `Hash`, `uniqueId`) VALUES (`".$uname."`, `".$id."`, `".$comm."`, `".$qty."`, `".$price."`, `".$hash."`, `".$uid."`);";
 echo "<br>".$sql;
}
elseif ($utype == 'buyer') {
 $sql = $sqlBuer;
}

$result = $conn->query($sql);
echo $conn->error;

 ?>
