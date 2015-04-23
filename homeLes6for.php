<pre>
<?php
require 'states2.php';
//Пред вывод
echo "<h2>First</h2>";
print_r($us_state_abbrevs_names);
//Сортировка ключей
ksort($us_state_abbrevs_names['states']);
//присвоение
$keys =  array_keys($us_state_abbrevs_names['states']);
$values = array_values($us_state_abbrevs_names['states']);
//сортировка значений и стран
rsort($us_state_abbrevs_names['countries']);
sort($values);
//Цикл
for($i=0;$i<count($us_state_abbrevs_names['states']);$i++){
    $us_state_abbrevs_names['states'][$keys[$i]]=$values[$i];
 }
//Результат
echo"<h2>Sorted</h2>";
print_r($us_state_abbrevs_names);  
?>
</pre>