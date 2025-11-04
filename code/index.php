<?php

include __DIR__ . '/vendor/autoload.php';

use \Predis\Client;

echo "Dodix Привет, Otus!<br>".date("Y-m-d H:i:s") ."<br><br>";

echo "Что-то еще<br>";
$client = new Client(
    ['host' => 'redis', 'port' => 6379]
);

echo extension_loaded('memcached') ? 'да' : 'пизда';
echo '<br>';

$mc = new Memcached();

$mc->addServer("memcached", 11211);

$mc->set("foo", "Hello!");

echo $mc->get("foo") . "<br>";

echo $mc->getVersion();

print_r($mc->getVersion());

echo count($mc->getServerList()) . "<br>";

$client->set('foo', 'bar');
$value = $client->get('foo');

echo $value;