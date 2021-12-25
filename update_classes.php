
<?php

include "connection.php";


$class=$_POST['class_name'];
$section=$_POST['section'];
$strength=$_POST['strength'];

$query="update class set Class_Strength='$strength' where Class_Name='$class' and Class_Section='$section'";
$send=mysqli_query($connection,$query);
if($send){
    echo "Record updated";
}else{
    echo "Record not updated";
}
