<?php

$content = "This is an example with ETag header";
$etag = md5($content);

header('ETag: ' . $etag);

if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag) {
    header('HTTP/1.0 304 Not Modified');
    exit;
}

sleep(5);

$dt = new \DateTimeImmutable();

echo $content . "<br >";
echo sprintf("Current date and time is: %s", $dt->format(DateTimeImmutable::ATOM));
