<?php
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];

$sql = "INSERT INTO `user_id` (username, mobile, password, photo) VALUES ('$username', '$mobile', '$password', '$image')";
$result = mysqli_query($con, $sql);
if($result){
    move_uploaded_file($tmp_name, "../uploads/$image");
    echo '<script>
    alert("registration successful");
    window.location="../";
    </script>';
}