<?php

namespace App\Http\Services;

class ArrayServices
{
    public static function array_1()
    {
        print('Question : Given an array (or string), the task is to reverse the array/string.');
        print('<br>');
        print('<br>');

        print('Solution : Iterative way');
        print('<br>');
        print('<br>');
        $variable   = array(1, 4, 3, 2, 5, 7, 8);

        print('Input : ');
        for ($i = 0; $i < count($variable); $i++) {
            print($variable[$i] . " ");
        }

        $start = 0;
        $end = count($variable) - 1;

        while ($start < $end) {
            $temp = $variable[$start];
            $variable[$start] = $variable[$end];
            $variable[$end] = $temp;
            $start++;
            $end--;
        }

        print('<br>');

        print('Output : ');
        for ($i = 0; $i < count($variable); $i++) {
            print($variable[$i] . " ");
        }
    }
}
