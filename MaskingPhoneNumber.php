<?php
$number = '9876543210';
$masked_number = substr($number, 0, 2) . '******' . substr($number, -2);
print $masked_number;