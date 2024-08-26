<?php
    function my_function(){
        echo "Hello\n";
    };
    $my_function = function($name){
        echo "Hello $name\n";
    };
    $my_function_2 = $my_function;
    $my_function_2("Sajani");

    $environment = 'dev';

    $fetch_data_real = function(){
        echo "Fetching data...\n";
    };

    $fetch_data_fake = function(){
        return[
            'name'=> 'Sajani',
            'age'=> 35,
            'job'=> 'programmer',
        ];
    };
    $fetch_data = ($environment === 'dev'
    ? $fetch_data_fake
    : $fetch_data_real);
    print_r($fetch_data());
?>
