<?php

function getNamesOfPlayers($obj) : array{
    $names = array();
    foreach ($obj->{'players'} as $item) {
        array_push($names,$item->name);
    }
    return $names;
}

function getAgesOfPlayers($obj) : array{
    $ages = array();
    foreach ($obj->{'players'} as $item) {
        array_push($ages,$item->age);
    }
    return $ages;
}

function getAddressOfPlayers($obj) : array{
    $address = array();
    foreach ($obj->{'players'} as $item) {
        array_push($address,$item->address->city);
    }
    return $address;
}

function getUniqueNames($obj) : array{
    $names = array();
    foreach ($obj->{'players'} as $item) {
        array_push($names,$item->name);
    }
    return array_unique($names);
}

function getMaxAgeNames($obj) : array{
    $names = array();
    $age = getAgesOfPlayers($obj);
    $maxAge = max($age);
    foreach ($obj->{'players'} as $item) {
        if($item->age == $maxAge)
            array_push($names,$item->name);
    }
    return $names;
}

$input = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";
$obj = json_decode($input);

print_r(getNamesOfPlayers($obj));
print_r(getAgesOfPlayers($obj));
print_r(getAddressOfPlayers($obj));
print_r(getUniqueNames($obj));
print_r(getMaxAgeNames($obj));