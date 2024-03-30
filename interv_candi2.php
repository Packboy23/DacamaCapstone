<?php
$dos2 = true;
include 'interv_candi.php';
?>

<html>
<body>
  <div style="margin-top: 60px; position: absolute; margin-left: 300px">
<ul style="list-style-type: none;
  margin-top: ;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white; border-radius: 6px">
  <li style="float: left; "><a class="active" href="candi_elec.php" 
  <?php echo isset($uno_2) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  &nbsp&nbsp&nbsp&nbspIT ELECTIVE 3&nbsp&nbsp&nbsp&nbsp</p></a></li>
 
  <li style="float: left; "><a class="active" href="candi_netw.php"
  <?php echo isset($dos_2) ? 'style="background-color: lightgreen; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbspNETWORKING 2&nbsp&nbsp&nbsp&nbsp</p></a></li>
</div>
</body>
</html>