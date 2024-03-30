<?php 
$f = true;
include 'dashboard_teacher.php';
?>

<html>
<head><title>Yearly Result</title></head>


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

                <h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px"><span><!--<img src="images/intervenee.png" style="height: 48px; width: 48px; position: absolute; margin-top: -3px; margin-left: 5px">-->&nbsp&nbsp&nbsp Assessment Result</span> </h1>

    
            </div>

       
<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">
  <li style="float: left; "><a class="active" href="yearly1st_result.php" 
  <?php echo isset($uno) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
  &nbsp&nbsp&nbsp&nbsp1st Year&nbsp&nbsp&nbsp&nbsp</p></a></li>
 
  <li style="float: left; "><a class="active" href="yearly2nd_result.php"
  <?php echo isset($dos) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbsp2nd Year&nbsp&nbsp&nbsp&nbsp</p></a></li>
 
  <li style="float: left; "><a class="active" href="yearly3rd_result.php"
  <?php echo isset($tres) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbsp3rd Year&nbsp&nbsp&nbsp&nbsp</p></a></li>
 
  <li style="float: left; "><a class="active" href="yearly4th_result.php"
  <?php echo isset($kwatro) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbsp4th Year&nbsp&nbsp&nbsp&nbsp</p></a></li>

 <li style="float: left; "><a class="active" href="yearly_result_analytics.php"
  <?php echo isset($singko) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">
 &nbsp&nbsp&nbsp&nbspAnalytics&nbsp&nbsp&nbsp&nbsp</p></a></li>
 


</ul>

<!--<div class="page-content">
    <div class="card">

    <p class="welcome" style="">"You can't go back and change the beginning, but you can start where you are and change <br> the ending." - C.S. Lewis<br></p>
    </div>
  </div>    -->



</body>
</html>