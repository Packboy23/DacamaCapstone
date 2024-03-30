<?php
include 'class_second.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $netw = $_POST['netw'];
    $netw2 = $_POST['netw2'];


    $sqlUpdate = "UPDATE tbl_users SET fullname='$fullname', netw='$netw', netw2='$netw2' WHERE user_id=$userId";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<script>
window.location.href = 'subject_netw.php';
</script>