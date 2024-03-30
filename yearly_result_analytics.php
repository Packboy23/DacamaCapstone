<?php

$singko = true;
include 'yearly_result.php';

?>
<html>
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
  min-width: 120px;
  
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
<body>


<li style="float: left; "><div class="dropdown">
  <button class="dropbtn" style="margin-top: 10px; margin-left: 10px; padding: 15px; height: 50px;  font-size: 18px; color: blue; border-radius: 2px; border-color: white; border-width: 1px;  position: relative; cursor: pointer">Year</button>
  <div class="dropdown-content" style="margin-left: 12px; width: 100px; border-radius: 6px; ">
    <a href="yearly_analytics_first.php" style="color: #34425A; font-size: 12px; width: 120px;  border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>First Year</b></a>
    <a href="yearly_analytics_second.php" style="color: #34425A; font-size: 12px; width: 120px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>Second Year</b></a>
    <a href="yearly_analytics_third.php" style="color: #34425A; font-size: 12px; width: 120px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>Third Year</b></a>
    <a href="yearly_analytics_fourth.php" style="color: #34425A; font-size: 12px; width: 120px; border-radius: 6px; border-style: outset; border-width: 1px; border-color: white"><b>Fourth Year</b></a>
  </div>
</div></li>
</body>
</html>