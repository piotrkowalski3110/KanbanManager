<?php
    $db = mysqli_connect('localhost', 'root', '', 'kanban_manager');
    $kanban = explode(";", $_COOKIE["account"])[2];

    $new_state = $_POST['dropHere'];
    $task_id = $_POST['dropMe'];

    $change = "UPDATE `$kanban` SET `status` = '$new_state' WHERE `$kanban`.`id` = '$task_id'";
    mysqli_query($db, $change);
    mysqli_close($db);
    header("Refresh:0");
?>