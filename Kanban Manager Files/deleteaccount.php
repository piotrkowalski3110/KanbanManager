<?php
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');

$id = explode(";",$_COOKIE["account"])[0];
$table = explode(";",$_COOKIE["account"])[2];
$acctodel = explode(";",$_COOKIE["account"])[1];

if (isset($_POST['delaccbtn'])) {
    $delaccountquery = "DELETE FROM `users` WHERE `users`.`id` = '$id' AND `users`.`name` = '$acctodel';";
    $delbase = "DROP TABLE IF EXISTS $table;";
    mysqli_query($db, $delaccountquery);
    mysqli_query($db, $delbase);


    setcookie('account', "", time() - 3600);
    mysqli_close($db);
    echo "<script>window.location.href='index.html';</script>";
}
