<?php
    include "dbcon.php";
    include "encryption.php";

    session_start();


    $email =    $_POST["email"];
    //$password =  $_POST['password'];
    $password =  encryption($_POST["password"]);


    $table = "user_accounts";
    $where = "(email = '$email' OR user_name = '$email') AND password = '$password'";

    $select = "*";

    $sql = "SELECT $select FROM $table where $where";
    $result = $conn->query($sql);


    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();
        setcookie('UID', encryption($row["uid"]), time() + 12000, "/");
        setcookie('email', encryption($row["email"]), time() + 12000, "/");
        

        // echo $uid = $row["email"];
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php?error=''");
       
    }
?>