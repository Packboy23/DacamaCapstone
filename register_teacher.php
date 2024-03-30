
<?php 
$d2 = true;
include 'register_admin.php';
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
            height: 700px;
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
    

      
            <br><h2>Teacher's<br>Account Creation</h2><br>
            <?php
            if (isset($_POST["submit"])) {
                $fullname = $_POST["fullname"];
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
                if (empty($fullname) OR empty($id_number) OR empty($role_id) OR empty($user_uname)  OR empty($email) OR empty($user_pass) OR empty($confirmpassword) OR empty($contact_number) OR empty($address) OR empty($birthday) OR empty($gender) OR empty($course) OR empty($image)   ) {
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
                   
                    $sql = "INSERT INTO tbl_users (fullname, id_number, role_id, user_uname, email, user_pass, contact_number, address, birthday, gender, course, image ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"ssisssssssss",$fullname, $id_number, $role_id, $user_uname, $email, $user_pass, $contact_number, $address, $birthday, $gender, $course, $image);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success;color:white' >You are registered successfully.</div>";  
                    }else{
                        die("Something went wrong");
                    }
                }
                
            }
           ?>
         <br>
   
        <form action="register_teacher.php" method="post" style="margin-left: 30px">

        <div class="form-group" style="width: 500px">
           <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname">
      </div>
    
 
      

       
    <div style="margin-top: 25px">
       <div class="form-group">
                <input type="text" class="form-control" id="id_number" name="id_number" placeholder="ID #">
        </div><div>
        <input type="hidden" name="role_id" value="1">
        </div>
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

        <div class="form-group" style=" position: relative;">
         <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth (mm/dd/yyyy)" >
         </div>
           
         <div class="form-group" style="margin-top: -67px; margin-left: 270px; position: relative; ">
         <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" >
         </div>

          <div style="margin-top: -17px">
        <input type="hidden" name="course" value="teacher"><div>

        <input type="hidden" name="image" value="no_profile_pic.png"><div>

       

        
            <br>
        <div class="form-group" style="margin-left: 7px; margin-top: 0px; position: relative">
         <div class="form-group" style="margin-left: 435px; border-radius: 4px; position: relative; border-style: none; border-width: 1px">
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
