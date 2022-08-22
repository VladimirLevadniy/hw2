<?php
require ('../src/func.php');

echo task1([1,2,3]);
echo '<br>';

echo task2('/', 25, 6);
echo '<br>';

echo task3(10, 10);
echo '<br>';

date_default_timezone_set('Europe/Moscow');
echo date('d.m.H.i');
echo '<br>';
echo strtotime('22.08.2022 00:00:00');


echo '<br>';
echo '<br>';
$string = 'Карл у Клары уКрал Кораллы';
echo str_replace('К', '', $string);
echo '<br>';

$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string);

echo '<br>';
file_put_contents('text.txt', 'Hello again!');
task6('text.txt');