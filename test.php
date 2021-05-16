<?php

include 'vendor/autoload.php';

use RoNoLo\JsonExtractor\JsonExtractorService; 
 
$extract = new JsonExtractorService();

$html = file_get_contents('test.html');
$results = $extract->extractAllJsonData($html);

echo '<pre>';
print_r($results);