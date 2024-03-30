<?php 
include '_conn.php';
?>

<?php 
include 'teacher_profile.php';
?>

<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $userId = $_POST['user_id'];
    $new_email = $_POST['new_email'];
    
    // Update the user's name in the database
    $sql = "UPDATE tbl_users SET email='$new_email' WHERE user_id=$userId";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<script>
window.location.href = 'teacher_profile.php';
</script>  