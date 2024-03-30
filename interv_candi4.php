<?php
$kwatro4 = true;
include 'interv_candi.php';
?>

<?php
// Assuming you have a database connection established

// Your database connection code goes here

// Query to retrieve data
$query = "SELECT fullname, year, exam_score FROM tbl_users WHERE exam_score < 75 AND year = 4";
$your_db_connection = mysqli_connect("localhost", "root", "", "acmed_db");

$result = mysqli_query($your_db_connection, $query);

// Check if the query was successful
if ($result) {
    // Display the results
    echo "<h2>Students with Exam Scores Below 75:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Year</th>
                <th>Exam Score</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['fullname']}</td>
                <td>{$row['year']}</td>
                <td>{$row['exam_score']}</td>
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
