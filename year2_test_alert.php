<?php
// Include the connection file
include '_conn.php';
// Check if the user is logged in and has a year column value of 1
// Start the session (if not already started)
if (session_status() == PHP_SESSION_NONE) {
    // Start the session if not already started
    session_start();
}

if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Query to check the user's year column value
    $checkYearQuery = "SELECT year FROM tbl_users WHERE user_id = $user_id";
    $resultYear = $conn->query($checkYearQuery);

    if ($resultYear->num_rows > 0) {
        $row = $resultYear->fetch_assoc();

        // Check if the user's year column value is 1
        if ($row['year'] == 2) {
            $c2 = true;
        } else {
            // Redirect or display an error message if the user's year is not 1
            $c2 = true;
            include 'yearly.php';
            echo "<p style='color: red; padding: 20px; border-style: ridge; height: 80px; border-color: green; border-width: 1px; border-radius: 6px; width: 348px; margin-top: 30px; margin-left: 30px'><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: green'>Unauthorized access:</span><br> You do not have the required year level.</b></p>";
   
            //header("Location: unauthorized_access.php");
            exit();
        }
    } else {
        // Redirect or display an error message if the user is not found
        $c2 = true;
        include 'yearly.php';
        echo "<p style='color: red; padding: 20px; border-style: ridge; height: 80px; border-color: green; border-width: 1px; border-radius: 6px; width: 348px; margin-top: 30px; margin-left: 30px'><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: green'>Unauthorized access:</span><br> You do not have the required year level.</b></p>";
        //header("Location: unauthorized_access.php");
        exit();
    }
} else {
    // Redirect or display an error message if the user is not logged in
    $c2 = true;
    include 'yearly.php';
    echo "<p style='color: red; padding: 20px; border-style: ridge; height: 80px; border-color: green; border-width: 1px; border-radius: 6px; width: 348px; margin-top: 30px; margin-left: 30px'><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: green'>Unauthorized access:</span><br> You do not have the required year level.</b></p>";
    //header("Location: unauthorized_access.php");
    exit();
}

// Include the yearly_result.php file if the user is authorized
include 'yearly.php';
?>

<!-- The rest of your code goes here -->

<html>
<style>
     .form-box {
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 10px;
            width: 520px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
            box-shadow: 0 0 0px rgba(0, 0, 0.1);
        }
</style>    
<body>

<div class="form-box" style="margin-left: 30px; margin-top: 30px; border-width: 1px; border-color: green; ">
<p style="margin-left: 20px; "><b>This test will take 1 hour and it can only be taken once. <br>
Once you've started you can't pause it. </b><br>
</p><br>
<form action="yearly2nd.php" method="post">
<button type="submit" style="margin-left: 180px; width: 100px; height: 35px; padding: 10px; border-radius: 6px; border-width: 1px; background-color: darkgray; color: blue"><b>Start</b></button> 
</form>


<!--<a href="subject_test.php"><button>no</button></back>-->
</div>
</body>
</html>