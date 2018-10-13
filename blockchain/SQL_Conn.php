<?php
define("SERVER", "localhost");
define("username", "root");
define("password", "austubhK16");
define("BC_DB", "FarmCraft");
// include 'createBlockChain.php';
# Create connection
$conn = new mysqli(SERVER, username, password, BC_DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$obj = [
  "name" => "Kaustubh Murumkar",
  "id" => '1',
  "comm" => "Wheat",
  "qty" => '10',
  "price" => '100',
  "hash" => sha1("Kaustubh Murumkar".'1'.'Wheat'.'10'.'100')
];


$sql = "SELECT * FROM `BuyerData`";
$result = $conn->query($sql);
// echo strlen($results);
if ($result->num_rows > 0) {
    // output data of each row
    // $result = mysqli_query($conn, $sql);
    echo "<pre>";
    while($row = $result->fetch_assoc()) {
        // print_r($row);
        foreach ($row as $key) {
          echo $key."<br>";
        }
    }
    echo "</pre>";
} else {
    echo "0 results";
}
$sql2 = "INSERT INTO `BuyerData` (`BName`, `Id`, `Commodity`, `Qty`, `Pri`, `Hash`) VALUES ($obj->name, $obj->id, $obj->comm, $obj->qty, $obj->price, $obj->hash)";
echo $conn->query($sql);


$conn->close();

 ?>
