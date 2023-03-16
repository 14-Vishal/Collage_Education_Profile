<?php

//chart.php
include('database_connection.php');

session_start();

$present_percentage = 0;
$absent_percentage = 0;
$total_present = 0;
$total_absent = 0;
$output = "";

$query = "
SELECT * FROM attendance 
WHERE st_id = '".$_GET['st_id']."' 
AND attendance_date >= '".$_GET["from_date"]."' 
AND attendance_date <= '".$_GET["to_date"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

foreach($result as $row)
{
	$status = '';
	if($row["attendance_status"] == "Present")
	{
		$total_present++;
		$status = '<span class="badge badge-success">Present</span>';
	}

	if($row["attendance_status"] == "Absent")
	{
		$total_absent++;
		$status = '<span class="badge badge-danger">Absent</span>';
	}

	$output .= '
		<tr>
			<td>'.$row["attendance_date"].'</td>
			<td>'.$status.'</td>
		</tr>
	';

	$present_percentage = ($total_present/$total_row) * 100;
	$absent_percentage = ($total_absent/$total_row) * 100;

}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
			<li><a href="#">Hello <?php echo $_SESSION['loggedin_name']; ?></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
			<li><a href="attendance.php">ATTENDANCE </a></li>
			<li><a href="facultypage.php">TIMETABLE</a></li>
			<li><a href="statistics.php"> STATISTICS</a></li>
             <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>
<!--Algorithm Implementation-->
<div class="container" style="margin-top:30px">
  <div class="card">
  	<div class="card-header"><b>Attendance Chart</b></div>
  	<div class="card-body">
      <div class="table-responsive">
        
        <table class="table table-bordered table-striped">
          <tr>
            <th>Student Name</th>
            <td><?php echo Get_student_name($connect, $_GET["st_id"]); ?></td>
          </tr>
          <tr>
            <th>Grade</th>
            <td><?php echo Get_student_course_name($connect, $_GET["st_id"]); ?></td>
          </tr>
          <tr>
            <th>Teacher Name</th>
            <td><?php echo Get_student_faculty_name($connect, $_GET["st_id"]); ?></td>
          </tr>
          <tr>
            <th>Time Period</th>
            <td><?php echo $_GET["from_date"] . ' to '. $_GET["to_date"]; ?></td>
          </tr>
        </table>

        <div id="attendance_pie_chart" style="width: 100%; height: 400px;">

        </div>

        <div class="table-responsive">
        	<table class="table table-striped table-bordered">
	          <tr>
	            <th>Date</th>
	            <th>Attendance Status</th>
	          </tr>
	          <?php echo $output; ?>
	      </table>
        </div>
  		
      </div>
  	</div>
  </div>
</div>

</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	
	google.charts.load('current', {'packages':['corechart']});

	google.charts.setOnLoadCallback(drawChart);

	function drawChart()
	{
		var data = google.visualization.arrayToDataTable([
			['Attendance Status', 'Percentage'],
			['Present', <?php echo $present_percentage; ?>],
			['Absent', <?php echo $absent_percentage; ?>]
		]);

		var options = {
			title : 'Overall Attendance Analytics',
			hAxis : {
				title: 'Percentage',
		        minValue: 0,
		        maxValue: 100
			},
			vAxis : {
				title: 'Attendance Status'
			}
		};

		var chart = new google.visualization.PieChart(document.getElementById('attendance_pie_chart'));

		chart.draw(data, options);
	}

</script>