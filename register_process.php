<div style="position: absolute; margin-left: 610px; margin-top: 45px; background-color: transparent; font-size: 13px; border-style: solid; border-width: 1px;  font-weight: bold; color: 066839; border-color: transparent; border-radius: 10px; font-family: Arial, Helvetica, sans-serif;"> 
<?php
            if (isset($_POST["submit"])) {
                $fullname = $_POST["fullname"];
                $year = $_POST["year"];
                $id_number = $_POST["id_number"];
            
                $user_uname = $_POST["user_uname"];
                $email = $_POST["email"];
                $user_pass = $_POST["user_pass"];
                $confirmpassword = $_POST["confirmpassword"];
               
                $role_id = $_POST["role_id"];
                $gender = $_POST["gender"];
                $course = $_POST["course"];
                $image = $_POST["image"];
              
                $errors = array();
                if (empty($fullname) OR empty($year) OR empty($id_number) OR empty($user_uname)  OR empty($email) OR empty($user_pass) OR empty($confirmpassword)  OR empty($role_id) OR empty($gender) OR empty($course) OR empty($image)   ) {
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
                   
                    $sql = "INSERT INTO tbl_users (fullname, year, id_number, user_uname, email, user_pass, role_id, gender, course, image ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"sissssssss",$fullname, $year, $id_number,  $user_uname, $email, $user_pass, $role_id, $gender, $course, $image);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success;color:white' >Registered successfully.</div>";  
                    }else{
                        die("Something went wrong");
                    }
                }
                
            }
           ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<style>
    body
	{
		background-image: url('');
		background-size: cover;
		opacity: 1;
		background-color: #f6f6f6;
		
	
	}
    .form-box {
        height: 458px;
    width: 358px; /* Adjust width as needed */
	max-width: 400px; 
    padding: 20px;
    border: 1px solid #ccc; /* Border properties */
    border-radius: 8px; /* Rounded corners */
    margin: 100px auto; /* Center the box on the page */
    background-color: #f6f6f6; /* Box background color */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow */
	margin-left: 469px;
	margin-top: 60px;
	opacity: 1;
    
}

input:active {
    border-color: blue;
    border-width: 1px;
}
        
 input[type="text"]::placeholder,
 input[type="email"]::placeholder,
 input[type="password"]::placeholder {
    color: #011f4b; /* Adjust the color as needed */
}
input[type="text"],
 input[type="email"],
 input[type="password"] {
    color: #011f4b; /* Adjust the color as needed */
}

 input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #011f4b; /* Change the border color as needed */
    /* You can also apply additional styles when the input is in focus */
}

</style>
<body>
<img src="images/academlogo.png" style="position: absolute; margin-left: 470px; margin-top: 30px; height: 100px; width: 160px; ">
<h2 class="title" style=" color: #011f4b; margin-top: 110px; margin-left: 577px; position: absolute; font-size: 33px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;
text-shadow: 1px 1px 1px #005b96; border-style: ; background-color: ; border-radius: 6px; border-color: white; height: 255px; width: 340px; padding: 10px">REGISTER</h2>
<div class="form-box">
<form action="" method="post" style="margin-top: 140px; margin-left: ">
<div class="form-group" style="margin-top: 30px; position: absolute; margin-left: 15px; ">
           <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" style="height: 40px; margin-left: 0px ; border-radius: 5px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px; width: 170px;font-weight: bold; background-color: #ECECEC ; " required>
      </div>
    

      <div style="margin-top: ">
       <div class="form-group" style="position: absolute; margin-left: 197px; margin-top: 30px ">
                <input type="text" class="form-control" id="id_number" name="id_number" placeholder="ID #" style="width: 144px; height: 40px; border-radius: 6px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px;font-weight: bold; background-color: #ECECEC" required>
        </div>
        
    </div>


       
   

       
   
       
    <div style="margin-top: 80px; margin-left: 15px; position: absolute ">
        <div class="form-group">
                <input type="text" class="form-control" id="user_uname" name="user_uname" placeholder="Username" style="width: 170px; border-radius: 6px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px; font-weight: bold; background-color: #ECECEC" required>
        </div>
   
        <div class="form-group" style="position: relative; margin-top: -39px; margin-left: 182px">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" style="border-radius: 6px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px; width: 144px; font-weight: bold; background-color: #ECECEC" required>
        </div>
    </div>

        <div class="form-group" style="position: absolute; margin-left: 15px; margin-top: 130px;  ">
        <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Password" style="border-radius: 6px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px; width: 170px; font-weight: bold; background-color: #ECECEC" required>
        </div>
            
        <div class="form-group" style="margin-top: 130px ; margin-left: 197px; position: absolute;">
        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" style="border-radius: 6px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px; width: 144px; font-weight: bold; background-color: #ECECEC" required>
        </div>
           
           
         <div class="form-group" style="margin-top: 220px; margin-left: 127px ; position: absolute; ">
         
         <div style="margin-top: 25px; margin-left: -10px;position: absolute">
       
    <div style="margin-top: -65px; position: absolute; margin-left: -72px">
       <select name="year" id="year" style="background-color: #f9f9f9; width: 160px; margin-left: -30px; margin-botton: 20px; position: absolute; width: 170px; height: 40px; border-radius: 6px; background-color: white; color: #011f4b; font-weight: bold; background-color: #ECECEC; font-size: 15px " required>
       <option value="" name="year" style="width: 100px;font-weight: bold;  ">&nbspYear </option>
        <option value="1" name="year" style="width: 40px; font-weight: bold">First </option>
        <option value="2" name="year" style="width: 40px; font-weight: bold">Second </option>
        <option value="3" name="year" style="width: 40px; font-weight: bold">Third </option>
        <option value="4" name="year" style="width: 40px; font-weight: bold">Fourth </option>
       
        <!-- Add more years as needed -->
    </select>
    </div>   
    </div>

         <div style="margin-top: -30px; position: absolute; margin-left: 0px"><select name="gender" id="gender" style="background-color: #f9f9f9; width: 140px; margin-left: 70px; margin-top: -10px; position: absolute; border-radius: 6px; border-style: solid; border-width: 1px; font-size: 15px; padding: 10px; width: 144px; ; background-color: #ECECEC; color: #011f4b ; font-weight: bold" required></div>
        <option value="" name="gender" style="font-weight: bold">Gender</option>
        <option value="male" name="gender" style="font-weight: bold">Male</option>
        <option value="female" name="gender" style="font-weight: bold">Female</option>
        <option value="lgbt" name="gender" style="font-weight: bold">Other</option>
        
       
        <!-- Add more years as needed -->
    </select>
         </div>
    </div>
         <div style="margin-top: ; margin-left: ;">
        <input type="hidden" name="course" value="BSIT">
        <input type="hidden" name="role_id" value="2">
        <input type="hidden" name="image" value="no_profile_pic.png">
         </div>
       
   
        
            <br>
        <div class="form-group" style="margin-left: 15px; margin-top: 80px; position: absolute">
         <div class="form-group" style="margin-left: ; margin-top: 160px; border-radius: 6px; position: absolute; border-style: none; border-width: 1px">
            <input id="registerbutton" type="submit" value="Sign-up" name="submit" class="btn btn-primary" style="background-color: #011f4b; color: white; font-weight: bold; border-radius: 6px; border-style: inset; border-width: 2px; border-color: #e7e7e7; font-size: 15px; padding: 10px;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); ">
         </div>
        </div>
    <a href="index.php" style="position: absolute; margin-top: 240px; margin-left: 280px; border-radius: 6px; border-style: inset; border-width: 2px; border-color: #e7e7e7;  font-size: 15px; padding: 10px; text-decoration: none; background-color: #011f4b; color: white; font-weight: bold; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Back</a>
    
    
</form>
    </div>
     
</body>
</html>
