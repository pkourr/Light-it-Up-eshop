<?php
// Session starts here
session_start();
$_SESSION['logged_in'] = false;
session_destroy();
?>
<script>
    setTimeout(function () { window.location.href = "home.php"; }, 50);
</script>