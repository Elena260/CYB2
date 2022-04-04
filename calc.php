<?php
session_start();
if(!isset($_SESSION["user"])){
    echo '<meta http-equiv="refresh" content="2; URL=login.php">';
    die("Требуется логин! Вы будете пренаправлены.");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <link rel="stylesheet" href="css/main.css" />
    <style>
        input {
            margin-bottom: 10px;
            width: 170px;
            text-align: center;
        }

        button {
            margin-bottom: 10px;
            margin-right: 5px;
            width: 85px;
        }
    </style>
    <script>
        function plus() {
            x = parseInt(document.getElementById("txtX").value);
            y = parseInt(document.getElementById("txtY").value);
            //z = x + y;
            url = "api/plus.php?x=" + x + "&y=" + y;//подготовили обращение по методу GET к серверу. 
            xhr = new XMLHttpRequest();// создали объект 
            xhr.open("GET",url,false);
            xhr.send();
            z = xhr.responseText;

            document.getElementById("txtZ").value = z;
        }

        function minus() {
            x = parseInt(document.getElementById("txtX").value);
            y = parseInt(document.getElementById("txtY").value);
            //z = x - y;
            url = "api/minus.php?x=" + x + "&y=" + y;// обращение к серверу по методу GET
            xhr = new XMLHttpRequest(); //создали объект для запроса 
            xhr.open("GET",url,false); // инициализировали объект , запрос синхронный 
            xhr.send(); //послали запрос 
            z = xhr.responseText; // занесли полученные данные в переменную z 

            document.getElementById("txtZ").value = z;//Если у элемента есть атрибут id, то мы можем получить его вызовом document.getElementById(id), где бы он ни находился.
        }
            
    </script>
</head>
    <body>
    <a href="index1.html">Индекс</a>>
   

    <h1>Калькулятор</h1>
    <input id="txtX"/> <br />
    <input id="txtY"/> <br />
    <button onclick="plus();">+</button>
    <button onclick="minus();">-</button> <br />
    <input id="txtZ" />
</body>
</html>