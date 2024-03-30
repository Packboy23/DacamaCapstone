<?php 
include 'yearly_result_analytics.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yearly Scores Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<br><br><br><br><br>
<h2 style="margin-top: -80px; margin-left: 440px;padding: 15px; height: 50px;  font-size: 18px; color: #34425A; border-radius: 2px; border-color: white; border-width: 1px;  position: absolute; background-color: #f6f6f6; border-style: outset">Third Year</h2>
<div style="width: 1000px; height: 500px"><canvas id="yearlyScoresChart" width="600" height="200"></canvas></div>

<script>
    <?php
    // Replace with your database connection details
  
   include '_conn.php';
    // Fetch data from the table, selecting the lowest score, highest score, and the number of attempts for each unique student
    $result = $conn->query("
        SELECT 
            fullname,
            MIN(score) as lowest_score,
            MAX(score) as highest_score,
            COUNT(*) as attempts
        FROM tbl_yearly_three
        GROUP BY fullname
    ");

    // Create a PHP array from the fetched data
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Close the database connection
    $conn->close();
    ?>

    // Convert PHP array to JavaScript array
    var data = <?php echo json_encode($data); ?>;

    // Extracting fullnames, lowest scores, highest scores, and attempts for the chart
    var fullnames = data.map(item => item.fullname);
    var lowestScores = data.map(item => item.lowest_score);
    var highestScores = data.map(item => item.highest_score);
    var attempts = data.map(item => item.attempts);

    // Creating a bar chart
    var ctx = document.getElementById('yearlyScoresChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: fullnames,
            datasets: [{
                label: 'Lowest Score out of 20',
                data: lowestScores,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }, {
                label: 'Highest Score out of 20',
                data: highestScores,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Number of Attempts',
                data: attempts,
                backgroundColor: 'rgba(255, 205, 86, 0.2)',
                borderColor: 'rgba(255, 205, 86, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 20 // Assuming the test is out of 20
                }
            }
        }
    });
</script>

</body>
</html>
