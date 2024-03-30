<?php
$tulo = true;
include 'class_record.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel File</title>
</head>
<style>
     .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 600px; /* Adjust the width as needed */
            margin-left: 20px;
           /*  margin: 0 auto; Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
        }
        </style>
<body>
    <div class="form-box">
    <h2 style="color: blue">Upload Excel File</h2><br>
    <form action="excel_upload.php" method="post" enctype="multipart/form-data">
        <label for="excelFile">Choose Excel File:</label>
        <input type="file" name="excelFile" id="excelFile" accept=".xls, .xlsx" required>
        <br>
        <div style="margin-left: 390px; margin-top: -20px; "><input type="submit" name="submit" value="Upload"></div>
    </form>
    </div>
</body>
</html>

