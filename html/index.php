<?php
require ('../src/func.php');

echo task1([1,2,3]);
echo '<br>';

echo task2('/', 12, 1);
echo '<br>';

echo task3(4, 5);
echo '<br>';
echo task4();



echo '<br>';
echo '<br>';
echo task5();

echo '<br>';
file_put_contents('text.txt', 'Hello again!');
task6('text.txt');