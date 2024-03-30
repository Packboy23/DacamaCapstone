<?php
include 'exit_survey.php';
?>

<?php
include '_conn.php';
?>
<div class="page-content" style="background-color: #f9f9f9; width: 2100px">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; width: 2000px">    
<center>
<?php
// SQL query to select data from a table
$sql = "SELECT * FROM exit_survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style='width: 100%;'>";
    echo "<tr style='height: 50px'>
            <th style='width: 200px; background-color: #34425A; color: white;width: 300px'>Fullname</th>
            <th style='width: 50px; background-color: #34425A; color: white;'>Year</th>
            <th style='width: 100px; background-color: #34425A; color: white;'>Course</th>
            <th style='background-color: #34425A; color: white;'>Subject Name</th>
            <th style='background-color: #34425A; color: white;'>Subject Code</th>
            <th style='background-color: #34425A; color: white; width: 150px'>School Year</th>
            <th style='background-color: #34425A; color: white; width: 100px'>Semester</th>
            <th style='background-color: #34425A; color: white; width: 70px'>Term</th>
            <th style='background-color: #34425A; color: white;'>Class Schedule</th>
            <th style='background-color: #34425A; color: white;'>Room Number</th>
            <th style='background-color: #34425A; color: white; width: 300px'>Is She/He good about this subject?</th>
            <th style='background-color: #34425A; color: white;'>Does she/he like this subject?</th>
            <th style='background-color: #34425A; color: white;'>Does she/he want to be assisted with this subject?</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td style='color: #34425A;'>" . $row["fullname"] . "</td>
                <td >&nbsp&nbsp&nbsp&nbsp" . $row["year"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["course"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["subject_name"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["subject_code"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["school_year"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["semester"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["term"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["class_schedule"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["room"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["good"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["layk"] . "</td>
                <td>&nbsp&nbsp&nbsp&nbsp" . $row["interv"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?></center>
</div>
</div>