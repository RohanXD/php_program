<html>
<head>
<title>Store Data</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproj";

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pass=$_POST['psw'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql="INSERT INTO details VALUES ('".$name."','".$email."','".$mobile."','".$psw."')";

if ($conn->query($sql) === TRUE) {
    	$_SESSION['username']=$email;
	header("Location:success.php");} 
else{echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
?>
</body>
</html>
