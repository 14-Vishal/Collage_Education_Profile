<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 02-09-2016
 * Time: 23:29
 */
session_start();
include 'connection.php';
if (isset($_POST['UN'])) {
    $stu = $_POST['UN'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT student_name FROM students WHERE st_id = '$stu'");
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    $_SESSION['loggedin_name'] = $row['student_name'];
    $_SESSION['loggedin_id'] = $stu;
    header("Location:studentpage.php");
} else {
    $message = "Username incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    echo 'welcome ' . $row['name'];
} else {
    $message = "Invalid student Number.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>
