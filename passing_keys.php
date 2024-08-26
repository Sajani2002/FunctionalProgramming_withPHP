<?php
    $letters = ['a','b','c'];
    $numbers = [1,2,3];
    $pairs = array_map(
        fn($letter,$index) => "The letter at position $index is $letter",
        $letters,
        array_keys($letters)
    );
    print_r($pairs);