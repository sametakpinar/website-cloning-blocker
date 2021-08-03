
<?php

$dosya = fopen("log.log", 'a');
fwrite($dosya, $_SERVER["REMOTE_ADDR"]. "\n");
fclose($dosya);
