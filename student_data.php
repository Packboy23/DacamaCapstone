<?php
include 'intervene.php';
?>
<?php
include '_conn.php' ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $user_uname = $_POST["user_uname"];
    $course = $_POST["course"];
    $year = $_POST["year"];
    $day = $_POST["day"];
    $time = $_POST["time"];

    // Insert data into the "users" table
    $sql = "INSERT INTO tbl_users (user_id, user_uname, cay, day, time) VALUES ('$user_id', '$user_uname', '$course', '$year' , '$day','$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
