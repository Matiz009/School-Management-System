<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>

</head>

<body>
<h1 style="color: black">Student Results</h1>
<table border="2px" cellpadding="20px" cellspacing="20px" style="border-collapse: collapse">
    <tr style="text-align: center">
        <th>Registration Number</th>
        <th>Result type</th>
        <th>Result Status</th>

    </tr>
    <?php

    include "connection.php";
    $id=$_POST['Reg'];
    $query= "Select * from result where Registration_Number='$id' ";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['Registration_Number']; ?></td>
            <td><?php  echo $record['Result_status']; ?></td>
            <td><?php  echo $record['Result_type']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>
<a href="Result.html"><input type="button" value="Go Back"style="color: black"></a>
</body>
</html>
