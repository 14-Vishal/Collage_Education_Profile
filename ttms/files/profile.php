
<?php

//profile.php

include('database_connection.php');
session_start();

$faculty_name = '';
$alias = '';
$emailid = '';
$faculty_password = '';
$teacher_course_id = '';
$designation = '';
$contact_number = '';
$teacher_image = '';
$error_faculty_name = '';
$error_alias = '';
$error_emailid = '';
$error_teacher_course_id = '';
$error_designation = '';
$error_contact_number = '';
$error_teacher_image = '';
$error = 0;
$success = '';

if(isset($_POST["button_action"]))
{
	$teacher_image = $_POST["hidden_teacher_image"];
	if($_FILES["teacher_image"]["name"] != '')
	{
		$file_name = $_FILES["teacher_image"]["name"];
		$tmp_name = $_FILES["teacher_image"]["tmp_name"];
		$extension_array = explode(".", $file_name);
		$extension = strtolower($extension_array[1]);
		$allowed_extension = array('jpg','png');
		if(!in_array($extension, $allowed_extension))
		{
			$error_teacher_image = "Invalid Image Format";
			$error++;
		}
		else
		{
			$teacher_image = uniqid() . '.' . $extension;
			$upload_path = 'assets/img/' . $teacher_image;
			move_uploaded_file($tmp_name, $upload_path);
		}
	}

	if(empty($_POST["faculty_name"]))
	{
		$error_faculty_name = "Teacher Name is required";
		$error++;
	}
	else
	{
		$faculty_name = $_POST["faculty_name"];
	}

	if(empty($_POST["alias"]))
	{
		$error_alias = 'Alias is required';
		$error++;
	}
	else
	{
		$alias = $_POST["alias"];
	}

	if(empty($_POST["emailid"]))
	{
		$error_emailid = "Email Address is required";
		$error++;
	}
	else
	{
		if(!filter_var($_POST["emailid"], FILTER_VALIDATE_EMAIL))
		{
			$error_emailid = "Invalid email format";
			$error;
		}
		else
		{
			$emailid = $_POST["emailid"];
		}
	}
	if(!empty($_POST["faculty_password"]))
	{
		$faculty_password = $_POST["faculty_password"];
	}

	if(empty($_POST["teacher_course_id"]))
	{
		$error_teacher_course_id = 'Course is required';
		$error++;
	}
	else
	{
		$teacher_course_id = $_POST["teacher_course_id"];
	}

	if(empty($_POST["designation"]))
	{
		$error_designation = "Designation Field is required";
		$error++;
	}
	else
	{
		$designation = $_POST["designation"];
	}

	if(empty($_POST["contact_number"]))
	{
		$error_contact_number = "Contact Number Field is required";
		$error++;
	}
	else
	{
		$contact_number = $_POST["contact_number"];
	}

	if($error == 0)
	{
		if($faculty_password != '')
		{
			$data = array(
				':faculty_name'			=>	$faculty_name,
				':alias'				=>	$alias,
				':emailid'				=>	$emailid,
				':faculty_password'		=>	password_hash($faculty_password, PASSWORD_DEFAULT),
				':designation'			=>	$designation,
				':contact_number'		=>	$contact_number,
				':teacher_image'		=>	$teacher_image,
				':teacher_course_id'	=>	$teacher_course_id,
				':faculty_number'		=>	$_POST["faculty_number"]
			);
			$query = "
			UPDATE teachers 
		      SET faculty_name 	= :faculty_name, 
		      alias				= :alias, 
		      emailid 			= :emailid, 
		      faculty_password 	= :faculty_password, 
		      teacher_course_id = :teacher_course_id, 
		      designation	    = :designation, 
		      contact_number 	= :contact_number, 
		      teacher_image 	= :teacher_image 
		      WHERE faculty_number = :faculty_number
			";
		}
		else
		{
			$data = array(
				':faculty_name'			=>	$faculty_name,
				':alias'				=>	$alias,
				':emailid'				=>	$emailid,
				':designation'			=>	$designation,
				':contact_number'		=>	$contact_number,
				':teacher_image'		=>	$teacher_image,
				':teacher_course_id'	=>	$teacher_course_id,
				':faculty_number'		=>	$_POST["faculty_number"]
			);
			$query = "
			UPDATE teachers 
		      SET faculty_name	= :faculty_name, 
		      alias				= :alias, 
		      emailid			= :emailid, 
		      teacher_course_id = :teacher_course_id, 
		      designation 		= :designation, 
		      contact_number	= :contact_number, 
		      teacher_image 	= :teacher_image 
		      WHERE faculty_number = :faculty_number
			";
		}

		$statement = $connect->prepare($query);
		if($statement->execute($data))
		{
			$success = '<div class="alert alert-success">Profile Details Change Successfully</div>';
		}
	}
}


$query = "
SELECT * FROM teachers 
WHERE faculty_number = '".$_SESSION["loggedin_id"]."' 	
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

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
  <span><?php echo $success; ?></span>
  <div class="card">
    <form method="post" id="profile_form" enctype="multipart/form-data">
		<div class="card-header">
			<div class="row">
				<div class="col-md-9">Profile</div>
				<div class="col-md-3" align="right">
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Teacher Name <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<input type="text" name="faculty_name" id="faculty_name" class="form-control" />
						<span class="text-danger"><?php echo $error_faculty_name; ?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Alias <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<textarea name="alias" id="alias" class="form-control"></textarea>
						<span class="text-danger"><?php echo $error_alias; ?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Email Address <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<input type="text" name="emailid" id="emailid" class="form-control" />
						<span class="text-danger"><?php echo $error_emailid; ?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Password <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<input type="password" name="faculty_password" id="faculty_password" class="form-control" placeholder="Leave blank to not change it" />
						<span class="text-danger"></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Designation<span class="text-danger">*</span></label>
					<div class="col-md-8">
						<input type="text" name="designation" id="designation" class="form-control" />
						<span class="text-danger"><?php echo $error_designation; ?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Course <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<select name="teacher_course_id" id="teacher_course_id" class="form-control">
                			<option value="">Select Course</option>
                			<?php
                			echo load_course_list($connect);
                			?>
                		</select>
						<span class="text-danger"><?php echo $error_teacher_course_id; ?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Contact Number <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<input type="text" name="contact_number" id="contact_number" class="form-control"  />
						<span class="text-danger"><?php echo $error_contact_number; ?></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-4 text-right">Image <span class="text-danger">*</span></label>
					<div class="col-md-8">
						<input type="file" name="teacher_image" id="teacher_image" />
						<span class="text-muted">Only .jpg,.jpeg and .png allowed</span><br />
						<span id="error_teacher_image" class="text-danger"><?php echo $error_teacher_image; ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer" align="center">
			<input type="hidden" name="hidden_teacher_image" id="hidden_teacher_image" />
			<input type="hidden" name="faculty_number" id="faculty_number" />
			<input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Save" />
		</div>     
    </form>
  </div>
</div>
<br />
<br />
</body>
</html>


<style>
    
</style>

<script>
$(document).ready(function(){
	
<?php
foreach($result as $row)
{
?>
$('#faculty_name').val("<?php echo $row["faculty_name"]; ?>");
$('#alias').val("<?php echo $row["alias"]; ?>");
$('#emailid').val("<?php echo $row["emailid"]; ?>");
$('#designation').val("<?php echo $row["designation"]; ?>");
$('#teacher_course_id').val("<?php echo $row["teacher_course_id"]; ?>");
$('#contact_number').val("<?php echo $row["contact_number"]; ?>");
$('#error_teacher_image').html("<img src='assets/img/<?php echo $row['teacher_image']; ?>' class='img-thumbnail' width='100' />");
$('#hidden_teacher_image').val('<?php echo $row["teacher_image"]; ?>');
$('#faculty_number').val("<?php echo $row["faculty_number"];?>");

<?php
}
?>
  

});
</script>