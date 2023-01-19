
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Ecomm";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO carrent 
VALUES 
(1,'2023-01-21'),
(1,'2023-01-25'),
(1,'2023-01-29'),
(1,'2023-02-01'),
(1,'2023-01-21'),
";
if ($conn->query($sql) === TRUE) {

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
?>