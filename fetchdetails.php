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

	// $mobile = $_GET['mobile'];
    $sql = "SELECT * FROM employee";
    mysql_select_db("test");
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not get data: ' . mysql_error());
    }
    $rows = array();
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
        $rows[] = $row;
    }
    $result = json_encode($rows);
    echo $result;
    //echo "<script>";
    //echo "$('#dName').val(".Srows['name'].")";
    //echo "</script>";
    mysql_close($conn);
?>