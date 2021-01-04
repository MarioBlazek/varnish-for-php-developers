<?php

# Cache control example

header('Cache-Control: public, s-maxage=25');

$dt = new \DateTimeImmutable();

echo sprintf("Current date and time is: %s", $dt->format(DateTimeImmutable::ATOM));
