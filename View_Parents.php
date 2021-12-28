<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parents</title>

</head>

<body>
<h1 style="color: black">Parents Info</h1>
<table border="2px" cellpadding="20px" cellspacing="20px" style="border-collapse: collapse">
    <tr style="text-align: center">
        <th>Registration Number</th>
        <th>User Name</th>
        <th>Password</th>

    </tr>
    <?php

    include "connection.php";
    $query= "Select * from parents";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['Student_Parent_Id']; ?></td>
            <td><?php  echo $record['Parent_Usernames']; ?></td>
            <td><?php  echo $record['Passwords']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>
<a href="insert_Parents.html"><input type="button" value="Go Back"style="color: black"></a>
</body>
</html>

