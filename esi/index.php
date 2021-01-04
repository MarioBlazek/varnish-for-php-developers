<?php

header('Cache-Control: public, s-maxage=100');
header('Surrogate-Control: ESI/1.0');

$dt = new \DateTimeImmutable();
$formatted = $dt->format(\DateTimeImmutable::ATOM);

$content = <<<EOD
<!DOCTYPE html>
<html>
    <head>
        <title>ESI example</title>
    </head>
    <body>
        <header>
            <esi:include src="http://127.0.0.1:6018/esi/header.php"/>
        </header>
        <main>
            <p>
                Current date and time is: $formatted (<strong>s-maxage=100</strong>)
             </p>
        </main>
        <footer>
            <esi:include src="http://127.0.0.1:6018/esi/footer.php"/>
        </footer>
    </body>
</html>
EOD;

echo $content;

