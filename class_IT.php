<?php
$b = true;
include 'dashboard_teacher.php';
?>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.dropbtn:active {background-color: #3e8e41;}



</style>
</head>
<body style="background-color:white;">
<div class="page-header" style="background-color: #f9f9f9">

<h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px"><span>&nbsp&nbspClass List</span> </h1>
    
            </div>


  
  <li style="float: left; "><div class="dropdown">
  <button class="dropbtn">First Year</button>
  <div class="dropdown-content">
    <a href="subject1.php">CCE 101</a>
    <a href="subject2.php">CCE 102</a>
  </div>
</div></li>

<li style="float: left; "><div class="dropdown">
  <button class="dropbtn">Second Year</button>
  <div class="dropdown-content">
    <a href="subject_elec.php">IT ELECTIVE 3</a>
    <a href="subject_netw.php">NETWORKING 2</a>
  </div>
</div></li>

<li style="float: left; "><div class="dropdown">
  <button class="dropbtn">Third Year</button>
  <div class="dropdown-content">
    <a href="subject_integ.php" style="width: 460px">INTEGRATIVE PROGRAMMING AND TECHNOLOGIES</a>
    <a href="subject_assur.php" style="width: 400px">INFORMATION ASSURANCE AND SECURITY 1</a>
  </div>
</div></li>



  




</body>
</html>