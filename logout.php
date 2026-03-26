<?php
session_start();
session_destroy();
header("Location: hasiera.php");
exit();
?>