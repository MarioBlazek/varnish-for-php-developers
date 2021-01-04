<?php

header('Cache-Control: public, s-maxage=2');

$dt = new \DateTimeImmutable();
$formatted = $dt->format(\DateTimeImmutable::ATOM);

$backend = $_SERVER['SERVER_PORT'];

$content = <<<EOD
<!DOCTYPE html>
<html>
    <head>
        <title>ESI example</title>
    </head>
    <body>
        <h1>Hello from $backend backend</h1>
        <p>
            Current date and time is: $formatted
        </p>
    </body>
</html>
EOD;

echo $content;
