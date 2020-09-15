<?php
// Connection constants
$m = new Memcached();
$m->addServer('localhost', 11211);
$exampleValue = array('0','1','2','3');
$m->set('foo', $exampleValue);
// var_dump($m->get('foo'));
echo json_encode($m->get('foo'));