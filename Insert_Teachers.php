<?php

include "connection.php";

$name=$_POST['Name'];
$password=$_POST['password'];
$id=$_POST['id'];
$salary=$_POST['salary'];
$designation=$_POST['designation'];

if($name!='' || $id!='' || $password!='' || $salary!='' || $designation!=''){
    $query="insert into  teacher(Teacher_Id,Teacher_Name,Teacher_Designation,salary,Teacher_Password) VALUES ('$id','$name','$designation','$salary','$password')";
    $send=mysqli_query($connection,$query);
    if($send){
        echo "record has been added";
    }else{
        echo "record has not been added";
    }
}else{
    echo "Failed";
}