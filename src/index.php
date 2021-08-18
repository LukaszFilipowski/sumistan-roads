<?php

use App\Factory\RoadsFactory;
use App\Finder\CheapConnectionFinder;

require 'vendor/autoload.php';

$roadsFactory = new RoadsFactory();
$roads = $roadsFactory->create();

$finder = new CheapConnectionFinder($roads);
var_dump($finder->find('Acoding', 'Wregate'));
