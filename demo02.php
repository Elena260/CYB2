<html>
    <head>
        <title>PHP</title>
        <link rel = "stylesheet" href = "css1/main1.css"; />
    </head>
    <body>
    <a href="index1.html">Индекс</a>
        <h1>Привет от PHP</h1>
        <?php
            $x=2;
            $y=2;
            $z=$x+$y;
            echo "Результат вычисления: $z";
            date_default_timezone_set("Europe/Samara");
            $now = date("H:i:s");
            echo "<h2> Текущее время: $now </h2> ";
        ?> 
    </body>
</html>