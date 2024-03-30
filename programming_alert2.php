<?php 
$x2 = true;
include 'subject_test.php';
?>
<html>
<style>
     .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 460px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
            box-shadow: 0 0 0px rgba(0, 0, 0.1);
        }
</style>    
<body>

<div class="form-box" style="margin-left: 90px; margin-top: 20px; border-width: 1px; ">
<p style="margin-left: 20px">This test will take 1 hour and it can only be taken once. <br>
Once you've started you can't pause it. <br>
</p><br>
<form action="test_output2.php" method="post">
<button type="submit" style="margin-left: 200px; height: 30px; padding: 5px; border-radius: 6px; border-width: 1px"><b>Start</b></button> 
</form>


<!--<a href="subject_test.php"><button>no</button></back>-->
</div>
</body>
</html>