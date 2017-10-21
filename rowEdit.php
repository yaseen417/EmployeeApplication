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
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

echo '$name','$email', '$age','$address','$mobile';

$sql = "UPDATE  employee set name= '$name',email='$email',age='$age',address='$address',mobile='$mobile' where id='$id'";


$insert = mysql_query($sql, $conn);

if ($insert) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysql_close($conn);

?>  