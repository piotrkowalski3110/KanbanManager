<?php
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');

$kanban = explode(";",$_COOKIE["account"])[2];

if (isset($_POST['addtaskbtn'])) {
    $task_name = mysqli_real_escape_string($db, $_POST['task_name']);
    $task_description = mysqli_real_escape_string($db, $_POST['task_desc']);
    $task_add_date = date('Y-m-d');
    $task_end_date = mysqli_real_escape_string($db, $_POST['task_end_date']);
    $task_status = mysqli_real_escape_string($db, $_POST['task_status']);

    $change = "INSERT INTO `$kanban` (`id`, `task_name`, `task_desc`, `task_add_date`, `task_end_date`, `status`) VALUES (NULL, '$task_name', '$task_description', '$task_add_date', '$task_end_date', '$task_status')";
    mysqli_query($db, $change);
    mysqli_close($db);
    echo "<script>window.location.href='myaccount.php?standard_view';</script>";
}
?>