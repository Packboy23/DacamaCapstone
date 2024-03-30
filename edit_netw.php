<?php
include 'subject_netw.php';
?>

<html>
<head>
<style>
.form-box {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    width: 385px;
    margin: 0 auto;
    margin-top: -100px;
    box-shadow: 0 0 1px rgba(0, 0, 0.1);
    position: fixed;
    background-color: #f6f6f6;
    margin-left: 460px;
    transform: translate(-50%, -50%);
}
.modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f6f6f6;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 8px 12px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
            height: 120px;
            margin-top: 20px;
            width: 400px;
            margin-left: 0px;
            
        }   

        .modal-content {
            text-align: center;
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
    <div class="form-box">
    <span class="close" onclick="closeForm()">&times;</span>

    <?php
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        $sqlEdit = "SELECT * FROM tbl_users WHERE user_id = $userId";
        $resultEdit = $conn->query($sqlEdit);

        if ($resultEdit->num_rows > 0) {
            $rowEdit = $resultEdit->fetch_assoc();
            // Create a form to edit the user's information
            echo "<form action='update_netw.php' method='post'><img src='images/edit_blue.png' style='height:30px; width: 30px; position: absolute; margin-top: 5px'>
                <div style='margin-left: 60px; position: absolute; font-weight: bold'> Full Name: &nbsp<input type='text' name='fullname' value='" . $rowEdit['fullname'] . "'></div><br><br>

                <div style='margin-left: 60px; margin-top: 6px; font-weight: bold'>First Exam Score:&nbsp&nbsp <input type='text' style='width: 30px; position: absolute' name='netw' value='" . $rowEdit['netw'] . "'></div><br>

                <div style='margin-left: 60px; margin-top: 6px; font-weight: bold'>Second Exam Score:&nbsp&nbsp <input type='text' style='width: 30px; position: absolute' name='netw2' value='" . $rowEdit['netw2'] . "'></div><br>

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
