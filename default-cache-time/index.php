<?php

# Simple example of 120s caching

$dt = new \DateTimeImmutable();

echo sprintf("Current date and time is: %s", $dt->format(DateTimeImmutable::ATOM));
