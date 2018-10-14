<?php
define("SERVER", "localhost");
define("username", "root");
define("password", "root");
define("BC_DB", "FarmCraft");
// include 'createBlockChain.php';
// # Create connection
// $conn = new mysqli(SERVER, username, password, BC_DB);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
//

$conn = mysqli_connect(SERVER, username, password, BC_DB);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$obj = [
  "name" => "Kaustubh Murumkar",
  "id" => '1',
  "comm" => "Wheat",
  "qty" => '10',
  "price" => '100',
  "hash" => sha1("Kaustubh Murumkar".'1'.'Wheat'.'10'.'100')
];

$sqlBuyer = "INSERT INTO `BuyerData` (`BName`, `Id`, `Commodity`, `Qty`, `Pri`, `Hash`, `uniqueId`) VALUES (`{buyer}`, `{ID}`, `{comm}`, `{Qty}`, `{price}`, `{Hash}`, `{UID}`)";

// $sqlFarmer = "INSERT INTO FarmerData (FName, Id, Commodity, Qty, Price, Hash, uniqueId) VALUES ('Vedant', '8', 'asdf', 45, '450', 'qweertyuui', 'UID')";

// $sql = "INSERT INTO `BC_DB`.`FarmerData`(`FName`, `Id`, `Commodity`, `Qty`, `Pri`, `Hash`, `uniqueId`) VALUES (`Vedant`, 5, `Rice`, 20, 200, `asdad`, `234`);";
// $sql = "SELECT * from FarmerData";
// / Create connection

// if ($conn->query($sqlFarmer) === TRUE) {
//     echo "New record created successfully";
//     echo $sqlFarmer;
// } else {
//     echo "Error: " . $sqlFarmer . "<br>" . $conn->error;
// }
 ?>
