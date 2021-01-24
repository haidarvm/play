<?php
$message = "/cuaca Pontianak";
if (strpos($message, '/cuaca') === 0) {
    $location = substr($message, 7);
    // echo $location;
    $apiopenweahtermap = '14329a473635baf8ea2c6e29107d1bbe';
    $openweahtermap = 'http://api.openweathermap.org/data/2.5/weather?q=' . $location . '&appid=' . $apiopenweahtermap.'&lang=id&units=metric';
    // echo $openweahtermap;
    $weather = json_decode(file_get_contents($openweahtermap), true);
    $data = ' Suhu <b>'.$weather['main']['temp'].' &#8451</b> Cuaca sedang <i>'.$weather['weather'][0]['description'].'</i>
    Kecepatan Angin '.$weather['wind']['speed'].' m/s Kelembaban '. $weather['main']['humidity'].'%';
    echo $data;
}
