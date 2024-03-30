<?php 
include '_conn.php';
?>

<?php 
include '_profile.php';
?>

<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $userId = $_POST['user_id'];
    $new_birthday = $_POST['new_birthday'];
    
    // Update the user's name in the database
    $sql = "UPDATE tbl_users SET birthday='$new_birthday' WHERE user_id=$userId";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<script>
window.location.href = 'profile.php';
</script>  