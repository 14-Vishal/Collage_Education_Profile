<?php
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
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
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
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">FEEDBACK
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=https://docs.google.com/forms/d/e/1FAIpQLSfbeBw3IGRZyEA6J2v4pyv_-d4FprYcQI_CZUdUxp5dVcOBbA/viewform?usp=sf_link>NEHA PANDHARE</a>
                        </li>
                        <li>
                            <a href=https://docs.google.com/forms/d/e/1FAIpQLSfE8q1xMiWrQG69na4kAETLLM8p-euEL-8wLT1cUTMIcqYRQQ/viewform?usp=sf_link>SWAPNALI KADGE</a>
                        </li>
                        <li>
                            <a href=https://docs.google.com/forms/d/e/1FAIpQLSel39xch6L7w2-paJdMogSD0Y77nU-fXGHUgEbjOb_DkN20Ow/viewform?usp=sf_link>RAJASHREE SALOKHE</a>
                        </li>
						<li>
                            <a href=https://docs.google.com/forms/d/e/1FAIpQLSeG_-Dc5MAkCdSOBiuMia6EvlLkRs3Za2FijQr9XPaeFcPp3A/viewform?usp=sf_link>MEGHA JAIN</a>
                        </li>
						<li>
                            <a href=https://docs.google.com/forms/d/e/1FAIpQLSe1ZXT3LTRFEfDPSRfB3g6DtNQWYixGiBMFJypCkeCEAzrHSQ/viewform?usp=sf_link>POONAM GAJAKOSH</a>
                        </li>
                    </ul>
                </li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>
<!--Algorithm Implementation-->

<br><br>

<form action="studentpage.php" method="post">
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

<div>
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
    <div id="TT" style="background-color: #000000">
        <table border="2" cellspacing="3" align="center" id="timetable">
            <caption><strong><br><br>
                    <?php
                if (isset($_POST['select_semester'])) {
                    echo "INFORMATION TECHNOLOGY DEPARTMENT SEMESTER " . $_POST['select_semester'] . " ";
                    $year = (int)($_POST['select_semester'] / 2) + $_POST['select_semester'] % 2;
                    $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from classrooms
                                WHERE status = '$year'"));
                    echo " ( " . $r['name'], " ) ";
                }
                ?>
                </strong></caption>
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
                } else if (isset($_POST['select_teacher'])) {
                    $table = " " . $_POST['select_teacher'] . " ";
                } else if (isset($_SESSION['loggedin_id'])) {
                    $table = " " . $_SESSION['loggedin_id'] . " ";
                } else
                    echo '</table>';
                if (isset($_POST['select_semester']) || isset($_POST['select_teacher']) || isset($_SESSION['loggedin_id'])) {
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
                    echo "<div align=\"center\" style=\"color:white\">" . "<br>" . $str . "<br>
                            " . $sign . "<br></div>";
                }
                ?>
    </div>
</div>
<script type="text/javascript">
    function genPDF() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('timetable.pdf');
            alert("Downloaded!");	

        });
    }

</script>
<div align="center" style="margin-top: 10px">
    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="genPDF()">SAVE AS PDF</button>
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
