<?php
include '_conn.php';
?>

<?php
include 'teacher_profile.php';
?>


<div class="page-content" style="background-color: #f9f9f9; height: 0px">

<?php
// Check if the user ID is provided via GET request
if (isset($_GET['id'])) {
    $editUserId = $_GET['id'];
    
    // Fetch the user data based on the provided ID
    $sql = "SELECT * FROM tbl_users WHERE user_id = $editUserId";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="updatet.php" style="margin-top: -462px; margin-left: 540px; position: relative">
            <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
            <input type="text" name="new_name" value="">
           
            <input type="submit" value="Update"  onclick="updateProfile()">
           
        </form>
        <?php
    } else {
        echo "User not found";
    }
} else {
    echo "User ID not provided";
}
?>
</div>

