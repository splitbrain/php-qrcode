#!/usr/bin/env php
<?php

include 'src/QRCode.php';

use splitbrain\phpQRCode\QRCode;

if(count($argv) < 3){

    echo "Missing argument!\n";
    exit(1);

}else{

    $qrcode = QRCode::svg($argv[1]);
    file_put_contents($argv[2], $qrcode);
    exit(0);

}

?>