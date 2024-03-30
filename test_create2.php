

<?php 
$y2 = true;
include 'subject_test_creator.php';
?>


<!-- test_create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test create 2</title>
</head>
<style>
     .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 600px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
        }
        </style>
<body>
<br><br>
<h2 style="margin-left: 270px; ">Test Creator: Database</h2>




<div class="form-box" style="margin-left: 100px; height: 360px; margin-top: 20px">
<!-- Form for creating tasks -->

<?php
    $questionCounter = 1; // Initialize the question counter
    ?>
<form action="create_test2.php" method="post">
<br>
<label for="title">Type Question:</label>
    <input type="text" id="title" name="title" style="width: 400px; height: 40px" required>
    <br><br><br>
    
    <label for="a">Enter choice a:</label>
    <textarea id="a" name="a"></textarea>
    <input type="radio" name="correct_answer" value="a" required>
    <br>
    <label for="b">Enter choice b:</label>
    <textarea id="b" name="b"></textarea>
    <input type="radio" name="correct_answer" value="b" required>
    <br>
    <label for="c">Enter choice c:</label>
    <textarea id="c" name="c"></textarea>
    <input type="radio" name="correct_answer" value="c" required>
    <br>
    <label for="d">Enter choice d:</label>
    <textarea id="d" name="d"></textarea>
    <input type="radio" name="correct_answer" value="d" required>
    <br><br>
    <button type="submit" style="margin-left: 120px; background-color: #22BAA0; width: 200px; border-radius: 10px; height: 50px; border-color: transparent; color: white; margin-bottom: 100px" >Add Question</button>
</form>
    </div>

    <div style="position: absolute; margin-left: 460px; margin-top: -200px; color: blue"><p>(Select the circle <br> for the right answer)</p></div>
    <div style="position: absolute; margin-left: 360px; margin-top: 80px"><h2>Questions Formulated:</h2></p></div>

    <!-- Display tasks -->

<ul>
    <div class="form-box" style="margin-left: 100px;  margin-top: 20px; width: 800px">
    <?php
    include('crud_test2.php');

    $tasks = getTasks();

    foreach ($tasks as $task) {
        echo "<br><br><br><br><br><br><li><hr><br>
            <strong>$questionCounter)&nbsp {$task['title']}</strong>
            
            <p><br>a) {$task['a']} " . ($task['correct_answer'] === 'a' ? '(Correct)' : '') . "</p>
            <p>b) {$task['b']} " . ($task['correct_answer'] === 'b' ? '(Correct)' : '') . "</p>
            <p>c) {$task['c']} " . ($task['correct_answer'] === 'c' ? '(Correct)' : '') . "</p>
            <p>d) {$task['d']} " . ($task['correct_answer'] === 'd' ? '(Correct)' : '') . "</p><br> <hr>
            <a href='edit_test2.php?id={$task['id']}' style='width: 100px;  margin-top: -45px; margin-left: 660px; position: relative; border-style: solid; border-width:1px; border-radius: 6px; padding: 5px; width: 50px '><img src='images/edit_icon.PNG' style='height: 20px; width: 20px'></a>
           
            <a href='delete_test2.php?id={$task['id']}' style='width: 100px; margin-top: -37px; margin-left: 720px; position: relative; border-style: solid; border-width:1px; border-radius: 6px; padding: 5px; width: 50px'><img src='images/delete_icon.PNG' style='height: 20px; width: 20px'></a>
       </li>";
          $questionCounter++; 
        }
    
    ?>

</div>
</ul>






</body>
</html>
