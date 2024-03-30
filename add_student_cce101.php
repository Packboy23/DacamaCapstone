<?php 
include 'subject1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to an external stylesheet for better organization -->
    <!-- Add this in the <head> section of your HTML file if you haven't included Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iKu1r7B47Ahs9aT6SrWfQaJ9aKOtO1R8+7RHEjZ9Qb5UnB/KRvBDIUZa1" crossorigin="anonymous">
    <style>
        /* Add your modal styles here */
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
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
    <!-- Trigger button to open the modal -->
    <button onclick="openModal()">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <!-- Close button for the modal -->
            <span class="close" onclick="closeModal()">&times;</span>

            <!-- Form to collect data -->
            <form action="add_cce101.php" method="post">
                <label for="fullname"><b>Name:</b></label>
                <input type="text" name="fullname" style="width: 200px" required>

                <div style="margin-top: 10px; margin-left: 0px">
                    <label for="exam_score"><b>First Exam Score:</b></label>
                    <input type="text" name="exam_score" style="width: 80px" required>
                </div>

                <div style="margin-top: 10px; margin-left: 0px">
                    <label for="exam_score2"><b>Second Exam Score:</b></label>
                    <input type="text" name="exam_score2" style="width: 80px" required>
                </div>

                <div style="margin-top: -75px; margin-left: 290px">
                    <label for="year"><b>Select Year:</b></label>
                    <select id="year" name="year">
                        <option value="1" name="year">1st Year</option>
                        <option value="2" name="year">2nd Year </option>
                        <option value="3" name="year">3rd Year</option>
                        <option value="4" name="year">4th Year</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div style="position:absolute; margin-top: 25px; margin-left: 300px;">
                    <input type="submit" style="height: 30px; width: 40px;  border-radius: 6px; border-width: 1px; color: blue; font-weight: bold; cursor: pointer" value="Add">
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript to handle modal functionality -->
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
