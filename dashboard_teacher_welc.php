<?php
$a = true;
include 'dashboard_teacher.php';
?>

<html>
  <head>
  <script type="text/javascript">
    window.history.forward();
</script>
</head>
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
           
            color: gray;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

</style>
<body>   
<div class="page-header" style="background-color: #f9f9f9;">
<h1 style="text-shadow: 1px 1px 1px #000000; font-size: 20px"><span style="color: #1d7874;">&nbsp<!--<img src="images/dashboard.png" style="height: 43px; width: 43px; position: fixed; margin-top: -3px; margin-left: -5px">-->&nbsp&nbspDashboard</span></h1>
</div>

<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white;">
  <li style="float: left; "><a class="active" href="news.php"><p style="color: #899DC1; font-weight: bold">News</p></a></li>
  <li style="float: left; "><a href="updates.php"><p style="color: #899DC1; font-weight: bold">Updates</p></a></li>
  <li style="float: left; "><a href="analytics.php" 
  <?php echo isset($z1) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>><p style="color: #899DC1; font-weight: bold">Analytics</p></a></li>
  
 
</ul>


       
<!--<div class="page-content" style="background-color: #f9f9f9">
          <div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">

              <small><p class="welcome" style="margin-left: -70px; text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px">
              "The art of teaching is the art of assisting Discovery"
-Mark Van Doren
              <br>
                 <br></p></small>
          </div>
  </div>-->



</body>
</html>