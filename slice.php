<?php
$url = '/admin/posts/all/all/all/all/all/1';
echo $url;
$uri = explode('/', $url);

$second = array_slice($uri, 8, true);
echo "<br/>".$second[0];