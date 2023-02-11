<?php
$dbUser = 'root'; // User of Database
$dbHost = 'localHost'; // Route of Server
$dbPassword = ''; // Pass
$dbName = 'webdev3b'; // Database Name

try {
    $connect = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
} catch (\Throwable $th) {
    echo $th;
}

?>