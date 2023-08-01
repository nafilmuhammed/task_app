<?php
include('taskconnect.php');

$task1 = $_POST['task1'];
$task2 = $_POST['tas2'];
$task3 = $_POST['task3'];
$task4 = $_POST['task4'];

$sql = "INSERT INTO `user_id` (task1, task2, task3, task4) VALUES ('$task1', '$task2', '$tas3', '$task4')";
$result = mysqli_query($con, $sql);
    echo '<script>
    alert("task assigned successful");
    window.location="../sub/addminassigntask.php";
    </script>';
}