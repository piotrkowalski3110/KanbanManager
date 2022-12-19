<?php
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');
$kanban = explode(";",$_COOKIE["account"])[2];

if (isset($_POST['savechangesbtn'])) {
    $task_id_edit =  intval($_POST['savechangesbtn']);
    $new_name = $_POST['task_name_edit'];
    $new_desc = $_POST['task_desc_edit'];
    $new_end_date = $_POST['task_end_date_edit'];
    $new_status = $_POST['task_status_edit'];

    $change = "UPDATE `$kanban` SET `task_name` = '$new_name', `task_desc` = '$new_desc', `task_end_date` = '$new_end_date', `status` = '$new_status' WHERE `$kanban`.`id` = $task_id_edit";
    mysqli_query($db, $change);
    mysqli_close($db);
    echo "<script>window.location.href='myaccount.php?standard_view';</script>";
}
?>