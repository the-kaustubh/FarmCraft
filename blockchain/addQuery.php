<?php
include 'SQL_Conn.php';

$utype =  'farmer';
$id  =  2;
$uname =  'Vedant';
$comm =  'rice';
$qty  =  20;
$price =  2000;
$uid = 1;
echo $uname;
$hash = sha1($utype.$id.$uname.$comm);
echo $hash;
 $sql = "INSERT INTO `FarmerData` (`FName`, `Id`, `Commodity`, `Qty`, `Pri`, `Hash`, `uniqueId`) VALUES (`".$uname."`, `".$id."`, `".$comm."`, `".$qty."`, `".$price."`, `".$hash."`, `".$uid."`);";
 echo "<br>".$sql;

$result = $conn->query($sql);
 ?>
