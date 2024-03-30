<?php
include 'class_second.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $elec = $_POST['elec'];
    $elec2 = $_POST['elec2'];


    $sqlUpdate = "UPDATE tbl_users SET fullname='$fullname', elec='$elec', elec2='$elec2' WHERE user_id=$userId";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<script>
window.location.href = 'subject_elec.php';
</script>