<?php

include 'connection.php';
if (isset($_POST['NR']) && isset($_POST['NN']) && isset($_POST['NY']) && isset($_POST['NE'])) {
    $student_name = $_POST['NN'];
    $st_id = $_POST['NR'];
    $academic_year	= $_POST['NY'];
    $contact = $_POST['NP'];
    $email = $_POST['NE'];
	$student_roll_number = $_POST['NI'];
	
    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO students VALUES ('$st_id','$student_name','$academic_year','$contact','$email','$student_roll_number')");
$sql = "CREATE TABLE " . $st_id . " (
day int(10) PRIMARY KEY, 
No_of_working_days int(40),
Attended int(40),
Absent int(40),
Of% int(40)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $st_id . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
}
if ($q) {
    $message = "Student added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addstudents.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>