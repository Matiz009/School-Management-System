<?php

include ("connection.php");

$User=$_POST['User'];
$verify=$_POST['confirmUser'];

$email=$_REQUEST['email'];
$email=$_POST['email'];

if($email!='' and $verify!='' and $user=!''){

    if($User==$verify){
        $query="update admission_office set Login_ID='$verify' where email='$email'";
        $update=mysqli_query($connection,$query);
        if($update){
            echo "Your User ID has been changed";
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

