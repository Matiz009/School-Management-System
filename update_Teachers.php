<?php

include "connection.php";


$id=$_POST['id'];
$password=$_POST['password'];
$salary=$_POST['salary'];
$name=$_POST['Name'];
$designation=$_POST['designation'];

if($id!=''||$password!=''||$salary!=''||$name!=''||$designation!='') {
    $query = "update teacher set Teacher_Name='$name',Teacher_Designation='$designation',salary='$salary',Teacher_Password='$password' where Teacher_Id='$id'";
    $send = mysqli_query($connection, $query);
    if ($send) {
        echo "Record updated";
    } else {
        echo "Record not updated";
    }
}


