<?php
include 'subject_assur.php';
include '_conn.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullname = $_POST["fullname"];
    $assur = $_POST["assur"];
    $assur2 = $_POST["assur2"];
    $year = $_POST["year"];

    // Perform SQL insert
    $sql = "INSERT INTO tbl_users (fullname, assur, assur2, year) VALUES ('$fullname', '$assur', '$assur2', '$year')";

    if ($conn->query($sql) === TRUE) {
        
       
    } else {
        echo "error" . $conn->error;
       
    }
}

// Close the database connection
$conn->close();
?>
<script>
window.location.href = 'subject_assur.php';
</script>  