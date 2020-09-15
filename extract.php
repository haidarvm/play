<?php
$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array, EXTR_PREFIX_SAME, "dup");

echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";
?>
