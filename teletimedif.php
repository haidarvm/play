<?php
//echo $diff_time=(strtotime(date("Y/m/d H:i:s"))-strtotime("2019/02/01 10:23:45"))/60;
$out = new DateTime("2020-10-22 17:13");
$in = new DateTime("2020-10-22 23:59");

// echo date_diff($out, $in)->format('%d Days %h hour  minute %i');
// echo date_diff($out, $in)->format('%d Hari %h jam %i menit ');


echo date_diff(new DateTime("2020-10-22 17:14"), new DateTime("2020-10-22 23:59"))->format('%d Hari %h jam %i menit');


// $interval = $in->diff($out);

// %a will output the total number of days.
// echo $interval->format('%a total days %m and %h')."\n";

//2 Hari 3 jam 17 menit tepat nya