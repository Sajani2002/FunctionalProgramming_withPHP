<?php
    $create_printer = function(){
        return function(){
            echo"Hello functional\n";
        };
    };

    $my_printer = $create_printer();
    $my_printer();

    $create_multilplier = function($y){
        return function($x) use($y){
            return $x * $y;
        };
    };

    $double = $create_multilplier(2);
    $triple = $create_multilplier(3);
?>