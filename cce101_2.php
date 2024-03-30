<?php
$uno_2 = true;
include 'interv_candi2.php';
?>

<html>
<body>
<div style="margin-top: 120px; margin-left: 230px">
<?php
// Assuming you have a database connection established

// Your database connection code goes here

// Query to retrieve data
$query = "SELECT fullname, year, exam_score FROM tbl_users WHERE exam_score IS NOT NULL AND exam_score  < 75 AND year = 2";
$your_db_connection = mysqli_connect("localhost", "root", "", "acmed_db");

$result = mysqli_query($your_db_connection, $query);

// Check if the query was successful
if ($result) {
    // Display the results
    echo "<h3> </h3><br>";
    echo "<table border='1'>
            <tr>
                <th style='width: 300px; height: 40px'>Name</th>
                
                <th style='width: 120px'>Exam Score</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['fullname']}</td>
              
                <td style='width: 120px'><center>{$row['exam_score']}</center></td>
              </tr>";
    }

    echo "</table>";
} else {
    // Display an error message if the query fails
    echo "Error: " . mysqli_error($your_db_connection);
}

// Close the database connection
mysqli_close($your_db_connection);
?>
</div>
</body>
</html>