
<?php
require '_conn.php';
$loggedInUserId = $_SESSION['user_id'];
$_SESSION['user_id'] = $loggedInUserId;
$sessionID = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId"));
?>

<html>
<head>   
<style>
    .upload{
        width: 125px;
        position: relative;
        margin: auto;
    }

    .upload img{
        height: 60px;
        width: 60px;
        border-radius: 50%;
        border: 2px solid #DCDCDC;
        border-color: white;
    }

    .upload .round{
        
        position: absolute;
        background-image: url('profile_pictures/kamera.jpg');
        background-color: red;
        right: 0;
        width: 15px;
        height: 15px;
        line-height: 2px;
        text-align: center;
        border-radius: 50%;
        overflow: hidden;
        margin-top: -18px;
        margin-left: 0px;
        margin-right: 33px;
        border-color: black;
        border-width: 1px;
        
    }

    .upload .round input[type = "file"]{
        position: absolute;
        transform: scale(2);
        opacity: 0;
    }

    input[type=file]::-webkit-file-upload-button{
        cursor: pointer;
    }


</style>  
<body>
<form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
                                        <div class="upload">
                                            <?php
                                            $id = $user['user_id'];
                                            $name = $user['user_uname'];
                                            $image = $user['image'];
                                            ?>
                                        
                                    <img src="profile_pictures/<?php echo $image; ?>" width ="125" height="125" title="<?php echo $image; ?>">
                                      <div class="round">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                        <input type="file" name="image" id = "image" accept = ".jpg, .jpeg, .jfif, .png">
                                        <i class="fa-camera" style = "color: #fff"></i>
                                
                                        </div>
                                       </div>
                                    </form>
                                    <script type="text/javascript">
                                        document.getElementById("image").onchange = function(){
                                            document.getElementById('form').submit();
                                        }
                                    </script>
                                    <?php
                                    if(isset($_FILES["image"]["name"])){
                                        $id = $_POST["id"];
                                        $name = $_POST["name"];

                                        $imageName = $_FILES["image"]["name"];
                                        $imageSize = $_FILES["image"]["size"];
                                        $tmpName = $_FILES["image"]["tmp_name"];

                                        //image validation
                                        $validImageExtension = ['jpg', 'jpeg', 'jfif','png'];
                                        $imageExtension = explode('.', $imageName);
                                        $imageExtension = strtolower(end($imageExtension));
                                        if(!in_array($imageExtension, $validImageExtension)){
                                            echo
                                            "
                                            <script>
                                            alert('Invalid Image Extension');
                                            document.location = '../acama/dashboard_welc.php';
                                            </script>
                                            "
                                            ;
                                        }
                                        else if($imageSize > 1200000){
                                            echo              
                                            "
                                            <script>
                                            alert('Image Size Is Too Large');
                                            document.location = '../acama/dashboard_welc.php';
                                            </script>
                                            "
                                            ;
                                        }
                                        else{
                                        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa");
                                        $newImageName .= "." . $imageExtension;
                                        $query = "UPDATE tbl_users SET image = '$newImageName' WHERE user_id = $id";
                                        mysqli_query($conn, $query);
                                        move_uploaded_file($tmpName, 'profile_pictures/' . $newImageName);
                                        echo
                                        "
                                        <script>
                                            document.location.href = '../acama/dashboard_welc.php';
                                        </script>
                                        "
                                        ;
                                    }
                                }

                    
                                    ?>