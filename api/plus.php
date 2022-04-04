<?php
session_start();
$user = $_SESSION["user"];
$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
//Здесь имеются существенные нарушения безопасности
// 1. Слабый пароль 
// 2. Нарушение принципа наименьших привилегий               
// 3. Секрет в коде
//$conn = mysqli_connect("localhost:3306","ANY","123456","billing"); // открывает соединение с базой данных
include("c:/xampp/params/billing.php");                     
$conn = mysqli_connect("$db_server","$db_user","$db_pwd","billing"); // открывает соединение с базой данных
// 4. Уязвимость для SQL Injection
$sql = "INSERT INTO calcs(Number1, Number2, Operation,User) VALUES($x,$y,'plus','$user')";
//echo $sql;
mysqli_query($conn, $sql);// выполняет запрос к базе данных с помощью подключения и вставки 
mysqli_close($conn);
$z = $x + $y;
echo $z;

