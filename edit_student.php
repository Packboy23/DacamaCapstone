<?php
include 'subject1.php';
?>

<html>
<head>
<style>
.form-box {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    width: 385px;
    margin: auto;
    box-shadow: 0 0 1px rgba(0, 0, 0.1);
    
}
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}
</style>

<script>
    // JavaScript function to close the form
    function closeForm() {
        document.querySelector('.form-box').style.display = 'none';
    }
</script>

</head>

<body>
    <div class="form-box" style="margin-left: 300px; margin-top: -760px; position: fixed; background-color: #f6f6f6">
    <span class="close" onclick="closeForm()">&times;</span>

    <?php
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        $sqlEdit = "SELECT * FROM tbl_users WHERE user_id = $userId";
        $resultEdit = $conn->query($sqlEdit);

        if ($resultEdit->num_rows > 0) {
            $rowEdit = $resultEdit->fetch_assoc();
            // Create a form to edit the user's information
            echo "<form action='update_student.php' method='post'><img src='images/edit_blue.png' style='height:30px; width: 30px; position: absolute; margin-top: 5px'>
                <div style='margin-left: 60px; position: absolute; font-weight: bold'> Full Name: &nbsp<input type='text' name='fullname' value='" . $rowEdit['fullname'] . "'></div><br><br>

                <div style='margin-left: 60px; margin-top: 6px; font-weight: bold'>First Exam Score:&nbsp&nbsp <input type='text' style='width: 30px; position: absolute' name='exam_score' value='" . $rowEdit['exam_score'] . "'></div><br>

                <div style='margin-left: 60px; margin-top: 6px; font-weight: bold'>Second Exam Score:&nbsp&nbsp <input type='text' style='width: 30px; position: absolute' name='exam_score2' value='" . $rowEdit['exam_score2'] . "'></div><br>

                <input type='hidden' name='user_id' value='" . $rowEdit['user_id'] . "'><br>
                <div style='margin-top: -55px;'><input type='submit' value='Update' style='cursor: pointer; margin-left: 270px; height: 30px; margin-top: -5px; border-radius: 6px; border-width: 1px; width: 50px; font-weight: bold; color: blue; cursor: pointer'></div>
            </form>";
        } else {
            echo "User not found";
        }
    } else {
        echo "User ID not provided";
    }

    $conn->close();
    ?>
    </div>
</body>
</html>
