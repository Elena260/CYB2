<?php
    session_start(); //подключаем страницу к ссессии 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicks</title>
</head>
<body>
    <a href="index1.html">Индекс</a>>
    <h1>Считаем щелчки с помощью PHP</h1>
    <form>
    <button>Щелкни здесь</button>
    </form>
    <?php
    //if (isset($_SESSION["clicks"]))// проверяем задана ли сессия 
    //$i = $_SESSION["clicks"]; //если сессия задана заносим сессионную переменную в $i 
    //с помощью $_SESSION php общается с сервером.
    //else 
        //$i=0; // иначе $i присваиается значение 0
    //если есть сессия , вспоминай , если нет , начинай $i с нуля , прибавляй единицу, 
    //выводи и запоминай .
    if (isset($_COOKIE["clicks"]))
        $i = $_COOKIE["clicks"];
    else
        $i = 0;
    $i +=1;
    echo "Число щелчков: $i";
    setcookie("clicks", $i , time() + 20); 
    //$_SESSION["clicks"] = $i; //запоминаем переменную i в сессионную переменную  
    ?>
</body>
</html>