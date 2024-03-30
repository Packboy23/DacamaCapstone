<?php
$r5 = true;
include 'dashboard_super.php';
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

        /* Add your styles here */

      
</style>
<body>
 
<div class="page-header" style="background-color: #f9f9f9">

                <h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px"><span><!--<img src="images/intervenee.png" style="height: 48px; width: 48px; position: absolute; margin-top: -3px; margin-left: 5px">-->&nbsp&nbsp&nbspYear level Assessment Result</span> </h1>

    
            </div>

       
<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">

<li style="float: left;">
    <a href="yearly1st_result_admin.php" class="active" 
       <?php echo isset($firstYear) ? 'style="background-color: lightblue; color: blue;font-weight: bold;' : ''; ?>>
       <p style="color: #899DC1; font-weight: bold">&nbsp&nbsp&nbsp&nbsp1st Year&nbsp&nbsp&nbsp&nbsp</p>
    </a>
</li>

<li style="float: left;">
    <a href="yearly2nd_result_admin.php" class="active" 
       <?php echo isset($secondYear) ? 'style="background-color: lightblue;color: blue;font-weight: bold;' : ''; ?>>
       <p style="color: #899DC1; font-weight: bold">&nbsp&nbsp&nbsp&nbsp2nd Year&nbsp&nbsp&nbsp&nbsp</p>
    </a>
</li>

<li style="float: left;">
    <a href="yearly3rd_result_admin.php" class="active" 
       <?php echo isset($thirdYear) ? 'style="background-color: lightblue;color: blue;font-weight: bold;' : ''; ?>>
       <p style="color: #899DC1; font-weight: bold">&nbsp&nbsp&nbsp&nbsp3rd Year&nbsp&nbsp&nbsp&nbsp</p>
    </a>
</li>

<li style="float: left;">
    <a href="yearly4th_result_admin.php" class="active" 
       <?php echo isset($fourthYear) ? 'style="background-color: lightblue;color: blue;font-weight: bold;' : ''; ?>>
       <p style="color: #899DC1; font-weight: bold">&nbsp&nbsp&nbsp&nbsp4th Year&nbsp&nbsp&nbsp&nbsp</p>
    </a>
</li>
 
</ul>

<!--<div class="page-content">
    <div class="card">

    <p class="welcome" style="">"You can't go back and change the beginning, but you can start where you are and change <br> the ending." - C.S. Lewis<br></p>
    </div>
  </div>    -->

  
<script>
    function changeColor() {
        var div = document.getElementById('active');
        // Change the background color to a new color after clicking
        div.style.backgroundColor = "blue";
    }

   
</script>
  
</body>
</html>