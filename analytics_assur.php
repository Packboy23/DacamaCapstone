<?php 
include 'analytics.php';
?>

<?php
// Assuming you have a database connection established
include '_conn.php';

$query = "SELECT * FROM tbl_users WHERE assur and assur2 IS NOT NULL AND year IN (3) ";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$below75Score = array_filter($data, function ($row) {
    return $row['assur'] < 75;
});

$below75Score2 = array_filter($data, function ($row) {
    return $row['assur2'] < 75;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Scores Analysis</title>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <h2 style="margin-top: 30px; margin-left: 135px;padding: 15px; height: 50px;  font-size: 18px; color: #34425A; border-radius: 2px; border-color: white; border-width: 1px;  position: absolute; background-color: #f6f6f6; border-style: outset">INFORMATION ASSURANCE 1</h2>
    <!-- Bar Graph --><br><br><br><br><br><br>
    <h3 style="margin-left: 240px; color: darkgray">Student's Scoring below 75 in either First exam or Second Exam</h2>
    <div style="height:400px; width: 1600px"><canvas id="barChart" width="530" height="200"></canvas></div>

    <!-- Pie Chart -->
    <div id="pieChart" style="width: 700px; height: 350px; margin-left: 200px"></div>

    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($below75Score, 'fullname')); ?>,
                datasets: [{
                    label: 'First Exam Score',
                    data: <?php echo json_encode(array_column($below75Score, 'assur')); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }, {
                    label: 'Second Exam Score ',
                    data: <?php echo json_encode(array_column($below75Score, 'assur2')); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawPieChart);

        function drawPieChart() {
            var data = google.visualization.arrayToDataTable([
                ['Exam Type', 'Number of Students'],
                ['Below 75 in First Exam', <?php echo count($below75Score); ?>],
                ['Below 75 in Second Exam', <?php echo count($below75Score2); ?>],
            ]);

            var options = {
                title: 'Number of Students Scoring Below 75',
            };

            var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
