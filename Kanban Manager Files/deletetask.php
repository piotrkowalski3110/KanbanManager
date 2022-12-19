<?php
$id = $_GET['task_id'];
$place = $_GET['dest'];
$table = explode(";", $_COOKIE["account"])[2];
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');

$sql = "DELETE FROM `$table` WHERE id = $id";
mysqli_query($db, $sql);
header('Location: myaccount.php?'.$place);