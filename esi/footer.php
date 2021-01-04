<?php

header('Cache-Control: public, s-maxage=25');
//header('Surrogate-Control: ESI/1.0');

$dt = new \DateTimeImmutable();
$formatted = $dt->format(\DateTimeImmutable::ATOM);

$content = <<<EOD
<p>Footer with <strong>s-maxage=25</strong>: $formatted</p>
EOD;

echo $content;

