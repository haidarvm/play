<?php
// Connection constants
$m = new Memcached();
$m->addServer('localhost', 11211);

// $m->delete('sql');

if ($m->get('sql')) {
    echo json_encode($m->get('sql'));
} else {
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
    $m->set('sql', $fetch);
}
// var_dump($m->get('foo'));
// echo json_encode($m->get('sql'));
