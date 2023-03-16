<?php

//attendance_action.php

include('database_connection.php');

session_start();

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
			WHERE faculty_number = "'.$_SESSION["faculty_number"].'" 
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
						':st_id'				=>	$st_id[$count],
						':attendance_status'	=>	$_POST["attendance_status".$st_id[$count].""],
						':attendance_date'		=>	$attendance_date,
						':faculty_number'		=>	$_SESSION["faculty_number"]
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
?>