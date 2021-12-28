<?php

include "connection.php";


$reg=$_POST['Registration_Number'];
$name=$_POST['Name'];
$Password=$_POST['Password'];

if($reg!='' || $name!='' || $Password!='') {
    $query="update parents set Parent_Usernames='$name',Passwords='$Password' where Student_Parent_Id='$reg'";
    $send = mysqli_query($connection, $query);
    if ($send) {
        echo "Record updated";
    } else {
        echo "Record not updated";
    }
}


