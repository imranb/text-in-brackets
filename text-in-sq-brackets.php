<?php

$file = file_get_contents('random.txt') or die("Cannot open file");

preg_match_all("/\[([^\]]*)\]/", $file, $matches);

echo "Text in brackets: " . print_r($matches[1], true);