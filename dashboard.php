<?php
session_start();
include '_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--<script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack(),0");
    window.onunload=function(){null;}
</script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Academaid</title>
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header" style="background-color: #004c4c; ">
            <a href="dashboard_welc.php"><h3>Academ<span>Aid</span></h3></a>
        </div>
        
        <div class="side-content" style="background-color: white; border: 1px solid #e7e7e7">
            <div class="profile">
               <a href="profile.php"> 
               <?php 
               include 'student_pic.php';
               ?>
               </a>
                <h4 style="color: black; margin-top: 5px; font-size: 18px"><?php 
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
        echo "". $row["course"] . "&nbsp-&nbsp" .  $row["year"]; }}}?></small> 
            </div>

            <div class="side-menu" style="background-color: ">
                <ul>
                    
                <li style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -90px">
                    
                    <a href="dashboard_welc.php" <?php echo isset($a1) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?>>
                       <img src="images/dash_icon.png" style=" position: relative; margin-bottom: -7px; ">  <small style="font-size: 16px; color: #1d7874"><b>Dashboard</b></small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -59px">
                    
                    <a href="intervene.php" <?php echo isset($a2) ? 'style="background-color: lightblue; black: white;font-weight: bold;' : ''; ?>>
                       <img src="images/interv_icon.png" style=" position: relative; margin-bottom: -7px; ">  <small style="font-size: 16px; color: #1d7874"><b>Assessment Test</b></small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -35px">
                       <a href="performance.php" <?php echo isset($a3) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?>>
                          <img src="images/perf_icon.png" style=" position: relative; margin-bottom: -7px; ">
                            <small style="font-size: 16px; color: #1d7874"><b>Student Performance</b></small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -71px">
                       <a href="exit_survey_student.php" <?php echo isset($a4) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?>>
                         <img src="images/subj_icon.png" style=" position: relative; margin-bottom: -7px; "> 
                            <small style="font-size: 16px; color: #1d7874"><b>Subject Survey</b></small>
                        </a>
                    </li>

                    <li style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -30px">
                       <a href="yearly.php" <?php echo isset($a5) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?>>
                          <img src="images/yearly_icon.png" style=" position: relative; margin-bottom: -7px; "> 
                            <small style="font-size: 16px; color: #1d7874"><b>Year level Assessment</b></small>
                        </a>
                    </li>

                    
                 
                   

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header style="background-color: white; ">

       


            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    
                    
                    <div class="user">
                       
                        <div class="bg-img" style="background-image: url(img/1.jpeg)">
                       
                      
                        </div>
                        

                        <!--<span class="las la-power-off" style="margin-top: 5px"></span>-->
                        <a href="logout.php" onclick="confirmLogout(event)" style="color: black; margin-right: 12px; margin-top: 5px "><span ><b style="font-size: 14px"><img src="images/logout.png" style="position: absolute; height: 16px; width: 16px; margin-left: -23px; margin-top: -1px;">Logout</b></span></a>
                                  
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
    
     
        <script>
    function confirmLogout(event) {
        // Display a confirmation dialog
        var confirmLogout = confirm("Are you sure you want to log out?");
        
        // Log the confirmation result to the console for debugging
        console.log("Confirmation result:", confirmLogout);

        // If the user clicks "OK," redirect to the logout script/page
        if (confirmLogout) {
            console.log("Logging out...");
            window.location.href = 'logout.php'; // Replace 'logout.php' with your actual logout script/page
        } else {
            console.log("Cancelled logout.");
            event.preventDefault(); // Prevent the default link behavior
        }
    }

    // Move down the confirmation dialog after the page loads
    document.addEventListener('DOMContentLoaded', function() {
        var logoutMessage = document.querySelector('.logout-message');
        if (logoutMessage) {
            logoutMessage.style.marginTop = '100px'; // Adjust the value to move the message down
        }
    });
</script>

</body>
</html>
