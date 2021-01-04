<?php

header('Cache-Control: public, s-maxage=10');
//header('Surrogate-Control: ESI/1.0');

$dt = new \DateTimeImmutable();
$formatted = $dt->format(\DateTimeImmutable::ATOM);

$content = <<<EOD
<p>Header with <strong>s-maxage=10</strong>: $formatted</p>
EOD;

echo $content;

