<html>

<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function OpenCon()
 {
	$dbhost = "10.10.20.15";
	$dbuser = "vagrant";
	$dbpass = "";
	$db = "vagrant";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	
	echo "Connected Successfully <br>";
	echo "Host: ".$dbhost."<br>";
	echo "DB: ".$db."<br>";
 
	return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
$conn = OpenCon();
CloseCon($conn);

?>


<body>
</html>