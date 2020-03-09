<?php
// $name_list = array('Ava', 'Emma', 'Olivia','Olivia', 'Sophia', 'Emma');
// $result = array_unique($name_list);
// print_r($result);

$array = array(
    array('Ava', 'Emma', 'Olivia'),
    array('Olivia', 'Sophia', 'Emma')
);

function fn($a) {
    print "$a[0], $a[1], \n";
}

foreach ($array as $a) fn($a);