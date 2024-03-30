<?php
$z1 = true;
include 'dashboard_teacher_welc.php';
include '_conn.php';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 300px;
 
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #f6f6f6;}
</style>
</head>
<body style="background-color:white;">


<li style="float: left; "><div class="dropdown">
  <button class="dropbtn" style="margin-top: 30px; margin-left: 35px; padding: 15px; height: 50px;  font-size: 18px; color: blue; border-radius: 2px; border-color: white; border-width: 1px;  position: relative; cursor: pointer">Subject</button>
  <div class="dropdown-content" style="margin-left: 35px; width: 100px; border-radius: 6px; ">
    <a href="analytics_cce101.php" style="color: #34425A; font-size: 14px; width: 300px;  border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>CCE 101</b></a>
    <a href="analytics_cce102.php" style="color: #34425A; font-size: 14px; width: 300px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>CCE 102</b></a>
    <a href="analytics_elec.php" style="color: #34425A; font-size: 14px; width: 300px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>IT ELECTIVE 3</b></a>
    <a href="analytics_netw.php" style="color: #34425A; font-size: 14px; width: 300px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>NETWORKING 2</b></a>
    <a href="analytics_integ.php" style="color: #34425A; font-size: 14px; width: 300px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>INTEGRATIVE PROGRAMMING </b></a>
    <a href="analytics_assur.php" style="color: #34425A; font-size: 14px; width: 300px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>INFORMATION ASSURANCE 1</b></a>
  </div>
</div></li>

 <!--   
<li style="float: left; "><a class="active" href="analytics_cce101.php" 
<?php echo isset($ana1) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
&nbsp&nbsp&nbsp&nbspCCE 101&nbsp&nbsp&nbsp&nbsp</p></a></li>

<li style="float: left; "><a class="active" href="analytics_cce102.php"
<?php echo isset($ana2) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
&nbsp&nbsp&nbsp&nbspCCE 102&nbsp&nbsp&nbsp&nbsp</p></a></li>

<li style="float: left; "><a class="active" href="analytics_cce102.php"
<?php echo isset($ana) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
&nbsp&nbsp&nbsp&nbspIT ELECTIVE 3&nbsp&nbsp&nbsp&nbsp</p></a></li>

<li style="float: left; "><a class="active" href="analytics_cce102.php"
<?php echo isset($ana2) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
&nbsp&nbsp&nbsp&nbspNETWORKING 2&nbsp&nbsp&nbsp&nbsp</p></a></li>

<li style="float: left; "><a class="active" href="analytics_cce102.php"
<?php echo isset($ana2) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
&nbsp&nbsp&nbsp&nbspINTEGRATIVE PROGRAMMING AND TECHNOLOGIES&nbsp&nbsp&nbsp&nbsp</p></a></li>

<li style="float: left; "><a class="active" href="analytics_cce102.php"
<?php echo isset($ana2) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
&nbsp&nbsp&nbsp&nbspINFORMATION ASSURANCE AND SECURITY 1&nbsp&nbsp&nbsp&nbsp</p></a></li> -->

</body>
</html>