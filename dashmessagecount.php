<?php
include('dbConnection/dbconn.php');

$conn = mysqli_connect('localhost', 'root', '', 'donation_plus');
if (!$conn) {
    die("Connection failed");
}
$sql = "SELECT * FROM contact";
$query = $conn->query($sql);
echo "<h1>" . $query->num_rows . "</h1>";