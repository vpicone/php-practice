<?php
    #Array - hold multiple values
    /*
        -Indexed
        -Assoc
        -Multi-dimensional
 */
    // Indexed
$people = array('Kevin', 'Jeremy', 'Sara');
echo $people[0];

$ids = array(23, 55, 12);
echo $ids[2];

$ids[] = 'BMW';
    // associative

$people = array('brad' => 35, 'jose' => 2, 'will' => 39);
echo $people['brad'];
$ids = [22 => 'Brad', 44 => 'jose'];
echo $ids[22];

$people['Hill'] = 42;
// print_r($people);

//multidemensional

$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
);

echo ($cars[0][1]);
?>