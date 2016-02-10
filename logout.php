<?php //include ("index.php");
session_start();
session_destroy();
header("Location: welcome.html");
?>
