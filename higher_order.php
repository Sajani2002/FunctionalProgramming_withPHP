<?php
    $divide = function($x,$y){
        if ($y==0){
            echo"cannot divide";
            return null;
        }
        return $x/$y;

    };
    $second_arg = function($func){
        return function(...$args)use($func){
            if($args[1]==0){
                echo "Cannot divide by zero";
                return null;
            };
            return $func(...$args);
        };
    };

    $divide_safe = $second_arg($divide);
    echo $divide_safe(10,5)."\n";
