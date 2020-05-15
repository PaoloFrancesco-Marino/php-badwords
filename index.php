<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>
<body>

    <!-- PHP -->
    <?php
    /***
     * Descrizione:
        Creare una variabile con un paragrafo di testo.
        Visualizzare a schermo il paragrafo
        Visualizzare a schermo la relativa lunghezza del paragrafo
        Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterschi).
     */

    //  paragrafo
    $paraghrap = "Questo è il testo iniziale. Benvenuto PHP, lorem ipsum dolor sit amet consectetur adipisicing elit. Autem facilis dolor quas. Velit deserunt corrupti quia, dolore facilis odit, mollitia earum, itaque non accusantium maiores vel rerum error sapiente ipsam!";

    // lunghezza paragrafo
    $lunghezza_stringa = strlen($paraghrap);

    //stampa direttamente da php
    // echo "la lunghezza del testo è:" . ' ' . $lunghezza_stringa;

    // usiamo il get
    $word = $_GET["badword"];
    // sostituiamo
    $replace = str_replace($word, "***", $paraghrap);
    ?>

    <header>
        <p><?php  echo $paraghrap  ?></p>
        <p>La lunghezza del paragrafo è: <?php echo $lunghezza_stringa ?></p>
        <p>Queta è la parola che vuoi cambiare: <strong><?php echo $word ?></strong></p>
        <p>Questo è il testo ristampato: <?php echo $replace ?></p>
    </header>
    

    
</body>
</html>