<?php
include 'Controller/db_connection.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiskanAnoLang</title>
</head>
<body>
    <form action='Controller/login_user.php' method= "POST">
         <input type="text" placeholder="Input Email" name= "Email"/>
         <input type="password" placeholder="Input Password" name = "Password"/>
         <button type="Submit">LOGIN</button>
    </form>     

</body>
</html>