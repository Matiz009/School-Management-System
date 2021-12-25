<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class</title>

</head>

<body style="background-color: grey">

<h1 style="color: Black">Class Information</h1>

<table border="5px" cellpadding="5px" cellspacing="5px" style="border-collapse: collapse">
    <tr style="text-align: center">
        <th >Class Name</th>
        <th>Section</th>
        <th>Strength</th>
    </tr>
    <?php

    include "connection.php";
    $query= "Select * from class";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['Class_Name']; ?></td>
            <td><?php  echo $record['Class_Section']; ?></td>
            <td><?php  echo $record['Class_Strength']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>

<a href="insert_class.html"><input type="button" value="Back" style="background-color: black;color: white"></a>
</body>
</html>

