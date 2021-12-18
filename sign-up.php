<?php
include ('connection.php');

$Login_Id=$_POST['Login_ID'];
$email=$_POST['email'];
$password=$_POST['Password'];
 if($Login_Id!='' and $password!='' and $email!=''){


         $query="insert into admission_office(Login_ID,Password,email) VALUES ('$Login_Id','$password','$email')";
         $update=mysqli_query($connection,$query);

         if($update){
             echo "Account has been Created";
             ?>
             <?php

         }else{
             echo "Failed to create account";
             ?>
             <br>
             <a href="updateAttendance.html">Click here to try again.</a>
             <?php

         }


 }else{
     echo "Email and password must not be empty";
 }