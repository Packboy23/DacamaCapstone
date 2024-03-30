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
    window.history.forward();
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Academaid</title>
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<style>
    
</style>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header" style="background-color: #004c4c;">
            <a href="dashboard_super_welc.php"><h3>Academ<span>Aid</span></h3></a>
        </div>
        
        <div class="side-content" style="background-color: white; border: 1px solid #e7e7e7; ">
            <div class="profile">
               <a href="super_profile.php"> 
               <?php 
               include 'super_pic.php';
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
        echo "". $row["course"]; }}}?></small>
            </div>

            <div class="side-menu" style="background-color: ;">
                <ul>
                    
                    
                    
                    
                    
                    
              
                    <li style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -85px" >
                         <a href="teacher_list.php" <?php echo isset($r1) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?> style="border-style: solid; border-width: 1px; border-color: #f1f4f9" >
                       <img src="images/teach_icon.png" style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px;">
                            <small ><b style="font-size: 16px; color: #1d7874"> Teacher </b></small> 

                            
                        </a></li>
                    
                    <li>
                        <a href="student_profile_admin.php" <?php echo isset($r2) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?> style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -85px">
                       <img src="images/stuy_icon.png" style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px" >
                            <small ><b style="font-size: 16px; color: #1d7874"> Student</b></small>
                        </a></li>



                    <li>
                       <a href="exit_survey.php" <?php echo isset($r3) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?> style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -38px">
                       <img src="images/subj_icon.png"  style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px" >
                            <small ><b style="font-size: 16px; color: #1d7874"> Subject Survey</b></small>
                        </a></li>

                        <li>
                        <a href="intervene_admin.php" <?php echo isset($r4) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?> style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -60px" >
                       <img src="images/interv_icon.png" style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px">
                            <small ><b style="font-size: 16px; color: #1d7874">Intervention </b></small>
                        </a></li>

                        <li>
                        <a href="yearly_result_admin.php " <?php echo isset($r5) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?> style="border-style: solid; border-width: 1px; border-color: #f1f4f9; ">
                       <img src="images/yearly_icon.png"  style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px" >
                            <small ><b style="font-size: 16px; color: #1d7874">Year level Assesment </b></small>
                        </a> </li>

                        <li>
                        <a href="register_admin.php" <?php echo isset($r6) ? 'style="background-color: lightblue; color: white;font-weight: bold;' : ''; ?> style="border-style: solid; border-width: 1px; border-color: #f1f4f9; margin-left: -28px">
                       <img src="images/teach_icon.png"   style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px" >
                            <small ><b style="font-size: 16px; color: #1d7874">Account Creation</b></small>
                        </a></li>



                       <!-- <a href="">
                     <img src="images/intervenee.png" style="height: 18px; width: 18px; position: absolute; margin-top: 0px; margin-left: -20px">
                            <small  > <b>Subject</b></small>
                        </a> -->
                    

                    </li>

                    
                 
                   

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
                        <a href="logout.php" style="text-decoration: none; color: black; margin-right: 12px; margin-top: 5px"><span>Logout</span></a>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
    
     
</body>
</html>
