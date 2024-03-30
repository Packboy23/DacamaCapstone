<?php 
include 'intervene.php';
include 'crud_test2.php'; 
include '_conn.php';
?>

<html>
<style>
    .form-box {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        width: 600px; /* Adjust the width as needed */
        margin-left: 60px;
        margin-top: 50px; /* Adjust the top margin as needed */
    }
</style>
<body>

<div class="form-box" style=" font-weight: bold" >
<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'choice' key is set in $_POST
    if (isset($_POST['choice'])) {
        // Assuming $_POST['choice'] is an array with question IDs as keys and user choices as values
        $userChoices = $_POST['choice'];

        // Fetch correct answers from the database
        $tasks = getTasks();

        // Output debug information (optional)
        echo "<pre>";
      
        echo "</pre>";

        // Calculate the score
        $score = 0;
        foreach ($tasks as $task) {
            $questionId = $task['id'];
            $correctAnswer = $task['correct_answer'];

            // Check if the user's answer is set and is correct
            if (isset($userChoices[$questionId])) {
                if ($userChoices[$questionId] === $correctAnswer) {
                    $score++;
                }
            } else {
                // Handle unanswered question (you can choose to deduct points, ignore, or handle as needed)
                // For example, you might deduct a fraction of a point for each unanswered question
                // $score -= 0.5; // Adjust as needed
            }
        }

        $passingGrade = 0.75 * count($tasks);

        // Display the score
        echo "Your score is: $score out of " . count($tasks);
                                         
        if ($score >= $passingGrade) {
            echo "<br>Congratulations! You passed!";
        } else {
            echo "<br><br>Unfortunately, you did not pass <br><br>
                  Please fill up the form in the candidates for assistance <br>
                  So that we can assist you  <br>
                  Thank you.";
        }

        // Save the score in the database
        $loggedInUserId = $_SESSION['user_id'];
        $scores = $score;
        $user_id = $loggedInUserId; // Replace with the actual user ID
        $timestamp = date("Y-m-d H:i:s");   
        $over_score = count($tasks);

        // Insert the score into the database
        $sql = "INSERT INTO user_score2 (user_id, scores, timestamp, over_score) VALUES ('$user_id', '$scores', '$timestamp', '$over_score')";
        
        if ($conn->query($sql) === TRUE) {
            // Update the user_scores table with fullname from tbl_users
            $updateSql = "UPDATE user_score2
                          JOIN tbl_users ON user_score2.user_id = tbl_users.user_id
                          SET user_score2.fullname = tbl_users.fullname";
            
            if ($conn->query($updateSql) === TRUE) {
                echo "<br><br>";
            } else {
                echo "Error updating Fullname: " . $updateSql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
       
    } else {
        echo "No answers submitted.";
    }
}

?>

</div>


</body>
</html>
