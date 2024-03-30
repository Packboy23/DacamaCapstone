

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack(),0");
    window.onunload=function(){null;}
</script>
	<title>Welcome </title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script>
        function showAlert() {
            alert('Proceed to Windows 8 \nask there for a new password!');
        }
    </script>
</head>
<style>
	body
	{
		background-image: url('');
		background-size: cover;
		opacity: 1;
		background-color: #f6f6f6;
		
	
	}
	.login-box {
	height: 500px;
    width: 80%; /* Adjust width as needed */
	max-width: 400px; 
    padding: 20px;
    border: 1px solid #ccc; /* Border properties */
    border-radius: 8px; /* Rounded corners */
    margin: 60px auto 0/* Center the box on the page */
    background-color: #f9f9f9; /* Box background color */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow */
	margin-left: -20px;
	margin-top: 60px;
	opacity: 1;
}

.btne {
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px  ;
	outline: none;
	border-style: solid;
	background-color:#8f1e29 ;
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
	border-color: #e7e7e7;
	border-width: 5px;
}

.alert {
  background: #f9f9f9;
  padding: 5px;
  margin-top: -20px;
  margin-bottom: 10px;
  text-align: center;
  margin-left: 25px;
  
}

.form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 300px; /* Adjust the width as needed */
            /*margin: 0 auto; /* Center the box */
            /*margin-top: 50px; /* Adjust the top margin as needed */
        }

   .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
        }
        input[type="text"]::placeholder,
 input[type="email"]::placeholder,
 input[type="password"]::placeholder {
    color: #011f4b; /* Adjust the color as needed */
}

.login-box input[type="text"],
.login-box input[type="password"] {
    color: #011f4b; /* Change the font color as needed */
}

    </style>



</style>
<body>



	<div class="container" style="margin-left: -355px; margin-top: -40px; " >
	
	

	
	
<center>
		<div class="login-box" style="margin-left: 800px; margin-top: 100px">
		
		<div>
	
		<img src="images/academlogo.png" style="position: fixed; margin-left: -182px; margin-top: 05px; height: 250px; width: 370px; ">
	
	</div>	

		<div class="login-content" style="margin-top: 240px; margin-left: -15px; ">
			<form id="loginForm" action="_loginvalidation.php" method="POST" autocomplete="off" >
				
				<h2 class="title" style="text-shadow: 1px 1px 1px #8f1e29; color: #005EBA; margin-top: -60px; margin-left: 120px; position: absolute; font-size: 30px"><!--<marquee scrollamount="13" style="width: 300px; margin-left: -70px">--> Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div" style="border-style: solid; border-width: 1px; border-radius: 4px; border-color: #005b96; margin-top: -50px; margin-left: 25px;" oninput="this.style.borderColor='#005b96'"  >
						<input style="margin-left: 105px; " type="text" name="username" class="input" placeholder="Username" required  >
           		   </div>

           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div" style="border-style: solid; border-width: 1px; border-radius: 4px; border-color: #005b96; margin-top: -20px;  margin-left: 25px;" oninput="this.style.borderColor='005b96'"  >
           		   	<input type="password" name="password" id="password" class="input" placeholder="Password" style="margin-left: 105px; "   required >
					

            	   </div>
            	</div>
           
				<button type="submit" id="loginBtn" class="btne" style="cursor: pointer; border-radius: 50px; margin-left: 15px; font-size: 15px; background-color: #011f4b  " >Login</button>
				<a href="#" onclick="showAlert();" style="font-size: 13px; margin-top: 15px; margin-left: 230px; position: absolute; color: #011f4b">FORGOT PASSWORD?</a>
				
				<a href="register_process.php" style="position: absolute; margin-top: 15px; color: #011f4b; margin-left: 30px">CREATE ACCOUNT</a>

				
				<img src="images/username_icon.png" style="position: absolute; height: 30px; width: 30px; margin-top: -190px; margin-left: -130px; opacity: 0.9">
				<img src="images/password_icon.png" style="position: absolute; height: 30px; width: 30px; margin-top: -120px; margin-left: -130px; opacity: 0.9">
				
				<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform authentication logic (check username and password against database)
    // For simplicity, using hardcoded values. Replace with actual database logic.
    $user_uname = "user_uname";
    $user_pass = "user_password";

    if ($username == $correctUsername && $password == $correctPassword) {
        // Successful login
        echo "Login successful";
    } else {
        // Incorrect username or password
        echo "Incorrect username or password";
    }


$conn->close();

}

?> <div style="margin-top: 6px; position: absolute; background-color: none; font-size: 14px; margin-left: -15px; color: red">
			<?php if (isset($_GET['error'])) { ?>
            <div class="alert">
                Incorrect username or password. Please try again.
            </div>
            <?php }; ?> </div>

			</form>
        </div>
    </div>
</div>

</center>

   <?php
  include "_script.php";
  ?>

</body>


</html>

