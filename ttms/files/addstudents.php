<?php
include ('database_connection.php')
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
                <li><a href="addteachers.php">ADD TEACHERS</a></li>
				<li><a href="addstudents.php">ADD STUDENTS</a></li>
                <li><a href="addsubjects.php">ADD SUBJECTS</a></li>
                <li><a href="addclassrooms.php">ADD CLASSROOMS</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ALLOTMENT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=allotsubjects.php>THEORY COURSES</a>
                        </li>
                        <li>
                            <a href=allotpracticals.php>PRACTICAL COURSES</a>
                        </li>
                        <li>
                            <a href=allotclasses.php>CLASSROOMS</a>
                        </li>
                    </ul>
                </li>
                <li><a href="generatetimetable.php">GENERATE TIMETABLE</a></li>

          

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">VIEW FEEDBACK
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=https://docs.google.com/spreadsheets/d/1m_yDt4Y0xtl25zg4EbLNOYc73zYJjPPURtkXz5SADJc/edit?usp=sharing>NEHA PANDHARE</a>
                        </li>
                        <li>
                            <a href=https://docs.google.com/spreadsheets/d/1KRdoc3wDXgskXXkni7HZc_P72Op39U6LkL4G4t9dtqM/edit?usp=sharing>SWAPNALI KADGE</a>
                        </li>
                        <li>
                            <a href=https://docs.google.com/spreadsheets/d/1KvavHy1fSyihh6QUfA7mRxryGgPJ0_NeDqXCrRkTSd4/edit?usp=sharing>RAJASHREE SALOKHE</a>
                        </li>
						<li>
                            <a href=https://docs.google.com/spreadsheets/d/1V8OeASL3UKryu_mz00Igt33jkpavV8k9pc2J8MousQs/edit?usp=sharing>MEGHA JAIN</a>
                        </li>
						<li>
                            <a href=https://docs.google.com/spreadsheets/d/1QvP0XlcqGlsbftqlQ8fE4ZY5nfawR2tBAoC-CEjU3ww/edit?usp=sharing>POONAM GAJAKOSH</a>
                        </li>
                    </ul>
                </li>

  </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>

<div align="center" style="margin-top:80px">
    <form name="import" method="post" enctype="multipart/form-data">
        <input type="file" name="file" style="color:white"/>
        <input type="submit" name="studentexcel" id="studentexcel" class="btn btn-info btn-lg" value="IMPORT EXCEL"/>
    </form>
    <?php
    if (isset($_POST['studentexcel'])) {
        if (empty($_FILES['file']['tmp_name'])) {
            echo '<script>alert("Select a file first! ");</script>';
        } else {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, 'r');
            $headings = true;
            while (!feof($handle)) {
                $filesop = fgetcsv($handle, 1000);

                $st_id = $filesop[0];
                $student_name = $filesop[1];
                $academic_year = $filesop[3];
                $contact_number = $filesop[4];
                $emailid = $filesop[5];
				$student_course_id = $filesop[6];
				$student_roll_number = $filesop[7];
				
                if ($st_id == "" || $st_id == " Student No.") {
                    continue;
                }
                $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                    "INSERT INTO students VALUES ('$st_id','$student_name','$academic_year','$contact_number','$emailid','$student_roll_number')");
                if ($q) {
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
                }
            }
        }
    }
    ?>
</div>
<div align="center" style="margin-top:20px">
    <button id="studentmanual" class="btn btn-success btn-lg">ADD STUDENTS</button>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add Student</h2>
        </div>
        <div class="modal-body" id="EnterStudent">
            <!--Admin Login Form-->
            <div style="display:none" id="addStudentForm">
                <form action="addstudentFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="studentname">Student's Name</label>
                        <input type="text" class="form-control" id="studentname" name="NN"
                               placeholder="Student's Name ...">
                    </div>
					<div class="form-group">
                        <label for="NI">Student Roll No</label>
                        <input type="text" class="form-control" id="studentno" name="NR" placeholder="Student No ...">
                    </div>
                    <div class="form-group">
            <div class="row">
              <label for="NI">Course </label>
                <select name="NI" id="student_course_id" class="form-control">
                  <option value="">Select Course</option>
                  <?php
                  echo load_course_list($connect);
                  ?>
              </select>
              <span id="error_student_grade_id" class="text-danger"></span>
              </div>
            </div>
          </div>
                    <div class="form-group">
                        <label for="Academic year">Academic Year</label>

                        <select class="form-control" id="Academic year" name="NY">
                            <option selected disabled>Select</option>
                            <option value="2018-2019">2018-2019</option>
                            <option value=" 2019-2020"> 2019-2020</option>
                            <option value=" 2020-2021"> 2020-2021</option>
                            <option value=" 2021-2022">2021-2022 </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="studentcontactnumber">Contact No.</label>
                        <input type="text" class="form-control" id="studentcontactnumber" name="NP"
                               placeholder="+91 ...">
                    </div>

                    <div class="form-group">
                        <label for="studentemailid">Email-ID</label>
                        <input type="text" class="form-control" id="studentemailid" name="NE"
                               placeholder="abc@xyz.com ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addteacherBtn = document.getElementById("studentmanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addStudentForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
	body{
		background-color:#000000;
	}
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;color:#ffffff;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #6b8e23;
        }
    </style>

    <script>
        function deleteHandlers() {
            var table = document.getElementById("studentstable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                //var b = currentRow.getElementsByTagName("td")[0];
                var createDeleteHandler =
                    function (row) {
                        return function () {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) {
                                window.location.href = "deletestudent.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>

    <table id=studentstable style="margin-left: 80px">
        <caption><strong>Student's Information </strong></caption>
        <tr>
            <th width="130">Student Roll No</th>
            <th width=290>Name</th>
            <th width="190">Academic Year</th>
            <th width="190">Contact No.</th>
            <th width="290">Email ID</th>
            <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM students ORDER BY st_id ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['student_roll_number']}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['academic_year']}</td>
                    <td>{$row['contact_number']}</td>
                    <td>{$row['emailid']}</td>
                   <td>
                    <button  id='delete' class='btn btn-danger'>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>

</div>
<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</body>
</html>