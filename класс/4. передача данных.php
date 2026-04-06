<?php

// передача по ссылке

class Cat{
    public $name;
    public $color;
}


$cat1 = new Cat();
$cat1->name = 'Murzik';
$cat1->color = 'Grey';

$cat2 = new Cat();
$cat2->name = 'Aaron';

var_dump(
    [
        $cat1->name,// Aaron
        $cat2->name // Aaron
    ]
);













//======================================================================================================================
// пример 2

$a2 = 1;

function x2(&$data)
{
    $data++;
}

