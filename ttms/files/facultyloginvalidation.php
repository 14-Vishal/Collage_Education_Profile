<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 02-09-2016
 * Time: 23:28
 */

include 'connection.php';
if (isset($_POST['FN']) && isset($_POST['FP'])) {
    $id = $_POST['FN'];
    $password = $_POST['FP'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT name FROM teachers WHERE faculty_name = '$id' and password = '$password' ");
if (mysqli_num_rows($q) == 1) {
    header("Location:facultypage.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>