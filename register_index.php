<?php 
include 'index.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
        }

        .container {
            max-width: 600px;
            width: 700px;
            height: 660px;
            padding: 20px;
            background-color:#fff;
            background-size: 100% 100%;
            opacity: 1;
            border-radius: 9px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%; 
            margin-left: 420px;
            justify-content: center;
            align-items: center;
            border-style: none;
            border-color: #fff;
        }

        h2 {
            text-align: center;
            color: black;
            top: 20px
        }

        .form-group {
            margin-bottom: 20px;
            width: 250px;
        }

        label {
            display: block;
            font-weight: bold;
            color: black;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            border-style: inset;
            border-color: #071e22;
        }

        input[type="submit"] {
            background-color: #1d7874;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            border-style: outset;
            border-color: #071e22;
        }

        input[type="submit"]:hover {
            background-color: #004242;
        }
        button {
            padding: 5px 10px;
            color: white;
            background-color: #1d7874;
            border: none;
            border-radius: 4px;
            text-size-adjust: 15;
            border-style: outset;
            border-color:#071e22;
        }
        button:hover {
            background-color: #004242;
        }
        a:link {
            color: white;
            background-color: transparent;
            text-decoration: none;
        }
     


    </style>
</head>
<body>

<div class="page-content">
    <div class="card">
<div style="margin-left: -200px">
    <div class="container">
    

      
            <br><h2>Student's<br>Account Creation</h2><br>
            <?php
            if (isset($_POST["submit"])) {
                $fullname = $_POST["fullname"];
                $year = $_POST["year"];
                $id_number = $_POST["id_number"];
                $role_id = $_POST["role_id"];
                $user_uname = $_POST["user_uname"];
                $email = $_POST["email"];
                $user_pass = $_POST["user_pass"];
                $confirmpassword = $_POST["confirmpassword"];
                $contact_number = $_POST["contact_number"];
                $address = $_POST["address"];
                $birthday = $_POST["birthday"];
                $gender = $_POST["gender"];
                $course = $_POST["course"];
                $image = $_POST["image"];
              
              
            
           
               
    
                $errors = array();
                if (empty($fullname) OR empty($year) OR empty($id_number) OR empty($role_id) OR empty($user_uname)  OR empty($email) OR empty($user_pass) OR empty($confirmpassword) OR empty($contact_number) OR empty($address) OR empty($birthday) OR empty($gender) OR empty($course) OR empty($image)   ) {
                    array_push($errors,"All fields are required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                }
                if (strlen($user_pass)<8) {
                    array_push($errors,"Password must be 8 characters long");
                }
                if ($user_pass!==$confirmpassword) {
                    array_push($errors, "Password does not match");
                }

                require_once "_conn.php";
                $sql = "SELECT * FROM tbl_users WHERE email = '$email' ";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                    array_push($errors, "Email already exists!");
                }

                if (count($errors)>0) {
                    foreach ($errors as $error)  {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }else{
                   
                    $sql = "INSERT INTO tbl_users (fullname, year, id_number, role_id, user_uname, email, user_pass, contact_number, address, birthday, gender, course, image ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"sssisssssssss",$fullname, $year, $id_number, $role_id, $user_uname, $email, $user_pass, $contact_number, $address, $birthday, $gender, $course, $image);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success;color:white' >Registered successfully.</div>";  
                    }else{
                        die("Something went wrong");
                    }
                }
                
            }
           ?>
         <br>
   
        <form action="register.php" method="post" style="margin-left: 30px">

        <div class="form-group">
           <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname">
      </div>
    
 
       <label for="year" style="color: gray; width: 230px; margin-left: 270px; margin-top: -60px; font-size: 15px"><b>Year:</b></label>
    <div style="margin-top: -17px">
       <select name="year" id="year" style="background-color: #f9f9f9; width: 140px; margin-left: 320px; margin-botton: 20px; position: relative; " required>
        <option value="">&nbsp&nbsp&nbsp&nbspselect year</option>
        <option value="1" name="year">1st Year</option>
        <option value="2" name="year">2nd Year</option>
        <option value="3" name="year">3rd Year</option>
        <option value="4" name="year">4th Year</option>
       
        <!-- Add more years as needed -->
    </select>
    </div>   
   

       
    <div style="margin-top: 40px">
       <div class="form-group">
                <input type="text" class="form-control" id="id_number" name="id_number" placeholder="ID #">
        </div>
        <input type="hidden" name="role_id" value="2">
    </div>
       
    <div style="margin-top: 20px">
        <div class="form-group">
                <input type="text" class="form-control" id="user_uname" name="user_uname" placeholder="Username">
        </div>
   
        <div class="form-group" style="position: relative; margin-top: -67px; margin-left: 270px">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
        </div>
    </div>

        <div class="form-group" style="position: relative ">
        <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Password">
        </div>
            
        <div class="form-group" style="margin-top: -67px; margin-left: 270px; position: relative;">
        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm password">
        </div>
           
       
   
        <div class="form-group">
         <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact number" >
        </div>
            
        <div class="form-group" style="margin-top: -67px; margin-left: 270px; position: relative;">
         <input type="text" class="form-control" id="address" name="address" placeholder="address" >
         </div>
         
         <div class="form-group" style="margin-top: -07px; margin-left: 0px; position: relative; ">
         <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birthdate" >
         </div>

           
         <div class="form-group" style="margin-top: -60px; margin-left: 270px; position: relative; ">
         <label for="role_id" style="color: gray; width: 230px; margin-left: 0px; margin-top: -60px;  font-size: 15px"><b>Gender:</b></label>
         <div style="margin-top: -20px"><select name="gender" id="gender" style="background-color: #f9f9f9; width: 140px; margin-left: 70px; margin-top: -10px; position: relative" required></div>
        <option value="">&nbsp&nbsp&nbsp&nbspselect gender</option>
        <option value="male" name="gender">male</option>
        <option value="female" name="gender">female</option>
        <option value="prefer not to say" name="gender">prefer not to say</option>
        
       
        <!-- Add more years as needed -->
    </select>
         </div>

         <div style="margin-top: 40px; margin-left: -270px;">
        <input type="hidden" name="course" value="BSIT">

        <input type="hidden" name="image" value="no_profile_pic.png">
         </div>
       

        
            <br>
        <div class="form-group" style="margin-left: -60px; margin-top: 0px; position: relative">
         <div class="form-group" style="margin-left: -210px; border-radius: 4px; position: relative; border-style: none; border-width: 1px">
            <input id="registerbutton" type="submit" value="Create" name="submit" class="btn btn-primary">
         </div>
        </div>
            
        </form>
    </div>
        </div>
    </div>
        </div>
</body>
</html>
