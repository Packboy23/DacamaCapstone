<?php
include 'exit_survey_student.php';
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
<div class="card"> <div  class="instruction">
<?php
include '_conn.php' ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $year = $_POST["year"];
    $course = $_POST["course"];
    $subject_name = $_POST["subject_name"];
    $subject_code = $_POST["subject_code"];
    $school_year = $_POST["school_year"];
    $semester = $_POST["semester"];
    $term = $_POST["term"];
    $class_schedule = $_POST["class_schedule"];
    $room = $_POST["room"];
    $good = $_POST["good"];
    
    $layk = mysqli_real_escape_string($conn, $_POST["layk"]);
    $interv = mysqli_real_escape_string($conn, $_POST["interv"]);


    // Insert data into the "users" table
    $sql = "INSERT INTO exit_survey (fullname, year, course, subject_name, subject_code, school_year, semester, term, class_schedule, room, good, layk, interv) VALUES ('$fullname' , '$year' , '$course' , '$subject_name' , '$subject_code', '$school_year' , '$semester' , '$term' , '$class_schedule' , '$room' , '$good' , '$layk', '$interv' )";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='instruction'>Succesfully submitted. You can submit another one!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


</div>
</div>
</div>
</html>