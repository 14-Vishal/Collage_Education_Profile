<?php
include('database_connection.php');
session_start();
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
  	<div class="card-header">
      <div class="row">
        <div class="col-md-9">Overall Student Attendance Status</div>
		<div class="col-md-3" align="right">
		<button type="button" id="chart_button" class="btn btn-primary btn-sm">Chart</button>
		</div>
        <div class="col-md-3" align="right">
          
        </div>
      </div>
    </div>
  	<div class="card-body">
  		<div class="table-responsive">
        <table class="table table-striped table-bordered" id="student_table">
          <thead>
            <tr>
              <th>Student Name</th>
              <th>Roll Number</th>
              <th>Course</th>
              <th>Attendance Percentage</th>
              <th>Report</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
  		</div>
  	</div>
  </div>
</div>

</body>
</html>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />

<style>
    .datepicker
    {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }
</style>

<div class="modal" id="chartModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Grade Attandance Chart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <select name="chart_course_id" id="chart_course_id" class="form-control">
            <option value="">Select Course</option>
            <?php
            echo load_course_list($connect);
            ?>
          </select>
          <span id="error_chart_course_id" class="text-danger"></span>
        </div>
        <div class="form-group">
          <div class="input-daterange">
            <input type="text" name="attendance_date" id="attendance_date" class="form-control" placeholder="Select Date" readonly />
            <span id="error_attendance_date" class="text-danger"></span>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="create_chart" id="create_chart" class="btn btn-success btn-sm">Create Chart</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<div class="modal" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Make Report</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <select name="report_action" id="report_action" class="form-control">
            <option value="pdf_report">PDF Report</option>
            <option value="chart_report">Chart Report</option>
          </select>
        </div>
        <div class="form-group">
          <div class="input-daterange">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
            <span id="error_from_date" class="text-danger"></span>
            <br />
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
            <span id="error_to_date" class="text-danger"></span>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="hidden" name="st_id" id="st_id" />
        <button type="button" name="create_report" id="create_report" class="btn btn-success btn-sm">Create Report</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script>
$(document).ready(function(){
	 
   var dataTable = $('#student_table').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"attendance_action.php",
      type:"POST",
      data:{action:'index_fetch'}
    }
   });

   $('.input-daterange').datepicker({
    todayBtn:"linked",
    format:'yyyy-mm-dd',
    autoclose:true,
    container: '#formModal modal-body'
   });

   $(document).on('click', '.report_button', function(){
    var st_id = $(this).data('st_id');
    $('#st_id').val(st_id);
    $('#formModal').modal('show');
   });

   $('#create_report').click(function(){
    var st_id = $('#st_id').val();
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    var error = 0;
    var action = $('#report_action').val();
    if(from_date == '')
    {
      $('#error_from_date').text('From Date is Required');
      error++;
    }
    else
    {
      $('#error_from_date').text('');
    }
    if(to_date == '')
    {
      $('#error_to_date').text("To Date is Required");
      error++;
    }
    else
    {
      $('#error_to_date').text('');
    }

    if(error == 0)
    {
      $('#from_date').val('');
      $('#to_date').val('');
      $('#formModal').modal('hide');
      if(action == 'pdf_report')
      {
        window.open("report.php?action=student_report&st_id="+st_id+"&from_date="+from_date+"&to_date="+to_date);
      }
      if(action == 'chart_report')
      {
        location.href = "chart.php?action=student_chart&st_id="+st_id+"&from_date="+from_date+"&to_date="+to_date;
      }
    }

   });
   
  $('#chart_button').click(function(){
    $('#chart_course_id').val('');
    $('#attendance_date').val('');
    $('#chartModal').modal('show');
  });

  $('#create_chart').click(function(){
    var course_id = $('#chart_course_id').val();
    var attendance_date = $('#attendance_date').val();
    var error = 0;
    if(course_id == '')
    {
      $('#error_chart_course_id').text('Course is Required');
      error++;
    }
    else
    {
      $('#error_chart_course_id').text('');
    }
    if(attendance_date == '')
    {
      $('#error_attendance_date').text('Date is Required');
      $error++;
    }
    else
    {
      $('#error_attendance_date').text('');
    }

    if(error == 0)
    {
      $('#attendance_date').val('');
      $('#chart_course_id').val('');
      $('#chartModal').modal('show');
      window.open("chart1.php?action=attendance_report&course_id="+course_id+"&date="+attendance_date);
    }

  });

});
</script>