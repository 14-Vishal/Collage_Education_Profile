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
 <caption><strong><h3>FY-BSCIT QUESTION PAPER SEMESTER(01)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center"> APR 2018 </th>
			<th width="40" style="text-align:center"> NOV 2018 </th>
			<th width="40" style="text-align:center"> APR 2019 </th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Imperative Programming</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1JT7q3Z9JPPjwy1US7SfJMbn6PwhNmPS4/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/15NKpECe6nSM0VrGLROuOeLstsBJp-7Ao/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1pAA80MkBA9FsDXBog1CSQrIGmOAGq2LW/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Digital Electronics</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1zLeq2BUH1bO29qhUnBm6MKxw9G09vIrM/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Dcc1yoaUUiPZQa5Tq7QfJMHYTTnQXp9U/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1B3tM58KJKwNjLmGvKQ2CQVkCpxacr9XF/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Operating System</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1IKSYTlToZcanVsN5xsBYpQLL_X-E715H/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1sBzOK6mpaVQDWi8B2ECJy4SsVED2PXYa/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1C84WBtXuQ_qxwCqQxp0MDecAd6ejFSrG/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Discrete Mathematics </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1qZ1_JiyFfza9lonDdyocT-eGEeuCgIp-/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1P451gFLUdaffyO5-Dei9thVW7LV8wfyt/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1IJ_Q2BclumrNXx985-4fT7K1F4LCPs47/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Communication Skills </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/13hxdTlz-DIrKFW-T37Uy_NKbAPKu0OIc/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1vva9mVzKZDh8lZpekK1jsk6INoxhgQ4Y/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1qD9svOo2ZUyOFreRFI1fshTXpX6ZBmwd/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		
		</tbody>
</table>
<br>
<hr>
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>FY-BSCIT QUESTION PAPER SEMESTER(02)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center"> APR 2018 </th>
			<th width="40" style="text-align:center"> NOV 2018 </th>
			<th width="40" style="text-align:center"> APR 2019 </th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Object Oriented Programming</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1qknVuvXIjVJWGNucdTf7ygXJ5h5-v0Gv/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1GVBEGVouOOjoLiDocJqjoeMFtHoV5cAN/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1U0K3LwdFBS4-DR5JlvURk6Vsh3zIbR1L/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Microprocessor Architecture</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1ByKPOztSoHv94gqGU2D-ykl-iPGpmYqw/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1KM2FX41MeYS-u49kECYViFIDm_ji-FhJ/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1RyRBw7TNTKho75KYHFF19fWevu-8r3_a/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Web Programming</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1JsG4OsUUqptNX_auPVIG_RXKebXQ08ij/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Xdm5BxagbM8utP0daBwZkpKvajMg7FNp/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1vnqb70UWCJ0r9PQIKToVAFaroXEQjFtB/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr >
		<tr>
		<th style="text-align:center">Numerical and Statistical Methods</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/13Nd_W0tlj-xCrrb5D7QAaSc1HLG0q_y3/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1OpcWZgZxhpbQmAR_hOpNlXcqSjYNuCor/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1hk6SGFBlYKQo0CgqHrF6Kb6oGZEOax6g/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Green Computing </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1ReYXJFm0baAq0j7zLC35cehMe_7x9asg/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1NAnVVVvv9WteidoVyiKI-b4KbLsQBLsV/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1aH56MWPcuP6qcVXBRSOAHn5LvlMuuFFi/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>SY-BSCIT QUESTION PAPER SEMESTER(03)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center"> APR 2018 </th>
			<th width="40" style="text-align:center"> NOV 2018 </th>
			<th width="40" style="text-align:center"> APR 2019 </th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center">Python Programming</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1FJAv6VgySHNswVN1e9nbe2fEQqA0C8dc/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Isg6xJJhrDbmxV_8UJ0xvgsvm32seGUg/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Lhj8kXIi2tviBYh1fD_3X1ziH2MAEWWB/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<th style="text-align:center">Data Structures</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1BkkGAXUQSzx3PP1T9W-QH-sM7_pnwWZc/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1iw8GoigcB16Iu01zHUXml1uA7oyedA-a/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/15EzH-FQZbIepcs9AIkdXCkbKHLOKzFNc/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Computer Networks</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1qF5NfgFQVIKXkzD9pUuIkelyyw6g7_x-/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1k9HCkp5dAFkVJPBE98SGcLmxQuO7EA2w/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1krstiZfcO6xWcS0Bzh2axCY6A6R21saz/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Database Management Systems</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1lSA6-t6OKdmdt41u5N0yix8TIeZd6nTL/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1KVMSN32izRpaTq3CzXh7KIyAb3KOrFny/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1eplsT7Dx8Ka77K9eEb2PsRX7EvMf6M8m/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">Applied Mathematics </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/17NYn4eb02K-o1HIjlD5YMEiVqnoZfQpS/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1W73jR-z5cBw3l-t1IWW1zk-NxnqVHJuh/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1MCWbrUFhKIvVMgRG4OCQdWBePe3TRlUs/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>SY-BSCIT QUESTION PAPER SEMESTER(04)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
            <th width="40" style="text-align:center"> APR 2018 </th>
			<th width="40" style="text-align:center"> NOV 2018 </th>
			<th width="40" style="text-align:center"> APR 2019 </th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Core Java</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1OkkjjDUg0M23zmVyV8pBHfI9sAHoH9vl/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1P1bCyzco1Y1lObiT-7P5C1AxjkAO067v/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1P1bCyzco1Y1lObiT-7P5C1AxjkAO067v/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Introduction to Embedded Systems</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Vbm2HQYAwF9z8fr0GoehIxO4skQBf38H/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1iR0j5HSVWT3-e6DtBR3X-sQNcbibC8iq/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1uh73nsBgaI-DjCzDKLv9lJpEcfzhX62I/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Software Engineering</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1eA2769b3RvdSGWajBkbdDaDI2VnSGLpN/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1dAxytaZ8l-8PrFR7mavINB4d0uKKb_ah/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1yehG07FHREs2WAQbjklKeFG_UBrpIXeV/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Graphics and Animation </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/15Jci18kvc_L2PWYmC3YL5QVqgLG0TGPn/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1squBytSKGB445eJ0yZL2W2xTWWxgN1U7/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1iX-fSFrqMwPOmRhofHguwCvNLe1S-Ac-/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Computer Oriented Statistical Techniques </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/13gpiz57FgGZ_qb3KtR0tfQ6LWM9SXM3o/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1_kNAPKzix8uO8cPuHyQs3uzhzR0JRkiX/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1V05TQ63lTX2NOvctEggZyAUVIRWdG_6Q/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		</tbody>
</table>
<br>
<hr>
<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>TY-BSCIT QUESTION PAPER SEMESTER(05)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
			<th width="40" style="text-align:center"> NOV 2018 </th>
			<th width="40" style="text-align:center"> APR 2019 </th>
        </tr>
        <tbody>
		<tr>
		<th style="text-align:center"> Software Project Management</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1SFOJ54HE2DwWnlg1oHYTcJDjskCkOQau/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" ><a href="https://drive.google.com/file/d/1xf7Tjqm4IMmhyANvsQAtaMjdC8b0YIc7/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Internet of Things</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1ukcf7UFw2yxcDHXYBoGcG0YGKbp-_NGp/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1t4irLTRFgwUkDk9i1ttBG5FQFiMSxxXk/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Advanced Web Programming</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1mA4xQrXo-jNLntKU0YOqvrekd0S7ucmg/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1UT9wTghWObeZcbs2aE6e4L7jm-ZtUjcm/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Artificial Intelligence </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1zR5wKKXfOWGMEZQzzcQtzjYeIxcxbJD1/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Rxq5qxuJ30zbaa5O-5Qp_FalSMKR_7c0/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Linux System Administration </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1dMbOs69G0PuEjP36XmU4IDtZ00MeE0W1/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1UzpnS3AIuM-XpY7m9gpa8SgzaiUnZdGc/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">  Enterprise Java  </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1pt74VCtlwi_pbahnG2fkwyXKA2xk-KkI/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1U-h7hVhjNn1BmgPdrFnFs_GRFjNvu7b3/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center">   Next Generation Technologies </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Tn5Wp79kJxUNUbCS9jpcZeQB8AJmhIps/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1mAlEf0acv7pVDR8Z0b6PmDXyu9HtsTSe/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		
		</tbody>
</table>
<br>
<hr>

<table id=syllabustable style="margin-left: 05px">
 <caption><strong><h3>TY-BSCIT QUESTION PAPER SEMESTER(06)</h3> </strong></caption>
        <tr>
			<th width="300" style="text-align:center">SUBJECT</th>
			<th width="40" style="text-align:center"> APR 2019 </th>
			<th width="40" style="text-align:center"> NOV 2019 </th>
        </tr>
        <tbody>
		<tr >
		<th style="text-align:center"> Software Quality Assurance</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1KqOPGczz2F7azBtjUR_l5XETZs3CxUhk/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/119aGfCKgeia4EPTC0_-uexbKroMAzgYh/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Security in Computing</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1cpCMq4dhWCYdMPC4Po0HG1V-pb9RkFzk/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/17W4wykIJ7HvcVUpF_XNTjc2iAJAKOG-v/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Business Intelligence</th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/10KnsXT_TmsgXw2UkKm82mcu5Jq0nxlCV/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1ph2B-xbk5s-CC63JjK864BhsJEdHHtgC/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Principles of Geographic Information Systems </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1-aCVlLqiAFJAp2I7jz--8ZgzmJ8DAevk/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1LYBqaG5obCm3oiozxMlHIgFfhecGO_8_/view" style="color:white">DOWNLOAD</a></button></td>
		</tr>
		<tr>
		<th style="text-align:center"> Enterprise Networking </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1sEXV6Z0nF4g2hqqRxtSJvYrv9_sSRIx1/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center">-</td>
		</tr>
		<tr>
		<th style="text-align:center">  IT Service Management </th>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1Tf0I3MjhjDrUgSsvRvvsJKfgjBkfZisH/view" style="color:white">DOWNLOAD</a></button></td>
		<td style="text-align:center">-</td>
		</tr>
		<tr>
		<th style="text-align:center">  Cyber Laws </th>
		<td style="text-align:center">-</td>
		<td style="text-align:center"><button id="download" class="btn btn-warning btn-log" > <a href="https://drive.google.com/file/d/1ZqXUu6LCFeyuNi6yL_vtQ8V3h40maAHt/view" style="color:white">DOWNLOAD</a></button></td>
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
