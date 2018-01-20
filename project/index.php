
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test1";

$conn = mysqli_connect($servername, $username, $password, $db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$result = "";

if(isset($_POST['data'])){
	$request = $_POST['data'];

	$sql = "SELECT *  FROM users WHERE name='$request'";
	$result = mysqli_query($conn, $sql);
	//echo $_GET['ID']; // 12
	//print_r($result);

$i=0;
while($row = mysqli_fetch_assoc($result)) {
$data[$i++]=[
    'name'=> $row['name'],
    'email'=> $row['email'],
    ];

}
    echo json_encode($data);

}

?>

