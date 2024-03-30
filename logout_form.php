<?php
include 'dashboard_teacher.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Confirmation</title>
    <!-- Add your other head elements here -->
</head>
<body>

<!-- Your HTML content -->

<?php
// Your PHP code here, e.g., checking user authentication and session handling
?>

<!-- Logout button with confirmation -->
<a href="logout.php" onclick="confirmLogout()">Logout</a>

<!-- Your other HTML content -->

<script>
    function confirmLogout() {
        // Display a confirmation dialog
        var confirmLogout = confirm("Are you sure you want to log out?");
        
        // If the user clicks "OK," redirect to the logout script/page
        if (confirmLogout) {
            window.location.href = 'logout.php'; // Replace 'logout.php' with your actual logout script/page
        }
    }
</script>

</body>
</html>
