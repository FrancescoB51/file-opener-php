<?php
    $file=fopen("log.csv", "r");
    if(!$file) {
        die("Errore dell'apertura del file");
        //die  interrompe l'esecuzione dando un messaggio

    }
    // non mi serve un rampo else perchè in caso di errore viene interrotto a riga 4

    //se il file esiste e viene aperto correttamente:
    while(!feof($file)) { // feof($file) === false
        $row=fgets($file);
        echo $row;
        echo"<br>";
    }

?>