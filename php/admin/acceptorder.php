<?php
include "../dbcon.php";
include "../sendSMS.php";

$uid = $_GET['uid'];
$orderid = $_GET['orderid'];
$date_from = $_GET['date_from'];



$sql = "UPDATE rent_order SET stts = 'Accept' WHERE orderid = $orderid";

if ($conn->query($sql) === TRUE) {
    //get user phone no and fname and lname
    $sql = "SELECT phoneNo,fname ,lname FROM user_accounts WHERE uid = $uid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $phone = $row['phoneNo'];
        $fname = $row['fname'];
        $lname = $row['lname'];

        $msg = "Speed Rent \n\nDear $fname $lname, \nYour order has been accepted. \nOrder ID: $orderid \nDate: $date_from \n\nThank you for using Speed Rent.";
        sendSMS($phone, $msg);
        header("location: ../../admin.php");
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
