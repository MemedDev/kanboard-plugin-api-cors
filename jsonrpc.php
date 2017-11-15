<?php

require __DIR__.'/../../app/common.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

echo $container['api']->execute();
