<?php
    $parText = "Quest'orologio è stato acquistato dal tuo bisnonno. L'ha comprato durante la Prima guerra mondiale in un negozietto a Knoxville, Tennessee. Ad acquistarlo è stato il soldato Ernie Coolidge il giorno che è partito per Parigi. Era l'orologio che il tuo bisnonno ha usato in guerra, costruito dalla prima fabbrica di orologi da polso. Vedi, in precedenza la gente portava solo orologi da tasca. Il tuo bisnonno ha portato quest'orologio ogni giorno durante la guerra. Poi, dopo aver fatto il suo dovere, è tornato a casa dalla tua bisnonna, si è sfilato l'orologio da polso e l'ha messo in un vecchio barattolo da caffè. E in quel barattolo è rimasto finché tuo nonno Dane Coolidge è stato chiamato dal suo paese per andare ancora una volta oltremare a combattere i tedeschi. E questa l'hanno chiamata Seconda guerra mondiale. Il tuo bisnonno ha dato l'orologio a tuo nonno perché gli portasse fortuna. Purtroppo Dane non ha avuto altrettanta fortuna del suo vecchio. Tuo nonno era un marine ed è rimasto ucciso con tutti gli altri marines nella battaglia di Wake Island. Tuo nonno era di fronte alla morte e lo sapeva. Nessuno di quei ragazzi si faceva illusioni, nessuno credeva di uscire vivo da quell'isola. E così, tre giorni prima che i giapponesi occupassero l'isola, tuo nonno, che aveva 22 anni, ha chiesto al mitragliere di un aereo da trasporto dell'aviazione, che si chiamava Winocki e che lui non aveva mai visto prima in vita sua, di consegnare quest'orologio d'oro al suo figlioletto che non aveva mai visto in carne e ossa. Tre giorni dopo tuo nonno era morto, ma Winocki ha tenuto fede alla parola data. Finita la guerra, ha fatto visita a tua nonna, consegnando al tuo babbo, che era ancora un bambino, l'orologio d'oro del suo papà. Questo orologio. Questo orologio era al polso del tuo papà quando è stato abbattuto su Hanoi. Lui è stato catturato e rinchiuso in un campo di prigionia vietnamita. E sapeva che se i musi gialli avessero visto l'orologio, glielo avrebbero sequestrato. Da come tuo papà lo guardava, era evidente che questo orologio era tuo per diritto di nascita. E che fosse dannato se aveva lasciato che qualche mascalzone mettesse le sue sporche mani su ciò che spettava per diritto di nascita a suo figlio. E così lo ha nascosto nell'unico posto in cui sapeva di poter nascondere qualcosa. Il suo culo. Per cinque lunghi anni, ha portato l'orologio nel suo culo. Poi, quando è morto di dissenteria, ha dato l'orologio a me. Io ho tenuto nascosto questo scomodo pezzo di metallo nel mio culo per due anni. Poi, dopo sette anni, sono stato spedito a casa dai miei. E adesso, ometto, l'orologio lo do a te.";    
    $bad_word = $_GET["censored"];
    $censoredText = str_replace($bad_word, '***', $parText);
    $text_len = strlen($parText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">    
    <title>Php Badword</title>
</head>
<body>
    <div class="quote">
        <h1 class="title">Pulp Fiction quote</h1>  
        <p class="quote-txt"><?php echo $censoredText ?></p>
        <p>Il paragrafo precedente ha lunghezza uguale a: <?php echo $text_len ?> caratteri</p>
    </div>
    
   
</body>
</html>