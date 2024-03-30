<?php
include 'subject_netw.php';
include '_conn.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullname = $_POST["fullname"];
    $netw = $_POST["netw"];
    $netw2 = $_POST["netw2"];
    $year = $_POST["year"];

    // Perform SQL insert
    $sql = "INSERT INTO tbl_users (fullname, netw, netw2, year) VALUES ('$fullname', '$netw', '$netw2', '$year')";

    if ($conn->query($sql) === TRUE) {
        
       
    } else {
        echo "error" . $conn->error;
       
    }
}

// Close the database connection
$conn->close();
?>
<script>
window.location.href = 'subject_netw.php';
</script>  