<?php
include('C:\wamp64\www\php\mypro\actions\connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];


$sql = "SELECT * FROM user_id WHERE username='$username' AND mobile='$mobile' AND password='$password'";

$output=mysqli_query($con,$sql);
if(mysqli_num_rows($output) > 0) { echo '<script>
    alert("please wait!!! the page loading for you");
    window.location="../sub/tasks.php";
    </script>';
  
}

else{
        echo '<script>
        alert("Not a valid id");
         window.location="../partials/registeration.php";
            </script>';
    }
?>
