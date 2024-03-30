<?php
$cc1 = true;
include 'class_second.php';
include '_conn.php';
?>

<html>
<head>
    <!-- Add this in the <head> section of your HTML file if you haven't included Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iKu1r7B47Ahs9aT6SrWfQaJ9aKOtO1R8+7RHEjZ9Qb5UnB/KRvBDIUZa1" crossorigin="anonymous">

<style>
     .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f6f6f6;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 8px 12px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
            height: 120px;
            margin-top: 20px;
            width: 400px;
            margin-left: 0px;
        }   

        .modal-content {
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
</style>

</head>
<body>
<br>
<h2 style="margin-top: -8px; margin-left: 110px;padding: 15px; height: 50px;  font-size: 18px; color: #34425A; border-radius: 2px; border-color: white; border-width: 1px;  position: absolute; background-color: #f6f6f6; border-style: outset">CCE 101</h2>
<button onclick="openModal()" style="padding: 15px; height: 50px; margin-left: 600px; font-size: 18px; color: blue; border-radius: 2px; border-color: white; border-width: 1px; margin-top: -10px; position: relative; cursor: pointer"><b>Add Student</b></button>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="margin-left: 30px; margin-top: 60px;">
        <div class="modal-content">
            <!-- Close button for the modal -->
            <span class="close" onclick="closeModal()">&times;</span>

            <!-- Form to collect data -->
            <form action="add_elec.php" method="post">
               <div style="margin-left: -100px"> <label for="fullname"><b>Name:</b></label>
                <input type="text" name="fullname" style="width: 200px" required></div>

                <div style="margin-top: 10px; margin-left: -132px">
                    <label for="elec"><b>First Exam Score:</b></label>
                    <input type="text" name="elec" style="width: 80px" required>
                </div>

                <div style="margin-top: 10px; margin-left: -112px">
                    <label for="elec2"><b>Second Exam Score:</b></label>
                    <input type="text" name="elec2" style="width: 80px" required>
                </div>

                <input type="hidden" value = "2" name = "year">

                <div style="position:absolute; margin-top: -28px; margin-left: 248px;">
                    <input type="submit" style="height: 30px; width: 40px;  border-radius: 6px; border-width: 1px; color: blue; font-weight: bold; cursor: pointer; margin-left: 60px; border-style: outset; border-color: white; " value="Add">
                </div>
            </form>
        </div>
    </div>


<div style="margin-top: -10px; margin-left: 40px; position: ">
            <?php
            // Check if the user is logged in
            if (isset($_SESSION['user_id'])) {
                $loggedInUserId = $_SESSION['user_id'];

                // SQL query to select data for the logged-in user
                $sql = "SELECT * FROM tbl_users WHERE elec and elec2 IS NOT NULL AND year IN (2)  ORDER BY fullname ASC";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data in a table
                    echo "<table border='1'>";
                    echo "<tr><th style='width: 300px; height: 50px; background-color: #34425A;color: white'>&nbsp&nbsp&nbsp&nbspName &nbsp&nbsp&nbsp&nbsp</th>
                        
                        <th style='background-color:  #34425A;color: white'> &nbsp&nbsp&nbsp First Exam Score&nbsp&nbsp&nbsp </th>
                        <th style='background-color:  #34425A;color: white'> &nbsp&nbsp&nbsp Second Exam Score&nbsp&nbsp&nbsp </th>
                        <th style='background-color:  #34425A;color: white; width: 30px'> &nbsp&nbsp&nbsp Edit &nbsp&nbsp&nbsp </th>
                        <th style='background-color:  #34425A;color: white'> &nbsp&nbsp&nbsp Delete&nbsp&nbsp&nbsp </th>
                        </tr>";

                    $fullnamesArray = [];

                    while ($row = $result->fetch_assoc()) {
                        // Output the table row as before
                        echo "<tr><td style='color: #34425A'>"
                            . $row["fullname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            &nbsp<td style='color: black'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"    
                            . $row["elec"] . "%&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            &nbsp<td style='color: black'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"    
                            . $row["elec2"] . "%&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            
                            
                            <td style='width: 70px'><a href='edit_elec.php?id=" . $row['user_id'] . "'><center><img src='images/edit_icon.PNG' style='height: 20px; width: 20px'></center></a></td>
                            <td style='width: 90px'><a href='delete_elec.php?id=" . $row['user_id'] . "'><center><img src='images/delete_icon.PNG' style='height: 20px; width: 20px'></center></a></td>
                        
                            </tr>&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp";

                        // Append the fullname to the array
                        $fullnamesArray[] = $row["fullname"];
                    }

                    // Check if 'names' and 'scores' keys are set in $_GET
                    if (isset($_GET['names']) && isset($_GET['scores'])) {
                        // Extract data from URL parameters
                        $namesFromExcel = json_decode(urldecode($_GET['names']), true);
                        $scoresFromExcel = json_decode(urldecode($_GET['scores']), true);

                        // Iterate over names array and check if the name exists in the database
                        foreach ($fullnamesArray as $fullname) {
                            // Check if the name exists in the Excel data
                            $index = array_search($fullname, $namesFromExcel);
                            if ($index !== false) {
                                // Display the percentage score for the matching name
                                $score = $scoresFromExcel[$index];
                                echo "Percentage score for $fullname: $score%<br>";
                            }
                        }
                    } else {
                        echo "";
                    }

                    echo "</table>";
                } else {
                    echo "No results for the logged-in user";
                }
            } else {
                echo "User not logged in";
            }

            // Close connection
           
            ?>

        </div>
        <br>
        
            <br><br>
            <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>

</html>
