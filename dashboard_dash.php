<?php
session_start();
?>

<?php
include '_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Academaid</title>
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
body
	{
		background-image: url('');
		opacity: 1;
		background-size: 100% 100%;
	
	}


    </style>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header" style="background-color: #004c4c;">
            <a href="dashboard_welc.php"><h3>Academ<span>Aid</span></h3></a>
        </div>
        
        <div class="side-content" style="background-color: white; border: 1px solid #e7e7e7">
            <div class="profile">
               <a href="profile.php"> 
               <?php 
               include 'student_pic.php';
               ?>
               </a>
                <h4 style="color: black; margin-top: 5px"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp". $row["fullname"] ; }}}?></h4>
                <small><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "". $row["course"]; }}}?></small>
            </div>

            
            <div class="side-menu" >
                <ul>
                    
                <!--<hr style="border-width: 1px; border-style: solid; border-color: #f1f4f9">  -->
                
                    <li style="border-style: solid; border-width: 1px; border-color: #f6f6f6; margin-left: -30px">
                       <a href="intervene.php">
                          <!--  <span class="las la-user-alt"></span> -->
                          <img src="images/interv_icon.png" style=" position: relative; margin-bottom: -7px; ">
                            <small>Intervention Program</small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f6f6f6">
                       <a href="performance.php">
                            <!--<span class="las la-tasks"></span>-->
                            <img src="images/perf_icon.png" style=" position: relative; margin-bottom: -7px; ">
                            <small>Student Performance</small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f6f6f6">
                       <a href="exit_survey_student.php">
                         <!--   <span class="las la-tasks"></span> -->
                         <img src="images/subj_icon.png" style=" position: relative; margin-bottom: -7px; "> 
                            <small>Subject Survey</small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f6f6f6">
                       <a href="yearly.php">
                         <!--   <span class="las la-tasks"></span> -->
                         <img src="images/yearly_icon.png" style=" position: relative; margin-bottom: -7px; "> 
                            <small>Year level Assessment</small>
                        </a>
                    </li>

                <!--    <hr style="border-width: 1px; border-style: solid; border-color: #f1f4f9">  -->
                    
                 
                   

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header style="background-color: white">

       


            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    
                    
                    <div class="user">
                       
                        <div class="bg-img" style="background-image: url(img/1.jpeg)">
                       
                      
                        </div>
                        
                        <span class="las la-power-off" style="margin-top: 5px"></span>
                        <a href="logout.php" style="color: black; margin-right: 12px; margin-top: 5px"><span>Logout</span></a>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
        <div class="page-header" style="background-color: #f9f9f9">
                <h1 style="text-shadow: 1px 1px 1px #000000; font-size: 20px"><span style="color: #1d7874;">&nbsp<!--<img src="images/dashboard.png" style="height: 53px; width: 53px; position: fixed; margin-top: -3px; margin-left: -5px">-->&nbsp&nbspStudent Dashboard</span></h1>
</div>

<ul style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white">
  <li style="float: left; "><a class="active" href="#"><p style="color: #899DC1; font-weight: bold">News</p></a></li>
  <li style="float: left; "><a href="#"><p style="color: #899DC1; font-weight: bold">Updates</p></a></li>
 
</ul>


       
<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="background-color: white; border-style: none; border-width: 10px; border-color: #1d7874; 
border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">
              <small><p class="welcome" style="margin-left: -70px; text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 25px"><br>Hello Student! <br>
                 <br></p></small>
          </div>
  </div>

     
</body>
</html>
