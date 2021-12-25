<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Records</title>

</head>

<body>
<h1 style="color: black">Student Records</h1>
<table border="5px" cellpadding="2px" cellspacing="20px" style="border-collapse: collapse">
    <tr style="text-align: center">
        <th>Registration Number</th>
        <th>Student Name</th>
        <th>Address</th>
        <th>Date of Admission</th>
    </tr>
    <?php

    include "connection.php";
    $query= "Select Registration_Number,Name,Address,Date_of_Admission from student";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['Registration_Number']; ?></td>
            <td><?php  echo $record['Name']; ?></td>
            <td><?php  echo $record['Address']; ?></td>
            <td><?php  echo $record['Date_of_Admission']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>
<a href="Insert_Student.html"><input type="button" value="Go Back"style="color: cornflowerblue"></a>
</body>
</html>
