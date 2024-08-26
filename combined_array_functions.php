<?php
    $employees = [[
        'name' => 'Bill',
        'age'=> 55,
        'salary' => 200000,
        'job' => 'developer'
    ],
    [
        'name' => 'Caroline',
        'age'=> 34,
        'salary' => 30000,
        'job' => 'developer'
    ],
    [
        'name' => 'Hannah',
        'age'=> 24,
        'salary'=> 4500000,
        'job' => 'engineer'
    ]
    ];

    $developers = array_filter($employees,fn($x) => $x['job'] =='developer');
    $developer_salary = array_map(fn($x) =>$x['salary'],$developers);
    $total_developer = array_reduce(
        $developer_salary,
        fn($carry,$item) => $carry + $item,
    );
    $average_developer = $total_developer/ count($developer_salary);
    print_r($developer_salary);
    echo "average salary =  $average_developer";
    
