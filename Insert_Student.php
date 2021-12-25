<?php
include "connection.php";

$reg=$_POST['Registration_Number'];
$name=$_POST['Name'];
$address=$_POST['Address'];
$date=$_POST['Date'];

$query="insert into student(Registration_Number,Name,Address,Date_of_Admission) VALUES ('$reg','$name','$address','$date')";

$send=mysqli_query($connection,$query);

if($send){
    echo "Record inserted.";
}else{
    echo "Record not inserted.";
}

