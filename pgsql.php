<?php
$db_connection = pg_connect("host=localhost dbname=stack user=postgres password=hai2coders");
$sql = 'SELECT body FROM posts WHERE  "id" =146013';
$result = pg_query($db_connection, $sql);

function gen_text($file, $text) {
    $txt = $text;
    file_put_contents($file, $txt . PHP_EOL, FILE_APPEND);
}

$json = json_encode(pg_fetch_all($result), JSON_UNESCAPED_UNICODE);
//gen_text('ptext.txt', $json);
echo $json;	
