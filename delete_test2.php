<?php
include('crud_test2.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    deleteTask($id);

    header("Location: test_create2.php");
    exit();
}
?>
