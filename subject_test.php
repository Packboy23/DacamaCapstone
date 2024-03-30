<?php
$b1 = true;
include 'intervene.php';
?>

<html>
    <style>
   
            
       
           
           /* Adjust the width as needed */
            
            /* margin: 0 auto; Center the box */
             /* Adjust the top margin as needed */
        
        </style>
<body><br>
<div>    
        <br><div style="margin-top: 0px; margin-left: 30px">
        <div style="border: 1px solid #ccc ;padding: 20px;border-radius: 10px;width: 160px; ">
        <a href="programming_alert.php" <?php echo isset($x1) ? 'style="background-color: ;font-size: 17px;  color: green;font-weight: bold; ' : ''; ?>>
            <p style="font-weight: bold">Programming</p></a>
         </div><br><br><br><br>

         <div style="border: 1px solid #ccc;padding: 20px;border-radius: 10px;width: 110px; margin-left: 170px; margin-top: -133px">
         <a href="programming_alert2.php" <?php echo isset($x2) ? 'style="background-color: ;font-size: 17px; color: green;font-weight: bold;' : ''; ?>>
            <p style="font-weight: bold">Database</p></a>
          </div><br><br><br><br>

        <div style="border: 1px solid #ccc;padding: 20px;border-radius: 10px;width: 130px; margin-left: 290px; margin-top: -133px">
        <a href="programming_alert3.php" <?php echo isset($x3) ? 'style="background-color: ;font-size: 17px; color: green;font-weight: bold;' : ''; ?>>
            <p style="font-weight: bold">Networking</p></a>
        </div>
    </div>
</div>   

<br>

</body>
</html>