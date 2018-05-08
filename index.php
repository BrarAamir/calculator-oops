<?php
spl_autoload_register(function ($name) {
    require_once $name . '.php';
});

$c = new Calculator;

$c->setOperation(new Adder);
$c->calcuate(10,50);

$c->setOperation(new Subtractor);
$c->calcuate(50);


$c->setOperation(new Multiplier);
$c->calcuate(50);

$c->setOperation(new Divider);
$c->calcuate(10);

echo $c->getResult();