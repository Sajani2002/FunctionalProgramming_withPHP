<?php
    $names_1 = [
        'John',
        'Betty'
    ];
    $names_2 = [
        'Peter',
        'Carl'
    ];

    $all_names = [
        'Jenny',
        ...$names_1,
        'Bill',
        ...$names_2,
        'Suzy'
    ];
    print_r($all_names);


    $person_data = [
        'name' => 'Bryan',
        'age'=> 43,
    ];

    $carrer_data = [
        'job' => 'Developer',
        'salary'=> 12000,
    ];

    $person_carrer = array_merge(
        $person_data,
        $carrer_data
    );

    $add = function(...$args){
        $sum = 0;
        for($i=0; $i<count($args); $i++){
            $sum +=$args[$i];
        }        
        return $sum;
    };
        $numbers = [1,2,3,4,5];
        echo $add(...$numbers)."\n";
    
