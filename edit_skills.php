<?php
include '_conn.php';
?>

<?php
include 'profile.php';
?>

<div class="page-content">
<div class="card">
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
        <form method="post" action="update_skills.php" style="margin-top: -113px; margin-left: 530px; position: relative">
            <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
            <input type="text" name="new_skills" value="">
            <input type="submit" value="Update">
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
</div>