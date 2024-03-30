<?php
// Include the database connection script
include "_conn.php";

// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch the user's password from the database based on the provided username
        $stmt = $conn->prepare("SELECT user_id, user_uname, user_pass, role_id FROM tbl_users WHERE user_uname = ? and user_pass = ? ");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($user_id, $user_uname, $user_pass, $user_role_id);
        $stmt->fetch();
         
        if ( $username == $user_uname && $password == $user_pass) {
            // Password is correct; set session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_uname'] = $user_uname;
            $_SESSION['role_id'] = $user_role_id;

            // Determine where to redirect based on the user's role
            switch ($user_role_id) {
                case 1: // Teacher
                    header("Location: dashboard_teacher_welc.php");
                    echo "dashboard_teacher";
                    break;
                case 2: // Student
                    header("Location: dashboard_welc.php");
                    echo "dashboard";
                    break;
                case 3: // Admin
                    header("Location: dashboard_super_welc.php");
                    echo "dashboard_super";
                    break;
             
            }
            exit();
            
        } else {
            $error = "Invalid";
            header("Location: index.php?error=$error");
        }

        $conn->close();
    }

 else {
    // Handle case where username or password is empty
    $error = "Empty fields";
    header("Location: index.php?error=$error");
    exit();
}

}
?>