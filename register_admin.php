<?php
$r6 = true;
include 'dashboard_super.php';
?>
<html><head><title>Account Creation</title></head>

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

<h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px"><span>&nbsp&nbspAccount Creation</span> </h1>
    
            </div>

<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">
  
   <!--<li style="float: left; "><a class="active" href="upload_form.php"><p style="color: #899DC1; font-weight: bold">
<img src="images/upload.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpload Exam</p></a></li> -->

  <li style="float: left; "><a href="register.php" <?php echo isset($d1) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/view_folder.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Student </p></a></li>

  <li style="float: left; "><a href="register_teacher.php" <?php echo isset($d2) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  <img src="images/undergoer.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTeacher</p></a></li> 
</ul>


</body>
</html>

