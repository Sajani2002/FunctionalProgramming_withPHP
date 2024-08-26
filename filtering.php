<?php
    $numbers = [0,1,2,3,4,5,6,7,8];

    $is_even = function($x){
        return $x%2== 0;
    };
    $even_numbers = array_filter($numbers, $is_even);
    print_r($even_numbers);

