<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test_db";

$conn = mysqli_connect($servername, $username, $password, $db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$result = "";;

if(isset($_GET['ID'])){
	$ID = $_GET['ID'];
	$sql = "SELECT *  FROM info WHERE ID='$ID'";
	$result = mysqli_query($conn, $sql);
	//echo $_GET['ID']; // 12
	print_r($result);
	
	
	
}

/*
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
?>

