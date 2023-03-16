<?php

//report.php

if(isset($_GET["action"]))
{
	include('database_connection.php');
	require_once 'pdf.php';
	session_start();
	if($_GET["action"] == "attendance_report")
	{
		if(isset($_GET["from_date"], $_GET["to_date"]))
		{
			$pdf = new Pdf();
			$query = "
			SELECT attendance_date FROM attendance 
			WHERE faculty_number = '".$_SESSION["faculty_number"]."' 
			AND (attendance_date BETWEEN '".$_GET["from_date"]."' AND '".$_GET["to_date"]."')
			GROUP BY attendance_date 
			ORDER BY attendance_date ASC
			";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$output = '
				<style>
				@page { margin: 20px; }
				
				</style>
				<p>&nbsp;</p>
				<h3 align="center">Attendance Report</h3><br />';
			foreach($result as $row)
			{
				$output .= '
				<table width="100%" border="0" cellpadding="5" cellspacing="0">
			        <tr>
			        	<td><b>Date - '.$row["attendance_date"].'</b></td>
			        </tr>
			        <tr>
			        	<td>
			        		<table width="100%" border="1" cellpadding="5" cellspacing="0">
			        			<tr>
			        				<td><b>Student Name</b></td>
			        				<td><b>Roll Number</b></td>
			        				<td><b>Grade</b></td>
			        				<td><b>Attendance Status</b></td>
			        			</tr>
				';
				$sub_query = "
				SELECT * FROM attendance 
			    INNER JOIN students 
			    ON students.st_id = attendance.st_id 
			    INNER JOIN course 
			    ON course.course_id = students.student_course_id 
			    WHERE faculty_number = '".$_SESSION["faculty_number"]."' 
				AND attendance_date = '".$row["attendance_date"]."'
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$sub_result = $statement->fetchAll();
				foreach($sub_result as $sub_row)
				{
					$output .= '
					<tr>
						<td>'.$sub_row["student_name"].'</td>
						<td>'.$sub_row["student_roll_number"].'</td>
						<td>'.$sub_row["course_name"].'</td>
						<td>'.$sub_row["attendance_status"].'</td>
					</tr>
					';
				}
				$output .= '
					</table>
					</td>
					</tr>
				</table><br />
				';
			}
			$file_name = 'Attendance Report.pdf';
			$pdf->loadHtml($output);
			$pdf->render();
			$pdf->stream($file_name, array("Attachment" => false));
			exit(0);
		}
	}

	if($_GET["action"] == "student_report")
	{
		if(isset($_GET["st_id"], $_GET["from_date"], $_GET["to_date"]))
		{
			$pdf = new Pdf();
			$query = "
			SELECT * FROM students 
			INNER JOIN course 
			ON course.course_id = students.student_course_id 
			WHERE students.st_id = '".$_GET["st_id"]."' 
			";

			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$output = '';
			foreach($result as $row)
			{
				$output .= '
				<style>
				@page { margin: 20px; }
				
				</style>
				<p>&nbsp;</p>
				<h3 align="center">Attendance Report</h3><br /><br />
				<table width="100%" border="0" cellpadding="5" cellspacing="0">
			        <tr>
			            <td width="25%"><b>Student Name</b></td>
			            <td width="75%">'.$row["student_name"].'</td>
			        </tr>
			        <tr>
			            <td width="25%"><b>Roll Number</b></td>
			            <td width="75%">'.$row["student_roll_number"].'</td>
			        </tr>
			        <tr>
			            <td width="25%"><b>Grade</b></td>
			            <td width="75%">'.$row["course_name"].'</td>
			        </tr>
			        <tr>
			        	<td colspan="2" height="5">
			        		<h3 align="center">Attendance Details</h3>
			        	</td>
			        </tr>
			        <tr>
			        	<td colspan="2">
			        		<table width="100%" border="1" cellpadding="5" cellspacing="0">
			        			<tr>
			        				<td><b>Attendance Date</b></td>
			        				<td><b>Attendance Status</b></td>
			        			</tr>
				';
				$sub_query = "
				SELECT * FROM attendance 
				WHERE st_id = '".$_GET["st_id"]."' 
				AND (attendance_date BETWEEN '".$_GET["from_date"]."' AND '".$_GET["to_date"]."') 
				ORDER BY attendance_date ASC
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$sub_result = $statement->fetchAll();
				foreach($sub_result as $sub_row)
				{
					$output .= '
					<tr>
						<td>'.$sub_row["attendance_date"].'</td>
						<td>'.$sub_row["attendance_status"].'</td>
					</tr>
					';
				}
				$output .= '
						</table>
					</td>
					</tr>
				</table>
				';
				$file_name = 'Attendance Report.pdf';
				$pdf->loadHtml($output);
				$pdf->render();
				$pdf->stream($file_name, array("Attachment" => false));
				exit(0);
			}
		}
	}
}


?>