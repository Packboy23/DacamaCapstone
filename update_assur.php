<?php
include 'class_third.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $assur = $_POST['assur'];
    $assur2 = $_POST['assur2'];


    $sqlUpdate = "UPDATE tbl_users SET fullname='$fullname', assur='$assur', assur2='$assur2' WHERE user_id=$userId";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<script>
window.location.href = 'subject_assur.php';
</script>