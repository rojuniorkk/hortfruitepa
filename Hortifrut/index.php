<?php


    require_once('./config/produtos.php');

    $file = fopen('./dados/produtos.txt','r');

    while(!feof($file)){
        $l = fgets($file, 1024);
        $t = explode(',',$l);

        $p = new Produt($t[0], $t[1]);
        $p->debug();
    }

    fclose($file);

?>