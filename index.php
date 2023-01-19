<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

function compareArrays($arr1, $arr2)
{
    $difference = [];

    foreach ($arr1 as $value) {
        if (!in_array($value, $arr2)) {
            $difference[] = $value;
        }
    }

    return $difference;
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Ecomm";

$conn = new mysqli($servername, $username, $password, $dbname);



$array1 = [1, 2, 3, 4, 5];
$array2 = [2, 4, 6, 7, 8];


// print_r($differenceArrsay);
date_default_timezone_set("Asia/Colombo");
$todayDate =  (date('Y-m-d'));
$todayMonth =  intval(date('m'));
$todayYear =  intval(date('Y'));


$getdatearray = [];
$sql = "SELECT * FROM carrent WHERE orderDate >= $todayDate";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        // echo $row['orderDate'];
        array_push($getdatearray, $row['orderDate']);

    }
}

$nextdatearray = [];
$date = date_create(date('Y-m-d'));
for ($i = 0; $i < 10; $i++) {
    date_add($date, date_interval_create_from_date_string("1 days"));
    $nextDate =  date_format($date, "Y-m-d");
    array_push($nextdatearray, $nextDate);
}

print_r($nextdatearray);
echo "<br>";
print_r($getdatearray);
$differenceArray = compareArrays($nextdatearray, $getdatearray);
echo "<br>";

print_r($differenceArray)

?>

<body>
    <form action="savedata.php" method="post">
        <select class="form-control">
            <?php
            foreach ($differenceArray as $value) {
                echo "<option>$value</option>";
            }
            ?>

        </select>

    </form>
</body>

</html>