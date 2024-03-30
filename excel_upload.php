<?php 
include 'class_record.php';
?>

<html>
    <style>
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 300px; /* Adjust the width as needed */
            margin-left: 20px;
           /*  margin: 0 auto; Center the box */
            margin-top: 50px; /* Adjust the top margin as needed */
            font-weight: bold;
            color: blue;
        }
        </style>
        <body>
        <div class="form-box">
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["excelFile"]) && $_FILES["excelFile"]["error"] == 0) {
        $targetDir = "uploads/";  // Specify the directory where you want to store uploaded files
        $targetFile = $targetDir . basename($_FILES["excelFile"]["name"]);
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

        // Check if the file is a valid Excel file
        $allowedExtensions = array("xls", "xlsx");
        if (in_array($fileType, $allowedExtensions)) {
            // Move the uploaded file to the specified directory
            move_uploaded_file($_FILES["excelFile"]["tmp_name"], $targetFile);

            // Process the uploaded Excel file as needed
            // (You can use a library like PhpSpreadsheet here)

            echo "File uploaded successfully.";
        } else {
            echo "Invalid file format. Please upload a valid Excel file.";
        }
    } else {
        echo "Error uploading file. Please try again.";
    }
}
?>
</div>
</body>
</html>
