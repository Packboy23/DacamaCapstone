<?php
include('crud_test.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    deleteTask($id);

    header("Location: test_create.php");
    exit();
}
?>
