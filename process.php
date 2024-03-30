<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $original_file_name = basename($_FILES["excelFile"]["name"]);
    $fileType = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));

    // Generate a unique name for the file
    $unique_filename = uniqid() . "_" . $original_file_name;
    $target_file = $target_dir . $unique_filename;

    $uploadOk = 1;

    // Check if file is a valid Excel file
    if ($fileType != "xls" && $fileType != "xlsx") {
        echo "Sorry, only Excel files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["excelFile"]["tmp_name"], $target_file)) {
            echo "The file " . $original_file_name . " has been uploaded.";

            try {
                // Process the uploaded file using PhpSpreadsheet
                $spreadsheet = IOFactory::load($target_file);
                $sheet = $spreadsheet->getActiveSheet();

                // Get the specified columns from the form submission
                $nameColumn = $_POST['nameColumn'];
                $scoreColumn = $_POST['scoreColumn'];

                // Get the values of the specified columns
                $nameData = $sheet->toArray(null, false, false, true)[$nameColumn];
                $scoreData = $sheet->toArray(null, false, false, true)[$scoreColumn];

                // Redirect to subject1.php with extracted data as parameters
                header("Location: subject1.php?names=" . urlencode(json_encode($nameData)) . "&scores=" . urlencode(json_encode($scoreData)));
                exit();
            } catch (Exception $e) {
                echo "Error processing the uploaded file: " . $e->getMessage();
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
