<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
// Creo una variabile con la mia citazione:
$MyCitation = '«Il coraggio di essere felici implica anche il coraggio di essere disapprovati.
Quando conquisti quel coraggio, le tue relazioni interpersonali si alleggeriscono all’istante.»';
?>

<div>
    <h4>
        Questa è la citazione di un libro che sto leggendo
        (<em style="color:#0000FF">Ichiro Kishimi, Fumitake Koga, "Il coraggio di non piacere"</em>):
    </h4>

    <!-- Stampo a schermo il paragrafo: -->
    <?php echo $MyCitation; ?> 

                                  <!-- Stampo a schermo la sua lunghezza: -->
    La sua lunghezza complessiva è di <em style="color:#228B22"><?php echo strlen($MyCitation);; ?> caratteri.</em> 
</div> 

<?php
// Definisco la parola da censurare, passata dall'utente tramite parametro GET: 
$badword = $_GET['badword'];
?>

<div>
    <h4>
        Questa è la stessa citazione con la parola 
        "<span style= "color:#ff0000"><?php echo $badword ?></span>" 
        che hai deciso di censurare:
    </h4>

<!-- Stampo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
la parola censurata tutte le volte che si presenta: -->
<?php echo str_replace($badword, '***', $MyCitation); ?>
</div>
</body>
</html>