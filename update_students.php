<?php

include "connection.php";


$id=$_POST['id'];
$address=$_POST['address'];
$date=$_POST['date'];
$name=$_POST['name'];

$query="update student set Name='$name',Address='$address',Date_of_Admission='$date' where Registration_Number='$id'";
$send=mysqli_query($connection,$query);
if($send){
    echo "Record updated";
}else{
    echo "Record not updated";
}


