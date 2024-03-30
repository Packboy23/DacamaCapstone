<?php
// process_test.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the timer value from the submitted form
    $timerValue = isset($_POST['timer']) ? intval($_POST['timer']) : 0;

    // Perform any additional processing you need with the form data
    // For example, you might save the timer value to a database

    // Redirect to the student's dashboard with the timer value as a query parameter
    header("Location: test_output.php?timer=$timerValue");
    exit();
} else {
    // Handle cases where the form is not submitted via POST
    echo "Invalid request method.";
}
?>
