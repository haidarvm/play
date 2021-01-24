<?php
function autoParagraph($content) {
    $style = "";
    if (strpos($content, '<p') !== false) {
        $style = " uwais";
    }
    // echo $style;
    return $style;
}


$content = " <p>haidar please check this now</p>";

echo autoParagraph($content);