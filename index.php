<!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte
    le occorrenze della parola da censurare.
 -->

 <?php

    $censure = $_GET['element'];
 
    $article = 'Passava quasi tutte le notti alla finestra a spazzolarsi una mano a quei duri gremiti suoi capelli da negro, con
    gli occhi alle stelle, placide e chiare le une come polle di luce, guizzanti e pungenti le altre; e metteva le più
    vive in rapporti ideali di figure geometriche, di triangoli e di quadrati, e, socchiudendo le palpebre dietro le
    lenti, pigliava tra i peli delle ciglia la luce d’una di quelle stelle, e tra l’occhio e la stella stabiliva il legame d’un
    sottilissimo filo luminoso, e vi avviava l’anima a passeggiare come un ragnetto smarrito.
    Il pensare così di notte non conferisce molto alla salute. L’arcana solennità che acquistano i pensieri
    produce quasi sempre, specie a certuni che hanno in sè una certezza su la quale non possono riposare, la
    certezza di non poter nulla sapere e nulla credere non sapendo, qualche seria costipazione. Costipazione
    d’anima, s’intende. E al giudice D’Andrea, quando si faceva giorno, pareva una cosa buffa e atroce nello
    stesso tempo, ch’egli dovesse recarsi al suo ufficio d’Istruzione ad amministrare per quel tanto che a lui
    toccava la giustizia ai piccoli poveri uomini feroci.'
 ?>

 <?= '<h2>Articolo originale:</h2>' ?>
 <?= $article?>
 <?= '<h3>Lunghezza articolo: ' . strlen($article) . ' caratteri</h3>'?>

 <?= '<h2>Articolo censurato:</h2>' ?>
 <?= $censoredArticle = str_replace($censure, '***', $article)?>
 <?= '<h3>Lunghezza articolo: ' . strlen($censoredArticle) . ' caratteri</h3>'?>