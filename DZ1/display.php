<?php
$name = "";
$surname = "";
$rowsQuantaty = $_POST["rows"];
$columnsQuantaty = $_POST["columns"];
$fontSize = 20;
$red = 0;
$green = 255;
$blue = 0;

for($i = 0; $i < strlen($_POST['firstname']); $i++){
    $name = substr($_POST['firstname'], $i, 1);
    echo '<span style="color: rgb('.$red.','.$green.','.$blue.'); font-size: '.$fontSize.' ">'. $name . '</span>';
   
    $fontSize += 7;
    }
    
    echo "<br>";

for($i = 0; $i < strlen($_POST['lastname']); $i++){
$surname = substr($_POST['lastname'], $i, 1);
echo '<span style="color: rgb('.$red.','.$green.','.$blue.'); font-size: '.$fontSize.' ">' . $surname . '</span>';
$fontSize +=7;
$red += 40;
$green += 80;
$blue += 60; 
}


echo "<br>";
echo "<br>";

for ($i = 0; $i < $rowsQuantaty; $i++){
    for($j = 0; $j < $columnsQuantaty; $j++){
        echo  '<span>@</span>';
    }
    echo "<br>";
}

?>


