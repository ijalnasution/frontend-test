<?php

$data = (object)array();

$data->price = array(
    array(
        'name' => 'bayi',
        'currency' => 'Rp',
        'striked_price' => number_format(19900, 0, ',', '.'),
        'price' => number_format(14900, 0, ',', '.'),
        'period' => 'bln'
    ),
    array(
        'name' => 'pelajar',
        'currency' => 'Rp',
        'striked_price' => number_format(46900, 0, ',', '.'),
        'price' => number_format(23450, 0, ',', '.'),
        'period' => 'bln'
    ),
    array(
        'name' => 'personal',
        'currency' => 'Rp',
        'striked_price' => number_format(58900, 0, ',', '.'),
        'price' => number_format(38900, 0, ',', '.'),
        'period' => 'bln'
    ),
    array(
        'name' => 'bisnis',
        'currency' => 'Rp',
        'striked_price' => number_format(109900, 0, ',', '.'),
        'price' => number_format(65900, 0, ',', '.'),
        'period' => 'bln'
    ),
);

echo json_encode($data);