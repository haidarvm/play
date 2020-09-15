<?php
$json_array = array(
    'title' => 'Example string\'s <h1>with</h1> "special" characters'
);

$json_decode = htmlspecialchars(json_encode($json_array), ENT_QUOTES, 'UTF-8');
// $json_decodes = json_encode(html_entity_decode($json_array));
$resultArray = array_map("strip_tags", $json_array);
echo $json_decode;
echo json_encode($resultArray);