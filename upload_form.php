
<?php
$bbb = true;
 include 'intervene_teacher.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>  
       <style>
        .plato {
            background-color: #f9f9f9;
            
        }
        .kutsara {
            background-color: ;
        }

        .baso {
            background-color: ;
        }
        </style>
<body>

<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">
    
    <form action="upload.php" method="post" enctype="multipart/form-data" class="kutsara">
  
        <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png" class="plato">
        
        
        <input type="submit" name="submit" value="Upload" class="baso">
    </div>
    </div>


        
    </form>
    <script>
        // Update the label text when a file is selected
        document.getElementById('file').addEventListener('change', function() {
            var fileName = this.value.split('\\').pop();
            var label = document.querySelector('.file-input-label');
            label.textContent = fileName || 'No file chosen';
        });
    </script>

</body>
</html>
