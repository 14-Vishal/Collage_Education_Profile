<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 23-09-2016
 * Time: 22:04
 */
include 'connection.php';
if (isset($_POST['TN']) && isset($_POST['TF']) && isset($_POST['TE']) && isset($_POST['TD']) && isset($_POST['AL'])) {
    $faculty_name = $_POST['TN'];
    $faculty_number = $_POST['TF'];
    $designation = $_POST['TD'];
    $alias = $_POST['AL'];
    $contact_number = $_POST['TP'];
    $emailid = $_POST['TE'];
    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO teachers VALUES ('$faculty_number','$faculty_name','$alias','$designation','$contact_number','$emailid')");
$sql = "CREATE TABLE " . $faculty_number . " (
day VARCHAR(10) PRIMARY KEY, 
period1 VARCHAR(40),
period2 VARCHAR(40),
period3 VARCHAR(40),
period4 VARCHAR(40),
period5 VARCHAR(40),
period6 VARCHAR(40),
practical VARCHAR(40)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $faculty_number . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
}
if ($q) {
    $message = "Teavher added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addteachers.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>