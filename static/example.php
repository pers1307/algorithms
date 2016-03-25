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

require_once 'CyclicalStack.php';

echo 'Пример работы с циклическим стеком';

$cyclical = new CyclicalStack();

// Переполнил стэк
for ($i = 0; $i < 11; ++$i) {
    $cyclical->put($i + 10);
}

var_dump($cyclical);

// Доразобраться
echo $cyclical->get();
echo $cyclical->get();
echo $cyclical->get();
var_dump($cyclical);