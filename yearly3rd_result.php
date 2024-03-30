<?php

$tres = true;
include 'yearly_result.php';

?>

<?php
include '_conn.php';
?>

<div class="page-content" style="background-color: #f9f9f9">
    <div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">
        <div style="margin-left: 30px">
            <?php
            // SQL query to select data from a table
            $sql = "SELECT fullname, score, timestamp
                    FROM tbl_yearly_three
                    ORDER BY fullname, timestamp ASC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                echo "<table border='1'>";
                echo "<tr><th style='height: 50px; background-color: black;color: white'>&nbsp&nbsp&nbsp&nbspName &nbsp&nbsp&nbsp&nbsp</th>
                        <th style='background-color: black;color: white'>&nbsp &nbsp&nbsp&nbspScore&nbsp&nbsp&nbsp&nbsp</th>
                        <th style='background-color: black;color: white'>&nbsp &nbsp&nbsp&nbspOver&nbsp&nbsp&nbsp&nbsp</th>
                        <th style='background-color: black;color: white'>&nbsp &nbsp&nbsp&nbspAttempt&nbsp&nbsp&nbsp&nbsp</th>
                        <th style='background-color: black;color: white'>&nbsp &nbsp&nbsp&nbspDate and Time&nbsp&nbsp&nbsp&nbsp</th></tr>";

                $previousFullName = null;
                $attemptCount = 1;

                while ($row = $result->fetch_assoc()) {
                    $currentFullName = $row["fullname"];

                    // Display a new row for each student
                    if ($currentFullName != $previousFullName) {
                        $attemptCount = 1;
                    } else {
                        $attemptCount++;
                    }

                    // Display the rest of the data for each attempt
                    echo "<td style='color: black'>". $row["fullname"] ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["score"] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
                            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp20&nbsp&nbsp</td>
                            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $attemptCount . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
                            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["timestamp"] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td></tr>";

                    $previousFullName = $currentFullName;
                }

                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?><br>
        </div>
    </div>
</div>
