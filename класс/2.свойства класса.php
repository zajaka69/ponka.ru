<?php

class Pet{
    // перечень свойств класса
    public $name;
    public $age = 0;
}

// 1. получаем значение свойства
$cat = new Pet();
$cat->name = 'Вафля';
var_dump($cat->name);


// 2. или, перезаписываем на свои
$dog = new Pet();
$dog->name = 'Rexx';
$dog->age = 4;

var_dump(
    $dog->name,
    $dog->age
);