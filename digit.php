<?php
$string = '10,000';
// $output = preg_replace('/[^0-9]/', '', $string);
echo digitOnly($string);

function digitOnly($string) {
    return preg_replace('/[^0-9]/', '', $string);
}