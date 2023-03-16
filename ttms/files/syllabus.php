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
 <caption><strong><h3>FY-BSCIT SYLLABUS SEMESTER(01)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">SYLLABUS</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Imperative Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1ilhGE7cBf42UHtWeUJsK7bULpfkwv0E2/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >

		<th style="text-align:center">Imperative Programming Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1MEWKg_YJK_5eJ3iMxAO-eAT6cFxeZfXb/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Digital Electronics</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1L9TYf9f_Fv2Tm2JQ-itLck_o2iCglqV1/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Digital Electronics Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Vqtic11sPfmfjRxiBqfRB8NjgjH-O2iN/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Operating System</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1T8rtPMnXWM5uuwJ175nSxWiLtGYGX9mZ/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Operating System Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1gU1s9PnqzOneQ5Hqd13zsMNgxT0c2Yvd/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Discrete Mathematics </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/17ZUZePanE9mIVel8ykcvzXa0sxjzvI7w/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Discrete Mathematics Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1S9novUSo4Mx1ycLOUc2gcuMZvUkjflRI/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Communication Skills </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1zrj1PeTGbeb0UmUgxGK5frvSMHlQSbni/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>FY-BSCIT SYLLABUS SEMESTER(02)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">SYLLABUS</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Object Oriented Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1KbMs5QRrfMDDAAlhdFBAaBR3QWoZXAut/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >

		<th style="text-align:center">Object Oriented Programming Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1anqXjxZHOluaiUvEcvq3bCoCv8KR_18X/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Microprocessor Architecture</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1f64KApTdEW-QfzxNQ0XVrJMLLy2PQDaZ/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Microprocessor Architecture Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/12wac0eINJ1iRCMao7Mtr5NvenosEbIpE/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Web Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/14SztTYyvfd3eqriDfHAGXaJDJlvYZ1dC/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Web Programming Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1s8KdoP5NeWqioNJ-LJi2B6vknz3Lb2m4/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Numerical and Statistical Methods</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1W2vfLW6sQnRgCc7LbctBfHr9cDbgUc2-/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Numerical and Statistical Methods Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1eTeYsio5qTgv1Ob_1QzI4tTJijLEe8a9/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Green Computing </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1YYVYvchieba3Xx5Y3I8na0E9LThNeguI/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Green Computing Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1PtdiD-B7KFNBmjnMVc05_Hf8hLMqvcR5/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>SY-BSCIT SYLLABUS SEMESTER(03)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">SYLLABUS</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Python Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/13owlaK2Wf61vWkydC-w47WcGYWMv5a3v/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >

		<th style="text-align:center">Python Programming Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1mL1QkJlvr1paFUiJtVjx5HOfXRF6Y2xM/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Data Structures</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/182vGo1dc3UxrCwcsIi4PBS203sc-5_G3/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Data Structures Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/11XlR2iL8vgh_yjWwzkZOewGFWSay5pN9/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Computer Networks</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1x-jDiLrkC59zRCQZe-p6JBiZ_4hMXX-5/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Computer Networks Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1qMmLTCrPAVq4NvBcuUt6oWHJNRyWw5lz/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Database Management Systems</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1D_u0JbCnUJcj3IV97ccsanX0xsCLXme4/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Database Management Systems Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Cu8k7FegLDd0tzC64EQTHX3dom2OPOrZ/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Applied Mathematics </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1iop8GxV34tuUEKN1QiP3Vus_3m3hQ06P/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">Mobile Programing Practical </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1sJ3xiiYINcaEZPM_0KFnQ6PqAW44y3Ds/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>SY-BSCIT SYLLABUS SEMESTER(04)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">SYLLABUS</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Core Java</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1_leom2ek9HOoZMKH62jkmNiJ0CU4xvop/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >

		<th style="text-align:center"> Core Java Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/15z4wFKvKBBcum91rlovV6_uVoYpM0mz8/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Introduction to Embedded Systems</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1IE0B8u5UxDgDmOZ6TWPPCOcimpp196Jw/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Introduction to Embedded Systems Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1XvC3Y9GAj8M3qjp3EvvjyJ-zCXqwGfTS/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Software Engineering</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1RdZckVjPsBQUtic7g6O5R6UFE-ZwiPh2/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Software Engineering Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1G1GEVfN_dE7mE9JRp2Dhc-M_dbhkMn0I/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Graphics and Animation </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1r50J-15irlTKoxe3FhUy3XPf9uy1G9Ir/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Computer Graphics and Animation  Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1wfkTDAGHEyV9WgBrgCM1NvrtxnZOxOLf/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Oriented Statistical Techniques </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1i_17doHx1UCdDokpNdBa6seKGvfwPSFb/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Oriented Statistical Techniques Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/17GXhEA8ZMlOTTq-B4QRWAUsKdeSqTko-/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		</tbody>
</table>
<br>
<hr>
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>TY-BSCIT SYLLABUS SEMESTER(05)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">SYLLABUS</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Software Project Management</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1WooHGbgEftaqmHS7SBWaRSFGBLVPGRwh/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >

		<th style="text-align:center">  Project Dissertation Guide  </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1rJrEXYPyJ0Y0hiVpferOy0cWwFvNZQzx/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Internet of Things</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1yPqw89R98LZGzgELeCzJhdp2iNvidl6s/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Internet of Things Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1hNPBCJaAUtFE6oMSFd5YdWDyvpxacp4U/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Advanced Web Programming</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1cr5C589cRhRVpcS6T-YnXWI6Qw2PWe0-/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Advanced Web Programming Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1JhwG-nCuV9iHNRwLGJohd7HeoxeMB1Sx/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Artificial Intelligence </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1Z0kBUlwqFWm7efSBOP1PCaXqtBBS6IbL/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Artificial Intelligence Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Go52w9kSEj5NlTibnNeukvgkUNdzkE8n/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Linux System Administration </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1tkfupcy9i6UsdmGGurBuJBcMHM953mCp/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Linux System Administration Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1jrPD8KDXUNawfxYiFrGl7i21-jDwEYfU/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  Enterprise Java  </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1F8jHxTIE0uQT0Vlx2RbV5i2mggo6nvnV/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Enterprise Java Practical </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1Bdp0Mo8s_14B94ElIWn9U-uvB-zaRfly/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">   Next Generation Technologies </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1UlDD8peq6EeS5e6r5hvsFnBp0vYNE8pJ/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Next Generation Technologies Practical  </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1teSKqsQJn3fRU7W-yCEVBzenmjGRcmEr/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>TY-BSCIT SYLLABUS SEMESTER(06)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center">SYLLABUS</th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Software Quality Assurance</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1MH4c8uq4qeSH8FsX0LIqA0WJvvmZ9QAx/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >

		<th style="text-align:center">  Project Implementation Guide</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1rJrEXYPyJ0Y0hiVpferOy0cWwFvNZQzx/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Security in Computing</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/15J0u0MwymJusmbs_qhfW5sB0b2Zd_o4J/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Security in Computing Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1T0aPGpxKNI0X8ZHgawmxhT0o91m5pB7j/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Business Intelligence</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/14LFqGN90m6-AXjODUTS_YeaJXntRnoYb/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center"> Business Intelligence Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1aD1_waTgfC4huIojsYJJZHxEX0RJrhPU/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Principles of Geographic Information Systems </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1m24_s3LndBNjFwmwljhKw8yvdxa2OOqd/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr >
		<th style="text-align:center">Principles of Geographic Information Systems Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1vTFayupwJBcqwHguLKq5dIwFrjUPr23P/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Enterprise Networking </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1NqF1vIZOULyZkPGY9d9g1IeUV-EyXKPj/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center"> Enterprise Networking Practical</th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1lmgApBnFv5IeV58cB6uiNZFggdMYFnYN/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  IT Service Management </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1jgEkxyFdIuBRPpwudACOXalZSTuCyDlm/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  Cyber Laws </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/16vaiP3MCCqtG-qpSDIXdWaxk5mGX8uHB/view" style="color:white">DOWNLOAD</a></button></th>
		</tr>
		<tr>
		<th style="text-align:center">  Advanced Mobile Programming Practical </th>
		<th style="text-align:center"><button id="download" class="btn btn-warning btn-log"> <a href="https://drive.google.com/file/d/1G6zKtfBqA6Nlwpw5OEQLaWTTb_hGjxzO/view" style="color:white">DOWNLOAD</a></button></th>
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
