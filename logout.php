<?php
// logout.php

// Your logout logic, e.g., session destruction
session_start();
session_destroy();

// Redirect to a login page or wherever appropriate
header('Location: index.php'); // Replace 'login.php' with your actual login page
exit();
?>
