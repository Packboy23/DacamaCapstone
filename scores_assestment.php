<?php 
$eee = true;
include 'intervene_teacher.php';
?>
<br>
<html>
<body>
<li style="float: left; "><a href="scores_programming.php"
  <?php echo isset($xxx) ? 'style="border-style: solid; border-width: 1px; color: blue; width: 220px; border-radius: 6px; font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold; border-style: solid; border-width: 1px; width: 220px; ">
  Programming</p></a></li>

  <li style="float: left; "><a href="scores_database.php"
  <?php echo isset($yyy) ? 'style="border-style: solid; border-width: 1px ; color: blue; width: 220px; border-radius: 6px; font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold; border-style: solid; border-width: 1px; width: 220px;">
 Database</p></a></li> 

  <li style="float: left; "><a href="scores_networking.php"
  <?php echo isset($zzz) ? 'style="border-style: solid; border-width: 1px; color: blue; width: 220px; border-radius: 6px; font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold; border-style: solid; border-width: 1px; width: 220px;">
 Networking</p></a></li> 

</body>
</html>