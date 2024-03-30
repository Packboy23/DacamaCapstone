<?php
$dos_3 = true;
include 'interv_candi3.php';
?>

<html>
<head>
    <style>
        .filter-form {
            margin-top: 20px;
            margin-left: 230px;
        }
    </style>
</head>
<body>

<div style="margin-top: 130px; margin-left: 210px"><br>
    <div style="margin-left: 185px"><h3>Exam Score Filter</h3>

    <form method="post" action="" style="margin-top:10px; margin-left: -45px;">
        <select name="scoreFilter" style="font-size: 16px; height: 30px; border-radius: 3px; padding: 5px">
            <option value="75" <?php if(isset($_POST['scoreFilter']) && $_POST['scoreFilter'] == '75') echo 'selected'; ?>>75 and below</option>
            <option value="80" <?php if(isset($_POST['scoreFilter']) && $_POST['scoreFilter'] == '80') echo 'selected'; ?>>80 and below</option>
            <option value="90" <?php if(isset($_POST['scoreFilter']) && $_POST['scoreFilter'] == '90') echo 'selected'; ?>>90 and below</option>
            <option value="100" <?php if(isset($_POST['scoreFilter']) && $_POST['scoreFilter'] == '100') echo 'selected'; ?>>100 and below</option>
            
            <!-- Add more options as needed -->
        </select>
        <input type="submit" value="Apply Filter" style="font-size: 16px; border-radius: 6px; padding: 5px; height: 30px; border-width: 1px; cursor: pointer; background-color: #f6f6f6; color: black; font-weight: bold; border-color: white; border-style: outset">
    </form></div><br>

    <?php
    // Assuming you have a database connection established

    // Your database connection code goes here

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedScore = intval($_POST['scoreFilter']);

        // Query to retrieve data based on the selected score
        $query = "SELECT fullname, year, assur, assur2 FROM tbl_users WHERE  (assur AND assur2 < $selectedScore) or (assur IS NOT NULL AND assur2 ) AND year = 3 and role_id = 2 ";


        $your_db_connection = mysqli_connect("localhost", "root", "", "acmed_db");

        $result = mysqli_query($your_db_connection, $query);

        // Check if the query was successful
        if ($result) {
            // Display the results
            echo "<h3> </h3><br>";
            echo "<table border='1'>
                    <tr>
                        <th style='width: 300px; height: 40px'>Name</th>
                        <th style='width: 120px'>First Exam Score</th>
                        <th style='width: 120px'>Second Exam Score</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['fullname']}</td>
                        <td style='width: 120px'><center>{$row['assur']}</center></td>
                        <td style='width: 120px'><center>{$row['assur2']}</center></td>
                      </tr>";
            }

            echo "</table>";
        } else {
            // Display an error message if the query fails
            echo "Error: " . mysqli_error($your_db_connection);
        }

        // Close the database connection
        mysqli_close($your_db_connection);
    }
    ?>
</div>

</body>
</html>
