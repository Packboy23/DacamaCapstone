<?php
include 'subject1.php';
include '_conn.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullname = $_POST["fullname"];
    $exam_score = $_POST["exam_score"];
    $exam_score2 = $_POST["exam_score2"];
    $year = $_POST["year"];

    // Perform SQL insert
    $sql = "INSERT INTO tbl_users (fullname, exam_score, exam_score2, year) VALUES ('$fullname', '$exam_score', '$exam_score2', '$year')";

    if ($conn->query($sql) === TRUE) {
        
       
    } else {
        echo "error" . $conn->error;
       
    }
}

// Close the database connection
$conn->close();
?>
<script>
window.location.href = 'subject1.php';
</script>  