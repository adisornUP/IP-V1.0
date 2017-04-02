<?php

$num1 = $_REQUEST['number1'];
$num2 = $_REQUEST['number2'];
$table = '<tr>';
$table2 = ' </tr>';
$td = '<td>';
$td2 = '</td>';
$counter = 1;

echo $num1, $num2;
echo '<table border="1">';
for ($i = 1; $i <= $num1; $i++) {
    
    echo $table;
    for ($j = 1; $j <= $num2; $j++) {

        echo $td, $counter;
        $counter++;
        echo $td2;
    }
    echo $table2;
}
echo '</table>';
?>  


