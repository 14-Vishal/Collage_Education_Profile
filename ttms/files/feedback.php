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
</br>
<br>
<br>


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
