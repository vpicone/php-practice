<?php
// for ($i = 0; $i < 10; $i++) {
//     echo 'Number ' . $i;
//     echo '<br>';
// }

$i = 0;
while ($i < 10) {
    echo $i;
    echo '<br>';
    $i++;
}

$people = array('brad' => 'askmdlak', 'jose' => 'alsdlaksmd', 'will');

foreach ($people as $person) {
    echo $person;
    echo '<br>';
}

