<?php
include('crud_test3.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $correct_answer = $_POST['correct_answer'];

    updateTask($id, $title, $a, $b, $c, $d, $correct_answer);

    header("Location: test_create3.php");
    exit();
}
?>
