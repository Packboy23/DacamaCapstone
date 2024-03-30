<?php
$zzz = true;
include 'scores_assestment.php';
?>

<html>
<body>

<div style="margin-top: 90px; margin-left: 120px">
    <div style="margin-left: 180px; "><h3>Year Filter </h3>

        <form method="post" action="" style="margin-top:10px; margin-left: -35px;">
            <select name="yearFilter" style="font-size: 16px; height: 30px; border-radius: 3px; padding: 5px">
                <option value="1" <?php if(isset($_POST['yearFilter']) && $_POST['yearFilter'] == '1') echo 'selected'; ?>>1</option>
                <option value="2" <?php if(isset($_POST['yearFilter']) && $_POST['yearFilter'] == '2') echo 'selected'; ?>>2</option>
                <option value="3" <?php if(isset($_POST['yearFilter']) && $_POST['yearFilter'] == '3') echo 'selected'; ?>>3</option>
                <option value="4" <?php if(isset($_POST['yearFilter']) && $_POST['yearFilter'] == '4') echo 'selected'; ?>>4</option>
                <!-- Add more options as needed -->
            </select>
            <input type="submit" value="Apply Filter" style="font-size: 16px; border-radius: 6px; padding: 5px; height: 30px; border-width: 1px; cursor: pointer; background-color: #f6f6f6; color: black; font-weight: bold; border-color: white; border-style: outset">
        </form></div>

<div style="margin-left: -90px">
    <?php
    include '_conn.php';

    // Check if the form is submitted and if the 'yearFilter' key is set in $_POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['yearFilter'])) {
        $selectedYear = intval($_POST['yearFilter']);

        // SQL query to select data from the user_scores table based on the selected year
        $sql = "SELECT * FROM user_score3 WHERE year = $selectedYear";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th style='height: 50px; background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspName&nbsp&nbsp&nbsp&nbsp</th>
                  <th style='background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspScore&nbsp&nbsp&nbsp&nbsp</th>
                  <th style='background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspOver&nbsp&nbsp&nbsp&nbsp</th>
                  <th style='background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspYear&nbsp&nbsp&nbsp&nbsp</th>
                  <th style='background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspDate/ Time&nbsp&nbsp&nbsp&nbsp</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td style='color: #34425A'>"
                    . $row["fullname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
                    . $row["scores"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
                    . $row["over_score"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
                    . $row["year"] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
                    . $row["timestamp"] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td></tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }
    }
    // Close connection
    $conn->close();
    ?>
</div>
</div><br>
</body>
</html>
