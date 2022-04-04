<?php
session_start();
unset($_SESSION["user"]);
echo'<meta http-equiv="refresh" content="2; URL=calc.php">';
die("Вы вышли из системы");