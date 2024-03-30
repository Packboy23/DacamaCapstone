<?php 
$a3 = true;
include 'dashboard.php';
?>
<html>
<head><title>Student Performance</title></head>



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


</style>
<body>
<div class="page-header" style="background-color: #f9f9f9">
                <h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 20px; ">&nbsp<!--<img src="images/performance.png" style="height: 48px; width: 48px; position: fixed; margin-top: -5px;">-->&nbsp&nbspStudent Performance</h1>
                <small></small>
            </div>


<div class="page-content" style="background-color: #f9f9f9"> 
<div class="card" style="background-color: white; border-style: none; border-width: 10px; border-color: #1d7874; box-shadow: none;
border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">

<?php 
include '_conn.php';
?> 


<?php

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $loggedInUserId = $_SESSION['user_id'];

    // SQL query to select data for the logged-in user
    $sql = "SELECT * FROM tbl_performance WHERE user_id = $loggedInUserId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table border='1'>";
        echo "<tr><th style='height: 50px; background-color:  black; color: white; '>&nbsp&nbsp&nbsp&nbspSubject &nbsp&nbsp&nbsp&nbsp</th>
        <th style='background-color: black; color: white;'>&nbsp &nbsp&nbsp&nbspGrade &nbsp&nbsp&nbsp&nbsp</th>
        <th style='background-color: black; color: white;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProfessor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        <th style='background-color: black; color: white;'>&nbsp&nbsp&nbsp Subject Code&nbsp&nbsp&nbsp </th>
        <th style='background-color: black; color: white;'>&nbsp&nbsp&nbsp School Year&nbsp&nbsp&nbsp </th>
        <th style='background-color: black; color: white;'>&nbsp&nbsp&nbsp Semester&nbsp&nbsp&nbsp </th>
        <th style='background-color: black; color: white;'>&nbsp&nbsp&nbsp Term&nbsp&nbsp&nbsp </th>
        <th style='background-color: black; color: white;'>&nbsp&nbsp&nbsp Program Head&nbsp&nbsp&nbsp </th>
        <th style='background-color: black; color: white;'> &nbsp&nbsp&nbsp Dean&nbsp&nbsp&nbsp </th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td style='color: #34425A;'>&nbsp&nbsp&nbsp&nbsp"  
            . $row["subject"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            .$row["grade"] ."&nbsp&nbsp&nbsp&nbsp&nbsp </td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["professor"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["subject_code"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["school_year"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["semester"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["term"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["program_head"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='background-color: #f9f9f9; color: dark'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            .$row["dean"] ."&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>&nbsp&nbsp&nbsp&nbsp&nbsp </td></tr>";
            
        }

        echo "</table>";
    } else {
        echo "No results for the logged-in user";
    }
} else {
    echo "User not logged in";
}

// Close connection
$conn->close();
?>



</div>

</div>