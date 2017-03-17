 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glpi";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {

    die("Connection failed: " . $conn->connect_error);
}
   //echo "Connected successfully";
?> 