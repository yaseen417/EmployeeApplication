<?php
$servername = "localhost";
$username = "root";
$password = "yaseen";
$dbname = "test";

// Create connection
//$conn = new mysqli("$servername", "$username", "$password", "$dbname");
//mysql_connect($servername,$username,$password);
//mysql_select_db($dbname);

$conn = mysql_connect("localhost:3306", "root", ""); // Establishing Connection with Server
if(! $conn){
    die("Connection failed: " . mysql_error());
}


// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

mysql_select_db('test');

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

echo '$name','$email', '$age','$address','$mobile';

$sql = "INSERT INTO employee (id,name,email,age,address,mobile)
VALUES (NULL,'$name', '$email', '$age','$address','$mobile')";

$insert = mysql_query($sql, $conn);

if ($insert) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysql_close($conn);

?>  