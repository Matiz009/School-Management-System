<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sign up</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="background-image: url('Brookfield+LOGO+clear+copyico.png');background-repeat: no-repeat;background-attachment: fixed;background-size: 400px;margin-left: 20px;margin-top: 100px">

<div id="login" style="margin-top: 13%">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="facultyLogin.php" method="post">
                        <h1 style="color: darkslategray;text-align: center;font-family: 'Britannic Bold'">Faculty Login</h1>
                        <div class="form-group">
                            <label  style="color: darkslategray"><h6>User ID:</h6></label><br>
                            <input type="text" name="Login_ID"  class="form-control" placeholder="hammad456" id="user">
                            <label  style="color: darkslategray"><h6>Password:</h6></label><br>
                            <input type="password" name="Password"  class="form-control" id="password" >
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn badge-dark" value="Login" onclick="checkEmpty()">
                            <a href="Main.html"><input type="button" class="btn badge-dark" style="float: right" value="Back"></a><br>
                            <br>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkEmpty(){
        let x=document.getElementById("user").value;
        let y =document.getElementById("password").value;
        if(x=='' || y==''){
            alert("User Id/Password must not be empty");
        }
    }
</script>

</body>
</html>

<?php

include "connection.php";


if(isset($_POST['Login_ID'])){

    $Login= $_POST['Login_ID'];

    $pass = $_POST['Password'];

    $query = "SELECT * from teacher WHERE Teacher_Id='".$Login."' AND Teacher_Password='".$pass."' ";


    $result= mysqli_query($connection,$query);

    if(mysqli_num_rows($result)==1){


        header("Location: Admin.html");
        exit();
    }
    else {
        echo "<br>";
        die("Wrong Username or Password". mysqli_error($connection));
    }
}
?>

