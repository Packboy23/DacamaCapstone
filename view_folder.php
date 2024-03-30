<?php
$ccc = true;
include 'intervene_teacher.php';
?>

<html> 
<body>       
  
<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">

  
<!--<center><h1 style="background-color: #22BAA0;">Click to view</h1></center> -->

<?php
$uploadDirectory = 'uploads/';

$files = scandir($uploadDirectory);
$files = array_diff($files, array('.', '..'));

echo "";
echo "<ul >";
foreach ($files as $file) {
    echo "<li><a href='$uploadDirectory$file'  target='_blank'>$file</a></li>";
}
echo "</ul>";
?>


</div>
</div>

</body>
</html>