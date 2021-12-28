
<?php


include "connection.php";

$reg= $_POST['Registration_Number'];

$registration=$_REQUEST['Registration_Number'];

if($registration!==''){

    $query = "Delete from parents where Student_Parent_Id = '$reg' ";

    $send_query = mysqli_query($connection, $query);


    if ($send_query) {
        echo "Record Deleted!!!";
    } else {
        echo "Record NOT Deleted!!!";
    }

}else{
    echo "Can not perform your task.";
}

