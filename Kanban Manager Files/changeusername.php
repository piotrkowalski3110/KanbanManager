<?php
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');
$id = explode(";",$_COOKIE["account"])[0];

if (isset($_POST['changeusernamebtn'])) {
    $username = mysqli_real_escape_string($db, $_POST['changeusername']);
    $change = "UPDATE `users` SET `name` = '$username' WHERE `users`.`id` = '$id'";
    mysqli_query($db, $change);
    setcookie("account", explode(";",$_COOKIE["account"])[0].";".$username.";".explode(";",$_COOKIE["account"])[2]);
    echo "<script>window.location.href='myaccount.php?standard_view';</script>";
    mysqli_close($db);
}
