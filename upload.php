
<?php
include 'intervene_teacher.php';
?>

<div class="page-content">
<div style="margin-left: 10px" class="card">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted with a file
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];

        // Check for errors during file upload
        if ($file["error"] > 0) {
            echo "No file is been uploaded " ;
        } else {
            // Specify the directory where you want to save the uploaded file
            $uploadDir = "uploads/";

            // Create the directory if it doesn't exist
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Move the uploaded file to the specified directory
            $uploadPath = $uploadDir . basename($file["name"]);

            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                echo "File uploaded successfully: " . basename($file["name"]);
            } else {
                echo "Error uploading file.";
            }
        }
    } else {
        echo "No file selected.";
    }
}

?>
</div>
</div>

<form action="upload_form.php">
<button type="submit" style="margin-left: 1130px; margin-top: -55px; position: fixed;">Back</button>
</form>
