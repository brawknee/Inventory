<?php 	

define('localhost', 'localhost:3307');
define('username', 'root');
define('password', '');
define('dbname', 'store');

//$localhost = "localhost";
//$username = "root";
//$password = "";
//$dbname = "store";

// db connection
//$connect = new mysqli($localhost, $username, $password, $dbname);
$connect = mysqli_connect(localhost, username, password, dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// check connection
//if($connect->connect_error) {
//  die("Connection Failed : " . $connect->connect_error);
//} else {
  // echo "Successfully connected";
//}

?>