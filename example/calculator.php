<?php
use \Xsolla\SDK\Calculator;
use \Guzzle\Http\Client;
use \Xsolla\SDK\Storage\Project;
include '../vendor/autoload.php';

$calculator = new Calculator(new Client('https://secure.xsolla.com/api/'), new Project());

// Calculation of the amount of the game currency on the basis of the sum of payment 100 via payment system "1"
$calculator->calculateOut(1, 100);

// Calculation of the amount of payment via payment system "1" on the basis of the amount of game currency 100
$calculator->calculateIn(1, 100);


