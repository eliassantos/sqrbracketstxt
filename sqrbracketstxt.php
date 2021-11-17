<?php

$filename = 'loremipsum.txt';
$file_content = file_get_contents($filename);

preg_match_all('/\[(.*)\]/iU', $file_content, $match);

foreach($match[1] as $string){
    echo $string . PHP_EOL;
}
