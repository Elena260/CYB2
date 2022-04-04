<?php
$data = [1,2,3,44,56,66];
echo($data[1])."<br />";
$data[]=77;
echo($data[6])."<br />";
for($i=0; $i<7 ; $i++){
    echo ($data[$i]."<br />");
}
$people = [
    ["Yuri", "Andrienko",123456],
    ["Vasja", "Pupkin", 7777777],
    ["Masha", "Maskina",555555],
];
for($i= 0 ; $i < count($people); $i++){
echo ($people[$i][0]." - ".$people[$i][2]."<br />"); }

