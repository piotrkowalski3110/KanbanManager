<?php
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');

if (isset($_COOKIE["account"])) {
    echo "<script>window.location.href='index.html';</script>";
    exit(1);
}

if (isset($_POST['loginme'])) {
    $accmail = mysqli_real_escape_string($db, $_POST['accountmail']);
    $accpasswd = mysqli_real_escape_string($db, $_POST['password']);
    $hashpasswd = md5($accpasswd);

    $sql = "SELECT * FROM users WHERE mail = '$accmail' and password = '$hashpasswd'";
    $result = $db->query($sql);
    $row_results = $result->fetch_assoc();
    $resname = $row_results['name'] ?? 'No data';
    $resmail = $row_results['mail'] ?? 'No data';
    $restab = $row_results['kanban'] ?? 'No data';
    $resid = $row_results['id'] ?? 'No data';

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        setcookie('account', $resid.";".$resname.";".$restab, time() + 3600);
        echo "<script>window.location.href='myaccount.php?standard_view';</script>";
        exit(1);
    } else {
        echo '<script>alert("Ups... Coś poszło nie tak. Spróbuj zalogować się ponownie!")</script>';
        echo "<script>window.location.href='login.html';</script>";
        exit(1);
    }
}
?>