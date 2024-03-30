<?php
include 'intervene.php';
?>

<html>
<style>
.instruction {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 16px;
            color: green;
        }
    </style>

<div class="page-content">
<div class="card" class="instruction">
<?php
include '_conn.php' ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stud_id = $_POST["stud_id"];
    $fullname = $_POST["fullname"];
    $course = $_POST["course"];
    $year = $_POST["year"];
    $day = $_POST["day"];
    $time = $_POST["time"];

    // Insert data into the "users" table
    $sql = "INSERT INTO tbl_undergo (stud_id, fullname, course, year, day, time) VALUES ('$stud_id', '$fullname', '$course', '$year' , '$day','$time')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='instruction'>Form is submitted successfully. We will soon approach you. </p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


</div>
</div>
<html>