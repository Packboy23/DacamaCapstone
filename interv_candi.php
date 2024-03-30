<?php
$upat = true;
include 'class_record.php';
?>

<html>
 <body>     
<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">

 <li style="float: left; "><a class="active" href="interv_candi1.php" 
  <?php echo isset($uno1) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  &nbsp&nbsp&nbsp&nbsp1st Year&nbsp&nbsp&nbsp&nbsp</p></a></li>
 
  <li style="float: left; "><a class="active" href="interv_candi2.php"
  <?php echo isset($dos2) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbsp2nd Year&nbsp&nbsp&nbsp&nbsp</p></a></li>
 
  <li style="float: left; "><a class="active" href="interv_candi3.php"
  <?php echo isset($tres3) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbsp3rd Year&nbsp&nbsp&nbsp&nbsp</p></a></li>

    


<!--<label for="yearFilter">Select Year:</label>
    <select name="yearFilter" id="yearFilter">
        <option value="1"><a href="interv_candi1.php">First Year</a></option>
        <option value="2"><a href="interv_candi2.php">Second Year</a></option>
        <option value="3"><a href="interv_candi3.php">Third Year</a></option>
        <option value="4"><a href="interv_candi4.php">Fourth Year</a></option>ok
        
    </select> -->

<body>
</html>