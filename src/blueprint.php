<?php
require 'vendor/autoload.php';
// require('sample.yaml');

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parseFile(filename: __DIR__ . './sample.yaml');


print_r ($value);
