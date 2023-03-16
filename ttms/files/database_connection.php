<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=ttms","root","");



function get_total_records($connect, $table_name)
{
	$query = "SELECT * FROM $table_name";
	$statement = $connect->prepare($query);
	$statement->execute();
	return $statement->rowCount();
}

function load_course_list($connect)
{
	$query = "
	SELECT * FROM course ORDER BY course_name ASC
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '<option value="'.$row["course_id"].'">'.$row["course_name"].'</option>';
	}
	return $output;
}

function get_attendance_percentage($connect, $st_id)
{
	$query = "
	SELECT 
		ROUND((SELECT COUNT(*) FROM attendance 
		WHERE attendance_status = 'Present' 
		AND st_id = '".$st_id."') 
	* 100 / COUNT(*)) AS percentage FROM attendance 
	WHERE st_id = '".$st_id."'
	";

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		if($row["percentage"] > 0)
		{
			return $row["percentage"] . '%';
		}
		else
		{
			return 'NA';
		}
	}
}

function Get_student_name($connect, $st_id)
{
	$query = "
	SELECT student_name FROM students 
	WHERE st_id = '".$st_id."'
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	foreach($result as $row)
	{
		return $row["student_name"];
	}
}

function Get_student_course_name($connect, $st_id)
{
	$query = "
	SELECT course.course_name FROM students 
	INNER JOIN course 
	ON course.course_id = students.student_course_id 
	WHERE students.st_id = '".$st_id."'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['course_name'];
	}
}

function Get_student_faculty_name($connect, $st_id)
{
	$query = "
	SELECT teachers.faculty_name 
	FROM students 
	INNER JOIN course 
	ON course.course_id = students.student_course_id 
	INNER JOIN teachers 
	ON teachers.teacher_course_id = course.course_id 
	WHERE students.st_id = '".$st_id."'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["faculty_name"];
	}
}

function Get_course_name($connect, $course_id)
{
	$query = "
	SELECT course_name FROM course 
	WHERE course_id = '".$course_id."'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["course_name"];
	}
}

?>