<?php
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');
$id = explode(";",$_COOKIE["account"])[0];

if (isset($_POST['changepasswordbtn'])) {
    $passwd = mysqli_real_escape_string($db, $_POST['confirm_password']);
    $password = md5($passwd);

    $change = "UPDATE `users` SET `password` = '$password' WHERE `users`.`id` = '$id'";
    mysqli_query($db, $change);
    echo "<script>window.location.href='myaccount.php?standard_view';</script>";
    mysqli_close($db);
}
