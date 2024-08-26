<?php
    //this code didn't work 
    $people_data = [[
        'name' => 'Bill Johnson',
        'age'=> 55,
        'height' => 72
    ],
    [
        'name' => 'Caroline Ruiz',
        'age'=> 34,
        'height' => 69
    ],
    [
        'name' => 'Hannah Price',
        'age'=> 24,
        'height'=> 49
    ]
    ];

    $first_last_name = function($person){
        return array_merge(
            $person,
            [
                'first_name'=> explode(' ',$person['name'])[0],
                'last name' => explode(' ',$person['name'])[1]
            ]
            );
    };

    $height_meters = function($person){
        return array_merge(
            $person,
            [
                'height'=> $person['height']*0.0254,
            ]
            );
    };
    $compose = function(...$funcs){
        return function($data) use($funcs){
            return array_reduce(
                $funcs,
                fn($carry,$func) => ($carry),
                $data
            );
    };
};
    $format_person = $compose(
        $first_last_name,
        $height_meters
    );

    $formatted_people = array_map($format_person, $people_data);
    print_r($formatted_people);