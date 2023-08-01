<?php

function sanitize_input($con, $data) {
    return mysqli_real_escape_string($con, $data);
}

$sql = "SELECT * FROM `user_id`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  
    $table_html = '<table>
                        <tr>
                            <th>Task 1</th>
                            <th>Task 2</th>
                            <th>Task 3</th>
                            <th>Task 4</th>
                        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $task1 = sanitize_input($con, $row['task1']);
        $task2 = sanitize_input($con, $row['task2']);
        $task3 = sanitize_input($con, $row['task3']);
        $task4 = sanitize_input($con, $row['task4']);

        $table_html .= '<tr>
                            <td>' . $task1 . '</td>
                            <td>' . $task2 . '</td>
                            <td>' . $task3 . '</td>
                            <td>' . $task4 . '</td>
                        </tr>';
    }

    // Close the table HTML
    $table_html .= '</table>';
} else {
    $table_html = '<p>No tasks found.</p>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>
    <?php echo $table_html; ?>
</body>
</html>
