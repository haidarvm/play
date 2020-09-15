<?php
$db_connection = pg_connect("host=localhost dbname=stack user=postgres password=hai2coders");
$number = rand(1, 4000);
$sql = "SELECT body FROM posts ORDER BY \"id\" ASC OFFSET ".$number."  LIMIT 3";
$result = pg_query($db_connection, $sql);

function gen_text($file, $text) {
    $txt = $text;
    file_put_contents($file, $txt . PHP_EOL, FILE_APPEND);
}

$json = json_encode(pg_fetch_all($result));
//gen_text('ptext.txt', $json);
echo $json;	
