<?php
$duha = true;
include 'class_record.php';
?>

<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
 font-weight: bold;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 140px;
 
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

.dropdown:hover .dropbtn {background-color: ; color: white}
</style>
</head>
<body style="background-color:white;"> 
<!--
    <div style="margin-left: 30px">
<br><br>
<li style="float: left; "><a href="subject_elec.php"
  <?php echo isset($elec) ? 'style="border-style: solid; border-width: 1px; color: blue; width: 220px; border-radius: 6px; font-weight: bold; ' : ''; ?>><p style="color: #899DC1; font-weight: bold; border-style: solid; border-width: 1px; width: 220px; height: 40px; padding: 10px; margin-top: -10px; border-radius: 6px">
  IT ELECTIVE 3</p></a></li>

  <li style="margin-left: 250px; width: 250px"><a href="subject_netw.php"
  <?php echo isset($netw) ? 'style="border-style: solid; border-width: 1px ; color: blue; width: 220px; border-radius: 6px; font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold; border-style: solid; border-width: 1px; width: 220px; height: 40px; padding: 10px; margin-top: -10px; border-radius: 6px">
  NETWORKING 2</p></a></li> 
</div>-->

<li style="float: left; "><div class="dropdown">
  <button class="dropbtn" style="margin-top: 10px; margin-left: 10px; padding: 15px; height: 50px;  font-size: 18px; color: blue; border-radius: 2px; border-color: white; border-width: 1px;  position: relative; cursor: pointer">Subject</button>
  <div class="dropdown-content" style="margin-left: 12px; width: 100px; border-radius: 6px">
    <a href="subject_elec.php" style="color: #34425A; font-size: 12px; width: 140px;  border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>IT ELECTIVE 3</b></a>
    <a href="subject_netw.php" style="color: #34425A; font-size: 12px; width: 140px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>NETWORKING 2</b></a>
    
  </div>
</div></li>

</body>
</html>