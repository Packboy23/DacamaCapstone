<?php
include 'subject2.php';
include '_conn.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullname = $_POST["fullname"];
    $cc102_1 = $_POST["cc102_1"];
    $cc102_2 = $_POST["cc102_2"];
    $year = $_POST["year"];

    // Perform SQL insert
    $sql = "INSERT INTO tbl_users (fullname, cc102_1, cc102_2, year) VALUES ('$fullname', '$cc102_1', '$cc102_2', '$year')";

    if ($conn->query($sql) === TRUE) {
        
       
    } else {
        echo "error" . $conn->error;
       
    }
}

// Close the database connection
$conn->close();
?>
<script>
window.location.href = 'subject2.php';
</script>  