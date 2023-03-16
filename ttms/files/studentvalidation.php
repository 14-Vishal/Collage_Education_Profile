<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
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
                 <li><a href="#">Hello </a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
			<li><a href=".php">ATTENDANCE REPORT </a></li>
				 
                        <li>
						<a href="syllabus.php">SYLLABUS</a>
                        </li>
                        <li>
						<a href="notes.php">NOTES</a>
                        </li>
                        <li>
						<a href="questionpaper.php">QUESTION PAPER</a>
                        </li>
				<li><a href="studentpage.php">TIMETABLE</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>
<br>
<style>
  body{
	  background-color:#000000;
  }
    table {
        margin-top: 20px;
        font-family: arial, sans-serif;color:#ffffff;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #6b8e23;
    }

    tr:nth-child(odd) {
        background-color: #000000;
    }
</style>
<br><br><br>
<form action="studentvalidation.php" method="post">
    <div align="center" style="margin-top: 10px">
        <select name="select_semester" class="list-group-item">
            <option selected disabled>Select Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <button type="submit" id="viewsemester" style="margin-top: 5px" class="btn btn-success btn-lg">VIEW TIMETABLE
        </button>
    </div>
</form>

<div id="TT" style="background-color: #000000">
    <table border="2" cellspacing="3" align="center" id="timetable">
        <caption>
            <strong><br><br>
                <?php
                if (isset($_POST['select_semester'])) {
                    echo "INFORMATION TECHNOLOGY DEPARTMENT SEMESTER " . $_POST['select_semester'] . " ";
                    $year = (int)($_POST['select_semester'] / 2) + $_POST['select_semester'] % 2;
                    $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from classrooms
                                WHERE status = '$year'"));
                    echo " ( " . $r['name'], " ) ";
                }
                ?>
            </strong>
        </caption>
        <tr>
            <td style="text-align:center">WEEKDAYS</td>
            <td style="text-align:center">10:00-10:45</td>
            <td style="text-align:center">10:45-11:30</td>
            <td style="text-align:center">11:30-12:15</td>
            <td style="text-align:center">12:15-12:30</td>
            <td style="text-align:center">12:30-1:15</td>
            <td style="text-align:center">1:15-2:00</td>
            <td style="text-align:center">2:00-2:45</td>
			<td style="text-align:center">2:45-3:00</td>
			<td style="text-align:center">3:00-5:00</td>
        </tr>
        <tr>
            <?php
            $table = null;
            if (isset($_POST['select_semester'])) {
                $table = " semester" . $_POST['select_semester'] . " ";
            } else
                echo '</table>';
            if (isset($_POST['select_semester']) && $_POST['select_semester'] % 2 !== 0) {
                $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                    "SELECT * FROM" . $table);
                $qq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                    "SELECT * FROM subjects");
                $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
                $i = -1;
                $str = "<br>";
                if (isset($_POST['select_semester'])) {
                    while ($r = mysqli_fetch_assoc($qq)) {
                        if ($r['isAlloted'] == 1 && $r['semester'] == $_POST['select_semester']) {
                            $str .= $r['subject_code'] . ": " . $r['subject_name'] . " ";
                            if (isset($r['allotedto'])) {
                                $id = $r['allotedto'];
                                $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                    "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                $rr = mysqli_fetch_assoc($qqq);
                                $str .= " " . $rr['alias'] . ": " . $rr['name'] . " ";
                            }
                            if ($r['course_type'] !== "LAB") {
                                $str .= "<br>";
                                continue;
                            } else {
                                $str .= ", ";
                            }
                            if (isset($r['allotedto2'])) {
                                $id = $r['allotedto2'];
                                $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                    "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                $rr = mysqli_fetch_assoc($qqq);
                                $str .= " " . $rr['alias'] . ": " . $rr['name'] . ", ";
                            }
                            if (isset($r['allotedto3'])) {
                                $id = $r['allotedto3'];
                                $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                    "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                $rr = mysqli_fetch_assoc($qqq);
                                $str .= " " . $rr['alias'] . ": " . $rr['name'] . "<br>";
                            }
                        }
                    }
                }
                while ($row = mysqli_fetch_assoc($q)) {
                    $i++;
                    echo "
                 <tr><td style=\"text-align:center\">$days[$i]</td>
                 <td style=\"text-align:center\">{$row['period1']}</td>
                <td style=\"text-align:center\">{$row['period2']}</td>
                <td style=\"text-align:center\">{$row['period3']}</td>
				<td style=\"text-align:center\">LUNCH</td>
                <td style=\"text-align:center\">{$row['period4']}</td>
                <td style=\"text-align:center\">{$row['period5']}</td>
				<td style=\"text-align:center\">{$row['period6']}</td>
                <td style=\"text-align:center\">LUNCH</td>
                <td style=\"text-align:center\">{$row['practical']}</td>
                </tr>\n";
                }
                echo '</table>';
                $sign = "GENERATED VIA TIMETABLE MANAGEMENT SYSTEM, INFORMATION TECHNOLOGY DEPARTMENT";
                if (isset($_POST['select_semester'])) {
                    echo "<div align=\"center\">" . "<br>" . $str . "<br>
                            <strong>" . $sign . "<br></strong></div>";
                }
                unset($_GET['generated']);
            } else {
                header("location:index.php?generated=false");

            }
            ?>
</div>
<script type="text/javascript">
    function genPDF() {
        var doc = new jsPDF();
        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('<?php echo "ttms semester " . $_POST["select_semester"]?>' + '.pdf');
            alert("Downloaded!");
        });
    }
</script>
<div align="center" style="margin-top: 10px">
    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="genPDF()">SAVE AS PDF</button>
</div>
</body>
</html>