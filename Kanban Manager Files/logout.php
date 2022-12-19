<?php
setcookie('account', "", time() - 3600);
echo "<script>window.location.href='index.html';</script>";
?>