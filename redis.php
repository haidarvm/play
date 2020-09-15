<?php
$redis = new \Redis();
$redis->connect('127.0.0.1', 6379);
$array =  array(
    'sys_status' => 'one',
    'num_user' => 'three'
   );
// $redis->delete('key');
if ($redis->get('sql')) {
    echo $redis->get('sql');
} else  {
    $servername = 'localhost';
    $username = 'root';
    $password = 'hai2coders';
    $dbname = 'news';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    $sql = 'SELECT post_content FROM wprg_posts where ID =88701';
    $result = $conn->query($sql);
    $fetch = $result->fetch_all(MYSQLI_ASSOC);
    $redis->set('sql', json_encode($fetch));
    echo $redis->get('sql');
}
