<?php
include 'dashboard.php';
?>

<html>
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
<div class="page-header">
                <h1><span style="color: #74767d;">Dashboard</span></h1>
</div>

<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;">
  <li style="float: left; "><a class="active" href="dash_instruct.php"><p style="color: #899DC1; font-weight: bold">
  <img src="images/instruct.png" style="width: 25px; height: 25px; position: absolute; margin-top: -4px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Instruction</p></a></li>
  <li style="float: left; "><a class="active" href=""><p style="color: #899DC1; font-weight: bold">News</p></a></li>
  <li style="float: left; "><a href=""><p style="color: #899DC1; font-weight: bold">Updates</p></a></li>
 
</ul>

<div class="page-content">
    <div class="card">

    <p class="welcome">"It is never too late to be what you might have been." - George Eliot <br></p>
    </div>
  </div>


</body>
</html>