<?php
$db_connection = pg_connect("host=localhost dbname=stack user=postgres password=hai2coders");
$sql = 'SELECT * FROM posts WHERE  "Id" =14';
$result = pg_query($db_connection, $sql);

$json = json_encode(pg_fetch_all($result));
//gen_text('ptext.txt', $json);
echo $json;	
