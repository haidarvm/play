<?php
$servername = 'localhost';
$username = 'root';
$password = 'hai2coders';
$dbname = 'news';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}

function gen_text($file, $text) {
    $txt = $text;
    file_put_contents($file, $txt . PHP_EOL, FILE_APPEND);
}


$sql = "SELECT post_content FROM wprg_posts where ID =88701";
$result =  $conn->query($sql);
$json = json_encode($result->fetch_all(MYSQLI_ASSOC));
echo $json;
