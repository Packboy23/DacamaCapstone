<?php
include 'student_profile.php';
?>

<?php
include '_conn.php';
?>

<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">


<div class="page-header" style="background-color: #f9f9f9; border-radius: 10px">

                <h3><span style="color: #74767d;">Fifth Year</span> </h3>

    
            </div>


<?php

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $loggedInUserId = $_SESSION['user_id'];

    // SQL query to select data for the logged-in user
    $sql = "SELECT * FROM tbl_users WHERE year = 5";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table border='1'>";
        echo "<tr><th style='height: 50px; background-color:  #34425A;color: white'>&nbsp&nbsp&nbsp&nbspName &nbsp&nbsp&nbsp&nbsp</th>
        <th style='background-color:  #34425A;color: white'>&nbsp&nbspID Number&nbsp&nbsp </th>
        <th style='background-color:  #34425A;color: white'> Course </th>
        <th style='background-color:  #34425A;color: white'>&nbsp&nbsp&nbspProgram&nbsp&nbsp&nbsp</th>
        <th style='background-color:  #34425A;color: white'>&nbsp&nbsp&nbsp Email&nbsp&nbsp&nbsp </th>
        <th style='background-color:  #34425A;color: white'>&nbsp&nbspContact&nbsp&nbsp Number&nbsp&nbsp</th>
        <th style='background-color:  #34425A;color: white'>&nbsp&nbsp&nbsp Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        <th style='background-color:  #34425A;color: white'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Birthday&nbsp&nbsp&nbsp&nbsp&nbsp </th>
        <th style='background-color:  #34425A;color: white'> &nbsp&nbsp&nbsp Skills&nbsp&nbsp&nbsp </th></tr>";

        


        while ($row = $result->fetch_assoc()) {
            echo "<tr ><td style='color: #34425A'>"  
            . $row["fullname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td style='color: black;'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            .$row["id_number"] ."&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='color: black;'>&nbsp&nbsp&nbsp" 
            . $row["course"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='color: black;'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["program"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='color: black;'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["email"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='color: black;'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["contact_number"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td style='color: black;'> &nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["address"] . "</td><td style='color: black;'>&nbsp&nbsp&nbsp&nbsp&nbsp" 
            . $row["birthday"] . "</td><td style='color: black;'>&nbsp&nbsp&nbsp&nbsp" 
            .$row["skills"] ."&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp";
            
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