<?php
include 'class_record.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $cc102_1 = $_POST['cc102_1'];
    $cc102_2 = $_POST['cc102_2'];

    $sqlUpdate = "UPDATE tbl_users SET fullname='$fullname', cc102_1='$cc102_1', cc102_2='$cc102_2' WHERE user_id=$userId";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<script>
window.location.href = 'subject2.php';
</script>  