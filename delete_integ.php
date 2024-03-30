<?php
include 'class_third.php';

$userId = $_GET['id'];

$sqlDelete = "DELETE FROM tbl_users WHERE user_id = $userId";

if ($conn->query($sqlDelete) === TRUE) {
    echo "";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

<script>
window.location.href = 'subject_integ.php';
</script>  