<?php
include 'yearly.php';
?>

<div class="page-content">
    <div class="card">
        <?php
        include '_conn.php';

        $loggedInUserId = $_SESSION['user_id'];
        $user_id = $loggedInUserId; // Replace with the actual user ID

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if 'fullname' key is set before accessing it
            if (isset($_POST["fullname"])) {
                $fullname = $_POST["fullname"];
            } else {
                // Handle the case where 'fullname' is not set
                $fullname = ""; // or set a default value
            }

            $score = $_POST["score"]; // Assuming you have a form element with the name "score"

            // Insert data into tbl_yearly
            $sql = "INSERT INTO tbl_yearly_four (user_id, fullname, score) VALUES ('$user_id', '$fullname', '$score')";

            if ($conn->query($sql) === TRUE) {

                $updateSql = "UPDATE tbl_yearly_four
                JOIN tbl_users ON tbl_yearly_four.user_id = tbl_users.user_id
                SET tbl_yearly_four.fullname = tbl_users.fullname";

                if ($conn->query($updateSql) === TRUE) {
                    echo "Your score is $score<br><br>";
                    echo "Thanks for answering.<br> We will update you soon";
                } else {
                    echo "Error updating Fullname: " . $updateSql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
    </div>
</div>
