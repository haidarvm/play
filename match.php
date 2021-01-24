<?php
$text = 'L\' utente _{nickname} ti ha invitato a giocare';
preg_match('#\_{(.*?)\}#', $text, $matches);
echo json_encode($matches);

$a = '/test Bandung?';

echo matchCom($a);
echo matching("_{nickname}");
function matchCom($command) {
    if (strpos($command, '/cuaca') !== false) {
        return  'cuaca adalah';
    } elseif (strpos($command, '/test') !== false) {
        return  'test adalah';
    }
}

function matching($command) {
    preg_match('#\_{(.*?)\}#', $command, $matches);
    return $matches[0];
}
