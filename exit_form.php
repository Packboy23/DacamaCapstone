<?php
include 'exit_survey_student.php'; 
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
</style>
</head>
<body>

<div class="page-content" style="background-color: #f9f9f9">

<form action="exit_student_data.php" method="post" >
  
    <div class="card" style="background-color: white; border-style: none; border-width: 10px; border-color: #1d7874; box-shadow: none;
    border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; height: 1100px">

    <h1 style="color: #74767d;">Subject-assessment</h1><br>
    <p style="color: #34425A"><b>Please fill in this form honestly <br>That we might know how to help you with your academic struggles. </b>
     <br></p>
    <br>
    <hr>

    <br>
    <br>

    <div style="display: flex; align-items: center">
    <label for="fullname" style="color: #74767d; width: 230px; margin-left: 100px;"><b>Fullname:</b></label>
    <input type="text" placeholder="" name="fullname" style="background-color: #gggggg; border-radius: 2px; border-color: white; border-width: 1px; border-style: solid; width: 400px; margin-left: -80px; margin-top: 23px; positon: relative" required>
    </div>

    <div style="display: flex; align-items: center">
    <label for="year" style="color: #74767d; width: 230px; margin-left: 100px"><b>Year:</b></label>
    <select name="year" id="year" style="background-color: #f9f9f9; width: 140px; margin-left: -80px; margin-top: 0px; position: relative" required>
        <option value="">&nbsp&nbsp&nbsp&nbspSelect Year</option>
        <option value="1st" name="year">1st Year</option>
        <option value="2nd" name="year">2nd Year</option>
        <option value="3rd" name="year">3rd Year</option>
        <option value="4th" name="year">4th Year</option>
        
        <!-- Add more years as needed -->
    </select>
</div>


    <div style="display: flex; align-items: center">
    <label for="course" style="color: #74767d; width: 230px; margin-top: 20px; margin-left: 100px"><b>Course:</b></label>
    <select name="course" id="course" style="background-color: #f9f9f9; width: 140px; margin-left: -80px; margin-top: 20px; position: relative" required>
      
        <option value="BSIT" name="course">BSIT</option>
        <!-- Add more years as needed -->
    </select>
    </div>


    <div style="display: flex; align-items: center">
    <label for="email" style="color: #74767d; width: 230px; margin-left: 100px"><b>Subject Name:</b></label>
    <input type="text" placeholder="" name="subject_name" style="background-color: #gggggg; width: 400px; margin-left: -80px; margin-top: 23px; positon: relative" required>
    </div>
  
    <div style="display: flex; align-items: center">
    <label for="subject_code" style="color: #74767d; width: 230px; margin-left: 100px"><b>Subject Code:</b></label>
    <input type="text" placeholder="" name="subject_code" style="background-color: ##gggggg; width: 400px; margin-left: -80px; margin-top: 23px; positon: relative" required>
    </div>
  

    <div style="display: flex; align-items: center">
    <label for="school_year" style="color: #74767d; width: 230px; margin-top: 20px; margin-left: 100px"><b>School Year:</b></label>
    <select name="school_year" id="school_year" style="background-color: #f9f9f9; width: 190px; margin-left: -80px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect School Year</option>
        <option value="2023-2024" name="school_year">2023-2024</option>
        <option value="2024-2025" name="school_year">2024-2025</option>
        <option value="2025-2026" name="school_year">2025-2026</option>
        <option value="2026-2027" name="school_year">2026-2027</option>
        <option value="2027-2028" name="school_year">2027-2028</option>
        
        <!-- Add more years as needed -->
    </select>
    </div>

    <div style="display: flex; align-items: center">
    <label for="semester" style="color: #74767d; width: 230px; margin-top: 20px; margin-left: 100px"><b>Semester:</b></label>
    <select name="semester" id="semester" style="background-color: #f9f9f9; width: 190px; margin-left: -80px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Semester</option>
        <option value="1st" name="semester">1st</option>
        <option value="2nd" name="semester">2nd</option>
      
        <!-- Add more years as needed -->
    </select>
    </div>

    <div style="display: flex; align-items: center">
    <label for="term" style="color: #74767d; width: 230px; margin-top: 20px; margin-left: 100px"><b>Term:</b></label>
    <select name="term" id="term" style="background-color: #f9f9f9; width: 190px; margin-left: -80px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Term</option>
        <option value="1st" name="tern">1st</option>
        <option value="2nd" name="term">2nd</option>
        
        <!-- Add more years as needed -->
    </select>
    </div>

    <div style="display: flex; align-items: center">
    <label for="class_schedule" style="color: #74767d; width: 230px; margin-top: 20px; margin-left: 100px"><b>Subject Schedule:</b></label>
    <select name="class_schedule" id="class_schedule" style="background-color: #f9f9f9; width: 190px; margin-left: -80px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Subject Schedule</option>
        <option value="6:00am" name="class_schedule">6:00am</option>
        <option value="7:00am" name="class_schedule">7:00am</option>
        <option value="8:00am" name="class_schedule">8:00am</option>
        <option value="9:00am" name="class_schedule">9:00am</option>
        <option value="10:00am" name="class_schedule">10:00am</option>
        <option value="11:00am" name="class_schedule">11:00am</option>
        <option value="12:00am" name="class_schedule">12:00am</option>
        <option value="1:00pm" name="class_schedule">1:00pm</option>
        <option value="2:00pm" name="class_schedule">2:00pm</option>
        <option value="3:00pm" name="class_schedule">3:00pm</option>
        <option value="4:00pm" name="class_schedule">4:00pm</option>
        <option value="5:00pm" name="class_schedule">5:00pm</option>
        <option value="6:00pm" name="class_schedule">6:00pm</option>
        <option value="7:00pm" name="class_schedule">7:00pm</option>
        <option value="8:00pm" name="class_schedule">8:00pm</option>
        <option value="9:00pm" name="class_schedule">9:00pm</option>
        <!-- Add more years as needed -->
    </select>
    </div>

    <div style="display: flex; align-items: center">
    <label for="email" style="color: #74767d; width: 230px; margin-left: 100px"><b>Room Number:</b></label>
    <input type="text" placeholder="" name="room" style="background-color: #gggggg; width: 400px; margin-left: -80px; margin-top: 23px; positon: relative" required>
    </div>

    <hr>

    <label for="good" style="color: #74767d; width: 230px; margin-left: 100px"><b>Subject Assessment</b></label>
    
    <hr style="margin-top: 20px">
    <div style="display: flex; align-items: center">
    <label for="good" style="color: #74767d; width: 470px; margin-left: 100px"><b>How good are you in this subject?</b></label>
    <select name="good" id="good" style="background-color: #f9f9f9; width: 130px; margin-left: -80px; margin-top: 0px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Answer</option>
        <option value="Very good." name="good">Very good.</option>
        <option value="A little bit good." name="good">A little bit good.</option>
        <option value="Not that good." name="good">Not that good.</option>
        <option value="Just average." name="good">Just average.</option>
        <option value="No, i'm struggling with this subject." name="good">No, i'm struggling with this subject.</option>
        
        <!-- Add more years as needed -->
    </select>
    </div>

    <div style="display: flex; align-items: center">
    <label for="layk" style="color: #74767d; width: 470px; margin-top: 20px; margin-left: 100px"><b>Do you like this subject?</b></label>
    <select name="layk" id="layk" style="background-color: #f9f9f9; width: 130px; margin-left: -80px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Answer</option>
        <option value="Yes, so much." name="layk">Yes, so much.</option>
        <option value="Yeah, its fine." name="layk">Yeah, it's fine.</option>
        <option value="No, not really." name="layk">No, not really.</option>
        <option value="No, he/she hate it." name="layk">No, i hate it.</option>
        
        
        <!-- Add more years as needed -->
    </select></div>


    <div style="display: flex; align-items: center">
    <label for="interv" style="color: #74767d; width: 470px; margin-top: 20px; margin-left: 100px"><b>Do you want to be assisted with this subject?</b></label>
    <select name="interv" id="interv" style="background-color: #f9f9f9; width: 130px; margin-left: -80px; margin-top: 20px; position: relative" required>
        <option value="">&nbsp&nbsp&nbspSelect Answer</option>
        <option value="Yes" name="interv">Yes, i really.</option>
        <option value="No" name="interv">No, i don't.</option>
        
        
        
        <!-- Add more years as needed -->
    </select></div>
    </div>

    <hr>
    
<br><br>
<div style="margin-top: -150px; margin-left: 260px">
    <input type="submit" value="submit" style="background-color: #22BAA0; width: 200px; border-radius: 10px; height: 50px; border-color: transparent; color: white; margin-bottom: 100px">
  </div>
</div>

</form>

</div>

</body>
</html>


<?php
include '_conn.php';
?>