<?php
require 'phpQuery.php';

$url = 'https://privatbank.ua/';
$file = file_get_contents($url);

// $pattern = '#<table.+?</table>#s';
// preg_match($pattern, $file, $matches);

// print_r($matches);

$doc = phpQuery::newDocument($file);
$tbl = $doc->find('article tbody:eq(2)');


echo $tbl;