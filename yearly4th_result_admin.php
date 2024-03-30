<?php
$fourthYear = true;
include 'yearly_result_admin.php';
?>

<?php
include '_conn.php';
?>
<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">    
<div style="margin-left: 60px">
<?php
// SQL query to select data from a table
$sql = "SELECT * FROM tbl_yearly_four";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th style='height: 50px; background-color: #34425A;color: white'>&nbsp&nbsp&nbsp&nbspName &nbsp&nbsp&nbsp&nbsp</th>
    <th style='background-color: #34425A;color: white'>&nbsp &nbsp&nbsp&nbspScore&nbsp&nbsp&nbsp&nbsp</th>
    <th style='background-color: #34425A;color: white'>&nbsp &nbsp&nbsp&nbspOver&nbsp&nbsp&nbsp&nbsp</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='color: #34425A'>"  
        . $row["fullname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" 
        .$row["score"] ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp20&nbsp&nbsp</td>
        " 
       ;
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?><br></div>
</div>
</div>