<?php

include ("connection.php");

$password=$_POST['Password'];
$verify=$_POST['confirmPassword'];

$user=$_REQUEST['Login_ID'];
$login_id=$_POST['Login_ID'];

if($password!='' and $verify!='' and $user=!''){

  if($password==$verify){
      $query="update admission_office set Password='$verify' where Login_ID='$login_id'";
    $update=mysqli_query($connection,$query);
     if($update){
        echo "Your password has been changed";
        ?>
        <br>
        <a href="Login.php">Click here to Login</a>
        <?php
    }else{
        echo "Failed to update the password";
     }
   }else{
    echo "Failed to update your password.";
    ?>
    <br>
    <a href="Login.php">Click here to Try Again.</a>
    <?php

  }


} else{
    echo "Password must not be empty";
}

