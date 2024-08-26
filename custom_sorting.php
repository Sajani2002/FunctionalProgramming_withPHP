<?php
    $employees = [[
        'name' => 'Bill',
        'service'=> 55,
    ],
    [
        'name' => 'Caroline',
        'service'=> 34,
    ],
    [
        'name' => 'Hannah',
        'service'=> 24,
    ]
    ];

    function array_usort($array, $comparator_func){
        usort($array,$comparator_func);
        return $array;
    };
    $service_comparator = function($a,$b){
        return $a['service']-$b['service'];
    };

    $sorted = array_usort($employees,$service_comparator);
    print_r($sorted);
