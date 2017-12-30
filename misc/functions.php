<?php
function simpleFunction($name = 'World')
{
    echo "Hello $name";
}

simpleFunction();

function add($num1, $num2)
{
    return $num1 + $num2;
};

echo add(3, 4);

function addThree($num)
{
    return add($num, 3);
}

