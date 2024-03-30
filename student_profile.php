

<?php
$d = true;
include 'dashboard_teacher.php';
?>

<html><head><title>Student Profile</title></head>
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

li a:hover::after {
  background-color: #E9edf2;
}
</style>
<body>
<div class="page-header" style="background-color: #f9f9f9">

<h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px">&nbsp&nbsp&nbspStudents Profile</h1>
              
            </div>

<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">
  
  <li style="float: left; "><a class="active" href="year1.php"
  <?php echo isset($one) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>
  ><p style="color: #899DC1; font-weight: bold">1st</p></a></li>

  <li style="float: left; "><a href="year2.php" 
  <?php echo isset($two) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>
  ><p style="color: #899DC1; font-weight: bold">2nd</p></a></li>

  <li style="float: left; "><a href="year3.php"
  <?php echo isset($three) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>
  ><p style="color: #899DC1; font-weight: bold">3rd</p></a></li> 
  
  <li style="float: left; "><a href="year4.php"
  <?php echo isset($four) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">4th</p></a></li> 

  
</ul>

</body>
</html>

