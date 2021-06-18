  <?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "onlinepharmacy";
// Create connection
$con = mysqli_connect($servername, $user, $password,$db);
// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}
