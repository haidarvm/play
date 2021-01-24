<?php
$next_date = "2019-11-17";
for ($i = 0;$i < 30;$i++) {
    $next_date =  date('Y-m-d', strtotime($next_date . ' + 7 days'));
    echo $next_date.'<br/>';
}