<?php
    //recreate the functionality of PHP's array_map function, obviously without actually using the built-in array_map function

    $map = function($func,$array){
        $new_array = [];

        for ($i=0;$i<count($array);$i+=1){
            $result = $func($array[$i]);
            $new_array[] = $result;
        }return $new_array;
    };

    $numbers = [1,2,3,4];
    $result = $map(
        fn($x) => $x*3,
        $numbers,
    );
    print_r($result);