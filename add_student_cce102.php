<?php 
include 'subject2.php';
?>

<html>
<style>
    .form-box {
            border: 1px solid ;
            padding: 20px;
            border-radius: 10px;
            width: 585px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
            height: 120px;
            box-shadow: 0 0 0px rgba(0,0,0.1);
               }
               </style>
<body>
    
    <div style="margin-left: 40px; margin-top: -20px;" class="form-box">
            <!-- Form to collect data -->
            <form action="add_cce102.php" method="post">
                <label for="fullname"><b>Name:</b></label>
                <input type="text" name="fullname" style="width: 200px" required>

                <div style="margin-top: 10px; margin-left: 0px"><label for="exam_score"><b>First Exam Score:</b></label>
                <input type="text" name="cc102_1" style="width: 80px" required></div>
                <div style="margin-top: 10px; margin-left: 0px"><label for="exam_score2"><b>Second Exam Score:</b></label>
                <input type="text" name="cc102_2" style="width: 80px" required></div>

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

    <!-- Additional form elements and submit button go here -->


 

                <div style="position:absolute; margin-top: 25px; margin-left: 300px; ">
                <input type="submit" style="height: 30px; width: 40px;  border-radius: 6px; border-width: 1px; color: blue; font-weight: bold; cursor: pointer" value="Add"></div>
                
            </form>

            <!-- Rest of your existing code to display user information -->
   
       
</body>

</html>

