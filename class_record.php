<?php
$b = true;
include 'dashboard_teacher.php';
?>
<html><head><title>Class List</title></head>

<style>

li a {
  display: block;
  color: #34425A;
  /*font-weight: bold; */
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 
}

li a:hover {
  background-color: #E9edf2;
}

.welcome {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

</style>
<body>
<div class="page-header" style="background-color: #f9f9f9">

<h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px"><span>&nbsp&nbspClass List</span> </h1>
    
            </div>

<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">
  
  <li style="float: left; "><a class="active" href="class_first.php"
  <?php echo isset($isa) ? 'style="background-color: lightblue; color: #34425A;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/view_folder.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbspFirst Year
</p></a></li>



  <li style="float: left; "><a class="active" href="class_second.php"
  <?php echo isset($duha) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/view_folder.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSecond Year</p></a></li>

  <li style="float: left; "><a class="active" href="class_third.php"
  <?php echo isset($tuloha) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/view_folder.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThird Year</p></a></li>

  <li style="float: left; "><a class="active" href="excel_upload_form.php" 
  <?php echo isset($tulo) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/upload.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpload Class Record (excel file)</p></a></li>

  <li style="float: left; "><a class="active" href="interv_candi.php" 
  <?php echo isset($upat) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/view_folder.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIntervention Candidates</p></a></li>


</ul>




</body>
</html>