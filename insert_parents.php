<?php

include "connection.php";

$query= "Select Registration_Number from student";
$result= mysqli_query($connection,$query);

$reg=$_POST['Registration_Number'];
$user=$_POST['Name'];
$password=$_POST['Password'];





while ($record=mysqli_fetch_assoc($result)){
    if($record=$reg){
        $query2="insert into parents(Student_Parent_Id,Parent_Usernames,Passwords) values ('$reg','$user','$password')";
        $send_q=mysqli_query($connection,$query2);
        if($send_q) {
            echo "inserted";
        }else{
            echo"not inserted";
        }

    }else{
        echo"not inserted";
    }
}
