<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check login</title>
</head>
<body>
    <?php
    $user = $_REQUEST['user'];// получают данные со страницы login.php 
    $pwd = $_REQUEST['pwd']; //  получают данные со страницы login.php
    $hash = hash("sha256", $pwd); // получаем hash пароля для проверки в базе данных 
    include("c:/xampp/params/billing.php");  // Это уязвимо , строчка ниже. 
    $conn = mysqli_connect("$db_server","$db_user","$db_pwd","billing"); // коннектимся к базе для проверки 
    $sql = "SELECT*FROM users WHERE login = '$user' AND Pwdhash = '$hash'";// запрос есть ли в базе данных эти данные
    $query= mysqli_query($conn, $sql);// получаем результат нашего запроса в переменную $query
    $result = mysqli_fetch_all($query);// в этой переменной окажутся записи из запроса, эти записи 
    //сложный объект , т к это не строка ,  для их прочтения используется специальная функция
    
    mysqli_close($conn); // закрываем коннекцию , что бы не нагружать сервер 
    //var_dump($result);  // это специальная функция для вывода на экран сложных объектов , echo такие объекты не может вывести 
   
    if (count($result)==0) // эта функция count возвращает длину массива , в данном случае $result  
        echo("Bad Login !"); // если массив равен 0 , значит пароль неправильный 
    else 
        echo "<h1>Welcome, $user!</h1>"; // выводит строку 
        echo"Сейчас вы будете перенаправлены на калькулятор";
    $_SESSION["user"] = $user;// выписали жетон безопасности на сессию 
    echo '<meta http-equiv="refresh" content="2; URL=calc.php">'; // Это мета тег 
    ?>

</body>
</html>