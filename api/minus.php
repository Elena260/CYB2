<?php
session_start();
$user = $_SESSION["user"];
$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
//Здесь имеются существенные нарушения безопасности 
//1.слабый пароль
//2.Нарушение принципа наименьших привелегий .
//3. В коде прописан пользователь и пароль . 
//$conn = mysqli_connect("localhost:3306","ANY", "123456", "billing");
// 4. Уязвимость для SQL Injection
include("c:/xampp/params/billing.php");
$conn = mysqli_connect("$db_server","$db_user","$db_pwd","billing");
$sql = "INSERT INTO calcs(Number1, Number2, Operation,User) VALUES ($x , $y ,'minus', '$user')";
//echo $sql;
mysqli_query($conn, $sql);
mysqli_close($conn);
$z = $x-$y;
echo $z;