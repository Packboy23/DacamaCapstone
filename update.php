<?php 
include '_conn.php';
?>

<?php 
include 'profile.php';
?>

<div>
<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $userId = $_POST['user_id'];
    $newName = $_POST['new_name'];
    
    // Update the user's name in the database
    $sql = "UPDATE tbl_users SET fullname='$newName' WHERE user_id=$userId";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>


</div>


<script>
window.location.href = 'profile.php';
</script>  
