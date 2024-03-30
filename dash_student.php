<?php
session_start();
?>

<?php
include '_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
<script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack(),0");
    window.onunload=function(){null;}
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Academaid</title>
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
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
            

            <br>
            <div class="side-menu" style="background-color: ; ">
                <ul>
                    
               <!-- <hr style="border-width: 1px; border-style: solid; border-color: #f1f4f9"> -->
                
                <div style="border-style: solid; border-width: 1px; border-color: #f1f4f9">
                    <li>
                       <a href="dashboard_dash.php">
                        
                            <!--<span class="las la-user-alt"></span>-->
                            <img src="images/dash_icon.png" style="height: 20px; width: 20px; position: relative; margin-bottom: -6px; ">
                            <small>Dashboard</small>
                        </a>
                    </li>
                </div>

                 <!-- <hr style="border-width: 1px; border-style: solid; border-color: #f1f4f9">  -->
                    
                 
                   

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
                 
                        <span class="las la-power-off" style="margin-top: 5px" ></span>
                        <a href="logout.php" style="color: black; margin-right: 12px; margin-top: 5px"><span>Logout</span></a>
                       
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>

        
            
    
     
</body>
</html>
