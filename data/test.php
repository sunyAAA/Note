<?php
    header('Content-Type:application/json,charset=UTF-8');
    $output = [];
    $output[]=[
        'name'=>'luna',
        'age'=>'17'
    ];
    $output[]=[
        'name'=>'guagua',
        'age'=>'18'
    ];
    $output[]=[
        'name'=>'tom',
        'age'=>'11'
    ];
    $output[]=[
        'name'=>'阿明',
        'age'=>'7'
    ];
    $output[]=[
        'name'=>'小夫',
        'age'=>'18'
    ];
    echo json_encode($output);
?>