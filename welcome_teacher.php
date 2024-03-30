<?php
include 'dashboard_teacher.php';
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
  <li style="float: left; "><a class="active" href="#"><p style="color: #899DC1; font-weight: bold">News</p></a></li>
  <li style="float: left; "><a href="#"><p style="color: #899DC1; font-weight: bold">Updates</p></a></li>
 
</ul>


       
<div class="page-content">
          <div class="card">
              <small><p class="welcome" style="margin-left: -70px;">Hello Teacher! <br>
                 <br></p></small>
          </div>
  </div>



</body>
</html>