<?PHP
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

$id=$_GET['id'];

	// $mobile = $_GET['mobile'];
    $sql = "DELETE FROM employee where id='$id'";
    mysql_select_db("test");
     mysql_query( $sql, $conn );
    //echo "<script>";
    //echo "$('#dName').val(".Srows['name'].")";
    //echo "</script>";
    mysql_close($conn);
?>