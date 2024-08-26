<?php
    $create_printer = function(){
        $number = 42;
        return function() use($number){
            echo"my favourite number is $number\n";
        };
    };
    $my_printer = $create_printer();
    $my_printer();
