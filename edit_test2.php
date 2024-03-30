<?php
include 'intervene_teacher.php'
?>

<html>
    <style>
            .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 600px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
            height: 490px;
        }
        </style>
<div class="form-box" style="margin-left: 60px">

<br>

<h2 style="margin-left: 215px">Edit Question</h2><br><br>
<?php
include('crud_test2.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $task = $conn->query("SELECT * FROM task2 WHERE id=$id")->fetch_assoc();

    if ($task) {
        echo "<form action='update_test2.php?id=$id' method='post'>
                
                    <label for='title'>Edit Question:</label>
                    <input type='text' id='title' name='title' style='height: 30px;width: 400px'value='{$task['title']}' required>
                <div style='margin-left: 60px'> 
                    <br><br><br>
                    <label for='a'>Edit Choice a:</label>
                     <div style='margin-top:-20px;height:10px; margin-left: 110px;position: relative; '><textarea id='a' name='a' style='width: 300px'>{$task['a']}</textarea></div><br><div style='margin-top: -13px; margin-left: 420px;'><input type='radio' name='correct_answer' value='a' required></div>
                
                 
                     <br>
                    <label for='b'>Edit Choice b:</label>
                    <div style='margin-top:-20px;height:10px; margin-left: 110px;position: relative'><textarea id='b' name='b' style='width: 300px'>{$task['b']}</textarea></div><br><div style='margin-top: -13px; margin-left: 420px;'><input type='radio' name='correct_answer' value='b' required></div>
                
                 <br>
                    <label for='c'>Edit Choice c:</label>
                     <div style='margin-top:-20px;height:10px; margin-left: 110px;position: relative'><textarea id='c' name='c' style='width: 300px'>{$task['c']}</textarea></div><br><div style='margin-top: -13px; margin-left: 420px;'><input type='radio' name='correct_answer' value='c' required></div>
                     <br>
                     <label for='d'>Edit Choice d:</label>
                    <div style='margin-top:-20px;height:10px; margin-left: 110px;position: relative'><textarea id='d' name='d' style='width: 300px'>{$task['d']}</textarea></div><br><div style='margin-top: -13px; margin-left: 420px;'><input type='radio' name='correct_answer' value=d' required></div>
                    <br>
                </div><br>
                <button type='submit' style='margin-left: 190px; background-color: #22BAA0; width: 200px; border-radius: 10px; height: 50px; border-color: transparent; color: white; margin-bottom: 100px' >Update Question/Choices</button>
              
                </form>";
    } else {
        echo "Task not found.";
    }
}
?>
</div>
</body>
</html>
