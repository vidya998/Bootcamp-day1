<?php
function flatten_func($multi_array) {
    $single_array = array();
    foreach ($multi_array as $key => $value) {
        if (is_array($value)) {
            $single_array = array_merge($single_array, flatten_func($value));
        }
        else {
            $single_array[$key] = $value;
        }
    }
    return $single_array;
}
$val = flatten_func([2, 3, [4,5], [6,7], 8]);
print_r($val);