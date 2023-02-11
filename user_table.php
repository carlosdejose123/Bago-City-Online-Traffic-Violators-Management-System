<?php
include 'Controller/get_all_user.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    body{
        color:black;
    }
    table, th, td{
        border: solid 1px blue;
    }
    

    </style>
</head>

<body>
   <table>
    <thead>
        <tr>
           color:red; <th>Id</th>
            <th>Name</th>
            <th>Year Level</th>
            <th>Section</th>
            <th>Department</th>

        </tr>
    </thead>
<body>
<?php while ($row = mysqli_fetch_assoc($results)) { ?>
<tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['F_NAME']; ?> <?php echo $row['M_NAME']; ?> <?php echo $row['L_NAME']; ?></td >
    <td><?php echo $row['YEAR LEVEL']; ?></td>
    <td><?php echo $row['SECTION']; ?></td>
    <td><?php echo $row['DEPARTMENT']; ?></td>
</tr>
<?php }?>
</body>
<table>       
</body>
</html>