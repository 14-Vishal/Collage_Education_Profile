<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 23-09-2016
 * Time: 22:04
 */
include 'connection.php';
if (isset($_POST['FS']) && isset($_POST['FF']) && isset($_POST['FE']) && isset($_POST['F5']) && isset($_POST['F4']) && isset($_POST['F3']) && isset($_POST['F2']) && isset($_POST['F1'])) {
    $stuname = $_POST['FS'];
    $facname = $_POST['FF'];
    $semester = $_POST['FE'];
    $5 = $_POST['F5'];
    $4 = $_POST['F4'];
    $3 = $_POST['F3'];
	$2 = $_POST['F2'];
	$1 = $_POST['F1'];
    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO teachers VALUES ('$stuname','$facname','$semester','$F5','$F4','$F3','$F2','F1')");
if ($q) {
    $message = "Feedback sended.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:feedback.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.html");

}
?>