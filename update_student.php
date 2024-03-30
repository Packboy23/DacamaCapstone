<?php
include 'class_record.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $examScore = $_POST['exam_score'];
    $examScore2 = $_POST['exam_score2'];


    $sqlUpdate = "UPDATE tbl_users SET fullname='$fullname', exam_score='$examScore', exam_score2='$examScore2' WHERE user_id=$userId";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<script>
window.location.href = 'subject1.php';
</script>