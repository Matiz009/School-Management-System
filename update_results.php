<?php

include "connection.php";

$query= "Select Registration_Number from student";
$result= mysqli_query($connection,$query);

$reg=$_POST['Reg'];
$type=$_POST['type'];
$status=$_POST['status'];





while ($record=mysqli_fetch_assoc($result)){
    if($record=$reg){
        $query2="update result set Result_status='$status',Result_type='$type' where Registration_Number='$reg'";
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