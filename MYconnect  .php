<?php
$link= mysqli_connect("localhost:3306","root", "", "billing");
if (!$link){
    die ('ошибка соединения ');
} // die - эквивалент функции exit() , выводит сообщение и прекращает выполнение текущего скрипта 

echo 'Успешно соединились'; 
mysqli_close($link);