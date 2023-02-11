<?php session_start();
require("db_connection.php");
if (isset($_POST['Email']) &&($_POST['Password'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $_SESSION['error'] = array();
    try {
        $res = mysqli_query($connect, "SELECT * FROM users WHERE
        Email= '$Email' AND Password= '$Password'");
        $row = mysqli_fetch_assoc($res);
        if (!empty($row)) {
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Name'] = $row['Fullname'];
            header('location:  ../index.php');

        } else {
            $_SESSION['error'][] = "Wrong Username or Password";
            echo '<script language="javascript">';
            echo 'alert("Wrong Username or Password")';
            echo '</script>';
            
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}
?>