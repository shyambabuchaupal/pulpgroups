<?php
include '../config.php';
session_start();
session_unset();
session_destroy();
?>
<script>
    window.location.href = "http://localhost/PulpGroup/login.php";
</script>
<?php
exit();
?>