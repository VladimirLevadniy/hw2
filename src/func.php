<?php

function task1 (array $string, bool $return = true)
{
    $result = implode(
        "\n",
        array_map(
            static function (string $str) {
                return "<p>$str</p>";
            },
            $string
        )
    );

    if ($return) {
        return $result;
    }
}



function task2 (string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . 'is not integer or float');
            error_reporting('E_USER_ERROR');
           return trigger_error('Не является числом', E_USER_ERROR);
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '*':
            $result = 1;
            foreach ( $args as $arg) {
                $result *= $arg;
            }

            return  $result;
        case '/':
            $result = array_shift($args);
            foreach ($args as $n=> $arg) {
                if ($arg == 0) {
                    trigger_error('derive by zero on argument #' . ($n +1));
                    return 'ERROR: derive by zero';
                }
                $result = $result / $arg;
            }
            return $result;

        default:
            return 'ERROR: unknow action';
    }
}

function task3 ($a, $b)
{
    if (!is_int($a)) {
        trigger_error('A is not integer');
        return trigger_error("А не целое число", E_USER_ERROR);
    }
    if (!is_int($b)) {
        trigger_error('B is not integer');
        return trigger_error("Б не целое число", E_USER_ERROR);
    }
    if ($a < 0 || $b < 0) {
        trigger_error('Argument must be positive');
        return trigger_error("Число должно быть больше 0", E_USER_ERROR);
    }

    {
        $result = '<table>';
        for ($i = 1; $i < $a; $i++) {
            $result .= '<tr>';
            for ($j = 1; $j < $b; $j++) {
                $result .= '<td>';
                $result .= $i * $j;
                $result .= '</td>';
            }
            $result .= '</tr>';
        }
        $result .= '</table>';
        echo $result;
    }
}

function task4(){
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.H.i');
    echo '<br>';
    echo strtotime('22.08.2022 00:00:00');
}

function task5(){
    $string = 'Карл у Клары уКрал Кораллы';
    echo str_replace('К', '', $string);
    echo '<br>';
    $string = 'Две бутылки лимонада';
    echo str_replace('Две', 'Три', $string);
}


function task6(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }
    $str = ' ';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}