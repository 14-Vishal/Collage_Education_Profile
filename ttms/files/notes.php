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
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>FY-BSCIT NOTES SEMESTER(01)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">NOTES</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Imperative Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1AP3fgjeROlzol5bcoeNjOl5Ym8NE2ma5/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Digital Electronics</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1o0aS6EcCNwRfbTUzA58dXkjYfaXCRHPf/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Operating System</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1akwSt1GY3yd0BCO8nJZhfv2OoxORteLZ/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Discrete Mathematics </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1cd5UhF8RoM9pl7z8RKQZysTgnsckEaFz/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Communication Skills </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1a1Kkg_615s9bc9M2SCC3HY_aluEaMGBA/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>FY-BSCIT NOTES SEMESTER(02)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">NOTES</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Object Oriented Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="http://www.mktechnocratcampuspatan.com/uploads/development/facility_560099.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Microprocessor Architecture</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/12JN-EQiJXYoRwbnWtxZiCZTL_UdyMrq9/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Web Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://www.engbookspdf.com/uploads/pdf-books/HTML5StepByStepByFaitheWempen-1.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<tr>
		<th style="text-align:center">Numerical and Statistical Methods</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://rahulpatel121.files.wordpress.com/2018/07/s-s-sastry-introductory-methods-of-numerical-analysis-2012-phi-learning-pvt-ltd.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Green Computing </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://books.google.co.in/books?id=xPQZqKrJN7oC&printsec=frontcover&source=gbs_atb&redir_esc=y#v=onepage&q&f=false" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>SY-BSCIT NOTES SEMESTER(03)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">NOTES</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Python Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://www.greenteapress.com/thinkpython/thinkpython.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<th style="text-align:center">Data Structures</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://www.engbookspdf.com/uploads/pdf-books/DataStructuresandAlgorithmAnalysisinCbyWeiss-1.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Computer Networks</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1ftraFoWOqvqFtVSyumKSpeiA5-NQcepG/view?usp=drivesdk" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Database Management Systems</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="http://corpgov.crew.ee/Materjalid/Database%20Systems%20-%20Design,%20Implementation,%20and%20Management%20(9th%20Edition).pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Applied Mathematics </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1izo2y516LG7Yiq9fIcSL9HeIHBuzLcvV/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Mobile Programing Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="http://ptgmedia.pearsoncmg.com/images/9780134048192/samplepages/9780134048192.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>SY-BSCIT NOTES SEMESTER(04)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">NOTES</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Core Java</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://www.pdfdrive.com/download.pdf?id=175324934&h=03826c3fedca29ad9d35ed714e8b0db9&u=cache&ext=pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Introduction to Embedded Systems</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1---vEc8JLpBpd9EvLsJL5fLsZQawzQBn/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Software Engineering</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="http://160592857366.free.fr/joe/ebooks/ShareData/Software%20Engineering%20-%20Principles%20and%20Practice%20By%20Hans%20van%20Vliet%20-%20Wiley%202007.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Graphics and Animation </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://www.pdfdrive.com/download.pdf?id=175830467&h=71332d5e6e0c464844e455372701a28f&u=cache&ext=pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Oriented Statistical Techniques </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://www.pdfdrive.com/download.pdf?id=33460485&h=835a7c1e3feba50000beec5098423ada&u=cache&ext=pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		</tbody>
</table>
<br>
<hr>
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>TY-BSCIT NOTES SEMESTER(05)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">NOTES</th>
        </tr>
        <tbody>
		<tr>
		<th style="text-align:center"> Internet of Things</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1IactoAv_n_ddPd_wgARcH1pR8_Y0jxkj/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Advanced Web Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1IfFIEqZq00egbnXo3COwqGvvpsGrhaDt/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Artificial Intelligence </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1I_5H2-fvA0gYH8SI1rbr6fqgOOzQmKBU/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Linux System Administration </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1IZgWw1nuMF_JyVJDvkvC2XLbZM_rJ2En/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  Enterprise Java  </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1Ky4LqUHsGyZnPr--TMIfZxDdreTTn-Ya/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">   Next Generation Technologies </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1IYmncColJoTQn3pT6iFpZ3iXaZYjg24q/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>TY-BSCIT NOTES SEMESTER(06)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">NOTES</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Software Quality Assurance</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://tienhuong.files.wordpress.com/2009/08/software-testing-and-continuous-quality-improvement-second-edition.pdf" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Security in Computing</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1lDH_cB5obgwEgTVntlWd9tjpfTIViooU/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Business Intelligence</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1M7ZL0abomP5RT0xuqADSeIm86YFEDRdS/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Principles of Geographic Information Systems </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1-pc9ZwDhirr9QJcx07-igt7FvnGOxBpb/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Enterprise Networking </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1h0fACDIJooP_xbGsiMQ7M8HF6na1gAbI/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  IT Service Management </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1ZVnkW6Qmd8mXqkh8xExRuKU3NFUMXDOt/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  Cyber Laws </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1UuWeGpXatPGDooiOE8J6opWhGe6AK2EH/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>


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
