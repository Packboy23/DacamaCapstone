<?php
session_start();
$x1 = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <script>
    var timer;
var minutes = 3600;
var isTabVisible = true;

document.addEventListener("visibilitychange", function () {
    isTabVisible = !document.hidden;

    if (!isTabVisible) {
        clearInterval(timer);
    } else {
        startTimer();
    }
});

function startTimer() {
    timer = setInterval(function () {
        minutes--;
        if (minutes < 0) {
            clearInterval(timer);
            document.getElementById('testForm').submit();
        } else {
            updateTimerDisplay();
        }
    }, 1000); // Use 1000 milliseconds for 1-second intervals
}

function updateTimerDisplay() {
    var displayMinutes = Math.floor(minutes / 60);
    var displaySeconds = minutes % 60;
    document.getElementById('timer').innerHTML = 'Time Remaining: ' + displayMinutes + 'm ' + displaySeconds + 's';
}

window.onload = function () {
    startTimer();
    updateTimerDisplay();
};
</script>
</head>

<style>
    .form-box {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        width: 600px;
        margin: 0 auto;
        margin-top: 50px;
    }
</style>

<body>

    <br><br>
    <div style="margin-left: 300px; position: absolute; margin-top: 48px"><h2>Programming Assessment Test</h2></div>
    <div class="form-box" style="margin-left: 250px; margin-top: 20px; width: 800px">
        <form id="testForm" action="calculate_score.php" method="post">
            <div id="timer" style="text-align: right; font-weight: bold;"></div>
            <ul>
                <?php
                $questionCounter = 1;
                ?>
                <?php
                include('crud_test.php');

                $tasks = getTasks();

                foreach ($tasks as $task) {
                    echo "<br><br><br><li><hr><br>
                            <strong>$questionCounter)&nbsp{$task['title']}</strong>
                            <p><br>&nbsp&nbsp&nbsp&nbsp<input type='radio' name='choice[{$task['id']}]' value='a' required>&nbspa) {$task['a']}</p>
                            <p>&nbsp&nbsp&nbsp&nbsp<input type='radio' name='choice[{$task['id']}]' value='b' required>&nbspb) {$task['b']}</p>
                            <p>&nbsp&nbsp&nbsp&nbsp<input type='radio' name='choice[{$task['id']}]' value='c' required>&nbspc) {$task['c']}</p>
                            <p>&nbsp&nbsp&nbsp&nbsp<input type='radio' name='choice[{$task['id']}]' value='d' required>&nbspd) {$task['d']}</p>
                            <br><hr>
                        </li>";
                    $questionCounter++;
                }

                ?>
            </ul>
            <br><br><br>
            <button type="submit" style="margin-left: 330px; border-style: outset; border-width: 1px;border-color: green; background-color: #34425A; border-radius: 6px; height: 40px; color: white">&nbsp&nbspSubmit Answers&nbsp&nbsp</button>
        </form>
        <br>
    </div>
    <br><br>
 
    
    <script>
    window.onload = function () {
        // Disable the back button
        if (window.history && window.history.pushState) {
            window.history.pushState('forward', null, './#');
            window.addEventListener('popstate', function () {
                window.history.pushState('forward', null, './#');
            });
        }

        // Start the timer and update the display
        startTimer();
        updateTimerDisplay();
    };

</div>


</body>
</html>
