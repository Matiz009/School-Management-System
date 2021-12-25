<?php

include "connection.php";

$class_name=$_POST['class_name'];
$section=$_POST['section'];
$strength=$_POST['strength'];

if($class_name!=''|| $section!='' ||$strength!='' ){
    $query="insert into class(Class_Name,Class_Section,Class_Strength) VALUES ('$class_name','$section','$strength')";
    $send=mysqli_query($connection,$query);
    if($send){
        echo "Record Inserted";
    }else{
        echo "Record Not Inserted";
    }
}else{
    echo "Failed to insert your record";
}