<?php

require_once 'Stack.php';

echo 'Пример работы со стеком';

$stack = new Stack();

var_dump($stack);

$stack->put('orange');
$stack->put('apple');
$stack->put('banana');

var_dump($stack);

echo $stack->get();

var_dump($stack);

