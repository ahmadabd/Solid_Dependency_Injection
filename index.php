<?php

use App\Client;
use App\Server;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_error', 1);

$server = new Server();
$client = new Client($server);

$result = $client->doSomething();

var_dump($result);