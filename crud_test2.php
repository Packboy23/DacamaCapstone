
<?php

include('_conn.php');

function createTask($title, $a, $b, $c, $d, $correct_answer) {
    global $conn;

    $sql = "INSERT INTO task2 (id, title, a, b, c, d, correct_answer) VALUES ('$id', '$title', '$a', '$b', '$c', '$d', '$correct_answer')";
    $result = $conn->query($sql);

    return $result;
}

function getTasks() {
    global $conn;

    $sql = "SELECT * FROM task2";
    $result = $conn->query($sql);

    return $result->fetch_all(MYSQLI_ASSOC);
}

function updateTask($id, $title, $a, $b, $c, $d, $correct_answer) {
    global $conn;

    $sql = "UPDATE task2 SET  title='$title', a='$a', b='$b', c='$c', d='$d', correct_answer='$correct_answer' WHERE id=$id";
    $result = $conn->query($sql);

    return $result;
}

function deleteTask($id) {
    global $conn;

    $sql = "DELETE FROM task2 WHERE id=$id";
    $result = $conn->query($sql);

    return $result;
}
?>