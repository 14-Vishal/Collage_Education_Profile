<?php

//attendance_action.php

include('database_connection.php');

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "fetch")
	{
		$query = "
		SELECT * FROM attendance 
		INNER JOIN students 
		ON students.st_id = attendance.st_id 
		INNER JOIN course 
		ON course.course_id = students.student_course_id 
		WHERE attendance.faculty_number = '".$_SESSION["loggedin_id"]."' AND (
		";

		if(isset($_POST["search"]["value"]))
		{
			$query .= '
			students.student_name LIKE "%'.$_POST["search"]["value"].'%" 
			OR students.student_roll_number LIKE "%'.$_POST["search"]["value"].'%" 
			OR attendance.attendance_status LIKE "%'.$_POST["search"]["value"].'%" 
			OR attendance.attendance_date LIKE "%'.$_POST["search"]["value"].'%") 
			';
		}
		if(isset($_POST["order"]))
		{
			$query .= '
			ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' 
			';
		}
		else
		{
			$query .= '
			ORDER BY attendance.attendance_id DESC 
			';
		}

		if($_POST["length"] != -1)
		{
			$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$data = array();
		$filtered_rows = $statement->rowCount();
		foreach($result as $row)
		{
			$sub_array = array();
			$status = '';
			if($row["attendance_status"] == "Present")
			{
				$status = '<label class="badge badge-success">Present</label>';
			}

			if($row["attendance_status"] == "Absent")
			{
				$status = '<label class="badge badge-danger">Absent</label>';
			}

			$sub_array[] = $row["student_name"];
			$sub_array[] = $row["student_roll_number"];
			$sub_array[] = $row["course_name"];
			$sub_array[] = $status;
			$sub_array[] = $row["attendance_date"];
			$data[] = $sub_array;
		}

		$output = array(
			'draw'				=>	intval($_POST["draw"]),
			"recordsTotal"		=> 	$filtered_rows,
			"recordsFiltered"	=>	get_total_records($connect, 'attendance'),
			"data"				=>	$data
		);

		echo json_encode($output);
	}

	if($_POST["action"] == "Add")
	{
		$attendance_date = '';
		$error_attendance_date = '';
		$error = 0;
		if(empty($_POST["attendance_date"]))
		{
			$error_attendance_date = 'Attendance Date is required';
			$error++;
		}
		else
		{
			$attendance_date = $_POST["attendance_date"];
		}

		if($error > 0)
		{
			$output = array(
				'error'							=>	true,
				'error_attendance_date'			=>	$error_attendance_date
			);
		}
		else
		{
			$st_id = $_POST["st_id"];
			$query = '
			SELECT attendance_date FROM attendance 
			WHERE faculty_number = "'.$_SESSION["loggedin_id"].'" 
			AND attendance_date = "'.$attendance_date.'"
			';
			$statement = $connect->prepare($query);
			$statement->execute();
			if($statement->rowCount() > 0)
			{
				$output = array(
					'error'					=>	true,
					'error_attendance_date'	=>	'Attendance Data Already Exists on this date'
				);
			}
			else
			{
				for($count = 0; $count < count($st_id); $count++)
				{
					$data = array(
						':st_id'			=>	$st_id[$count],
						':attendance_status'	=>	$_POST["attendance_status".$st_id[$count].""],
						':attendance_date'		=>	$attendance_date,
						':faculty_number'			=>	$_SESSION["loggedin_id"]
					);

					$query = "
					INSERT INTO attendance 
					(st_id, attendance_status, attendance_date, faculty_number) 
					VALUES (:st_id, :attendance_status, :attendance_date, :faculty_number)
					";
					$statement = $connect->prepare($query);
					$statement->execute($data);
				}
				$output = array(
					'success'		=>	'Data Added Successfully',
				);
			}
		}
		echo json_encode($output);
	}

	if($_POST["action"] == "index_fetch")
	{
		$query = "
		SELECT * FROM attendance 
		INNER JOIN students 
		ON students.st_id = attendance.st_id 
		INNER JOIN course 
		ON course.course_id = students.student_course_id 
		WHERE attendance.faculty_number = '".$_SESSION["loggedin_id"]."' AND (
		";
		if(isset($_POST["search"]["value"]))
		{
			$query .= '
			students.student_name LIKE "%'.$_POST["search"]["value"].'%" 
			OR students.student_roll_number LIKE "%'.$_POST["search"]["value"].'%" 
			OR course.course_name LIKE "%'.$_POST["search"]["value"].'%" )
			';
		}
		$query .= 'GROUP BY students.st_id ';
		if(isset($_POST["order"]))
		{
			$query .= '
			ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' 
			';
		}
		else
		{
			$query .= '
			ORDER BY students.student_roll_number ASC 
			';
		}

		if($_POST["length"] != -1)
		{
			$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$data = array();
		$filtered_rows = $statement->rowCount();
		foreach($result as $row)
		{
			$sub_array = array();
			$sub_array[] = $row["student_name"];
			$sub_array[] = $row["student_roll_number"];
			$sub_array[] = $row["course_name"];
			$sub_array[] = get_attendance_percentage($connect, $row["st_id"]);
			$sub_array[] = '<button type="button" name="report_button" id="'.$row["st_id"].'" class="btn btn-info btn-sm report_button">Report</button>';
			$data[] = $sub_array;
		}
		$output = array(
			'draw'					=>	intval($_POST["draw"]),
			"recordsTotal"		=> 	$filtered_rows,
			"recordsFiltered"	=>	get_total_records($connect, 'students'),
			"data"				=>	$data
		);
		echo json_encode($output);
	}
}


?>