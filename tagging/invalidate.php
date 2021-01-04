<?php

require_once __DIR__ . '/vendor/autoload.php';

use FOS\HttpCache\CacheInvalidator;
use FOS\HttpCache\ProxyClient\Varnish;
use FOS\HttpCache\Exception\ExceptionCollection;
use FOS\HttpCache\ProxyClient\HttpDispatcher;

$dispatcher = new HttpDispatcher(['localhost:6081'], 'localhost:6081');
$client = new Varnish($dispatcher);
$cacheInvalidator = new CacheInvalidator($client);

$cacheInvalidator->invalidateTags(['kifla1']);

try {
    $cacheInvalidator->flush();
} catch (ExceptionCollection $e) {
    var_dump($e->getFirst());
}
