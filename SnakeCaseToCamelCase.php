<?php
function SnakeToCamelCase($array, $firstCharacterCaps = false)
{
    foreach ($array as $string) {
        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));

        if (!$firstCharacterCaps) {
            $str[0] = strtolower($str[0]);
        }
        $final[] = $str;
    }
    return $final;
}

$array = ["snake_case", "camel_case"];
print_r(SnakeToCamelCase($array));


