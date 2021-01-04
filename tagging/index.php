<?php

require_once __DIR__ . '/vendor/autoload.php';

use FOS\HttpCache\ResponseTagger;
use FOS\HttpCache\TagHeaderFormatter\CommaSeparatedTagHeaderFormatter;
use FOS\HttpCache\TagHeaderFormatter\MaxHeaderValueLengthFormatter;

$inner = new CommaSeparatedTagHeaderFormatter('X-Cache-Tags', ',');
$formatter = new MaxHeaderValueLengthFormatter($inner, 4096);
$responseTagger = new ResponseTagger(['header_formatter' => $formatter]);


$responseTagger->addTags(['kifla1', 'kifla2']);

header(sprintf('%s: %s',
    $responseTagger->getTagsHeaderName(),
    $responseTagger->getTagsHeaderValue()
));

header('Cache-Control: s-maxage=300');


$dt = new \DateTimeImmutable();

echo sprintf("Current date and time is: %s", $dt->format(DateTimeImmutable::ATOM));
