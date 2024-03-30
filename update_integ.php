<?php
include 'class_third.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $integ = $_POST['integ'];
    $integ2 = $_POST['integ2'];


    $sqlUpdate = "UPDATE tbl_users SET fullname='$fullname', integ='$integ', integ2='$integ2' WHERE user_id=$userId";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<script>
window.location.href = 'subject_integ.php';
</script>