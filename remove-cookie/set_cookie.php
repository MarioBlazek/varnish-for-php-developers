<?php

header('Cache-Control: public, s-maxage=25');
# setcookie('MyVarnishCookie', 'Aloha');

$dt = new \DateTimeImmutable();

echo sprintf("Current date and time is: %s", $dt->format(DateTimeImmutable::ATOM));
