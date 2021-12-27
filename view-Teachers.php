<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Records</title>

</head>

<body>
<h1 style="color: black">Teachers Records</h1>
<table border="5px" cellpadding="2px" cellspacing="20px" style="border-collapse: collapse">
    <tr style="text-align: center">
        <th>Full Name</th>
        <th>Teacher Name</th>
        <th>Password</th>
        <th>Salary</th>
        <th>Designation</th>
    </tr>
    <?php

    include "connection.php";
    $query= "Select * from teacher";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['Teacher_Id']; ?></td>
            <td><?php  echo $record['Teacher_Name']; ?></td>
            <td><?php  echo $record['Teacher_Designation']; ?></td>
            <td><?php  echo $record['salary']; ?></td>
            <td><?php  echo $record['Teacher_Password']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>
<a href="Insert_Teacher.html"><input type="button" value="Go Back"style="color: cornflowerblue"></a>
</body>
</html>
