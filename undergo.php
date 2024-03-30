<?php
$b3 = true;
include 'intervene.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 600px; /* Adjust the width as needed */

            margin: 0 auto; /* Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
        }
</style>
</head>
<body>

<div class="page-content" style="background-color: #f9f9f9; height: 900px">

<form action="undergo_data.php" method="post">
  
    <div class="card" style="background-color: white; border-style: none; border-width: 10px; border-color: #1d7874; box-shadow: none;
    border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; height: 800px ">

    <h1 style="color: #74767d;">Create your Schedule</h1><br>
    <!--<p style="color: #34425A">Please fill in this form if you've fail in the assessment test. 
     <br>For you to have an schedule on the intervention Program.</p>-->
    <br> 
    <hr>

    <br><br><br>

    <div style="display: flex">
    <label for="name" style="color: #74767d; width: 200px; margin-left: 100px"><b>Full name:</b></label>
    <input type="text" placeholder="" name="fullname" style="background-color: #gggggg; width: 300px; margin-top: -15px" required>
    </div>


    <div style="display: flex">
    <label for="stud_id" style="color: #74767d; width: 200px; margin-top: 20px; margin-left: 100px"><b>Student number:</b></label>
    <input type="text" placeholder="" name="stud_id" style="background-color: #ggggggg; width: 300px" required>
  </div>  
  
  <div style="display: flex">
    <label for="course" style="color: #74767d; margin-left: 100px"><b>Course:</b></label>
    <select name="course" id="course" style="background-color: #f9f9f9; width: 130px; margin-left: 180px; margin-top: 0px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Course</option>
        <option value="BSIT" name="course">BSIT</option>
        <option value="BSCE" name="course">BSCE</option>
        <option value="Automotive" name="course">Automotive</option>
    </select>    
  </div>
  <br><br>
  <div style="display: flex">
    <label for="year" style="color: #74767d; margin-left: 100px"><b>Year:</b></label>
    <select name="year" id="course" style="background-color: #f9f9f9; width: 130px; margin-left: 200px; margin-top: 0px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Year</option>
        <option value="1st Year" name="year">1st Year</option>
        <option value="2nd Year" name="year">2nd Year</option>
        <option value="3rd Year" name="year">3rd Year</option>
        <option value="4th Year" name="year">4th Year</option>
        <option value="5th Year" name="year">5th Year</option>
    </select>    
  </div>

  <br>
    <label for="day" style="color: #74767d; margin-left: 100px"><b>What day you want it to do? </b></label>
    <select name="day" id="day" style="background-color: #f9f9f9; width: 130px; margin-left: 22px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Day</option>
        <option value="Monday" name="day">Monday</option>
        <option value="Tuesday" name="day">Tuesday</option>
        <option value="Wednesday" name="day">Wednesday</option>
        <option value="Thursday" name="day">Thursday</option>
        <option value="Friday" name="day">Friday</option>
        <option value="Saturday" name="day">Saturday</option>
        
        
        <!-- Add more years as needed -->
    </select></div>


     <div style="display: flex">
    <label for="time" style="color: #74767d; margin-left: 120px; margin-top: -300px; width: 130px"><b>What time?</b></label>
    <select name="time" id="time" style="background-color: #f9f9f9; width: 130px; margin-left: 105px; margin-top: -300px; height: 20px; position: relative" required>
        <option value="" style="height: 20px; ">&nbsp&nbsp&nbspSelect Time</option>
        <option value="7:00am - 9:00am " name="time">7:00am - 9:00am </option>
        <option value="9:00am - 11:00am" name="time">9:00am - 11:00am</option>
        <option value="1:00pm - 3:00pm" name="time">1:00pm - 3:00pm</option>
        <option value="3:00pm -5:00pm" name="time">3:00pm -5:00pm</option>
        <option value="5:00pm - 7:00pm" name="time">5:00pm - 7:00pm</option>
     
        
        
        <!-- Add more years as needed -->
    </select></div>

    <div style="margin-top: -170px">
    <input type="submit" value="submit" style="background-color: #22BAA0; margin-top: -60px; margin-left: 320px; position: relative; width: 200px; height: 50px; border-color: transparent; border-radius: 6px; color: white;">
    </div>
</div>

</form>

</div>

</body>
</html>


<?php
include '_conn.php';
?>