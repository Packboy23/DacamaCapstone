<?php
$ddd = true;
include 'intervene_teacher.php';
?>

<?php
include '_conn.php';
?>
<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">    

<div style="margin-left: 20px">
<?php
// SQL query to select data from a table
$sql = "SELECT * FROM tbl_undergo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th style='height: 48px; background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspFullName &nbsp&nbsp&nbsp&nbsp</th>
    <th style='background-color: black;color: white'>&nbsp &nbsp&nbsp&nbspStudent ID &nbsp&nbsp&nbsp&nbsp</th>
    <th style='background-color: black;color: white'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCourse&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
    <th style='background-color: black;color: white'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCourse&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
    <th style='background-color: black;color: white'>&nbsp&nbsp&nbsp Day&nbsp&nbsp&nbsp </th>
    <th style='background-color: black;color: white'> Time </th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='color: #34425A'>"  
        . $row["fullname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp" 
        .$row["stud_id"] ."&nbsp&nbsp&nbsp&nbsp&nbsp </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp" 
        . $row["course"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp" 
        . $row["year"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp" 
        . $row["day"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp" 
        .$row["time"] ."&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>&nbsp&nbsp&nbsp&nbsp&nbsp";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?></div>
</div>
</div>