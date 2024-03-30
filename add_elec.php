<?php
include 'subject_elec.php';
include '_conn.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullname = $_POST["fullname"];
    $elec = $_POST["elec"];
    $elec2 = $_POST["elec2"];
    $year = $_POST["year"];

    // Perform SQL insert
    $sql = "INSERT INTO tbl_users (fullname, elec, elec2, year) VALUES ('$fullname', '$elec', '$elec2', '$year')";

    if ($conn->query($sql) === TRUE) {
        
       
    } else {
        echo "error" . $conn->error;
       
    }
}

// Close the database connection
$conn->close();
?>
<script>
window.location.href = 'subject_elec.php';
</script>  