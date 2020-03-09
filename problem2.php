<?php
// $a1=array('Input.txt' => 'Randy','Code.py' => 'Stan');
// $a2=array('Output.txt' => 'Randy');
// print_r(array_merge_recursive($a1,$a2));

/**
 * Function that groups an array of associative arrays by some key.
 * 
 * @param {String} $key Property to sort by.
 * @param {Array} $data Array that stores multiple associative arrays.
 */
function group_by($key, $data) {
    $result = array();

    foreach($data as $val) {
        if(array_key_exists($key, $val)){
            $result[$val[$key]][] = $val;
        }else{
            $result[""][] = $val;
        }
    }

    return $result;
}

$data = array(
    array(
        "file" => "Input.txt",
        "owner" => "Randy"
    ),
    array(
        "file" => "Code.py",
        "owner" => "Stan"
    ),
    array(
        "file" => "Output.txt",
        "owner" => "Randy"
    ),
);

// Group data by the "gender" key 
$byGroup = group_by("owner", $data);

// Dump result
echo "<pre>" . var_export($byGroup, true) . "</pre>";