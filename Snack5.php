<?php 
$storia = [
    'trePorcellini' => "C’erano una volta tre porcellini, Timmy, Tommy e Gimmy che abitavano tutti ancora nella casa della mamma. Un giorno la mamma disse loro – siete ormai grandicelli ragazzi miei, penso sia ora che prendiate ognuno di voi la vostra strada e costruiate ognuno la propria casetta!
    I tre porcellini, seppur a malincuore, sapevano che era la cosa giusta da fare, erano diventati finalmente grandi e così si fecero forza e prepararono ognuno il proprio bagaglio.Timmy fece un fagotto con tutti i suoi dolci e il flauto che amava tanto suonare. Tommy riempì di giocattoli una borsa assieme al suo caro violino. Gimmy invece preparò la sua cassetta degli attrezzi con tutto ciò che gli sarebbe servito per costruire una solida casetta.
    Così si prepararono, salutarono la mamma che augurò loro buona fortuna, e si incamminarono allegri e felici per il sentiero. Fate attenzione al lupo cattivo! – si raccomandò tanto la mamma mentre li salutava con una lacrimuccia agli occhi. I tre porcellini sorrisero, la salutarono ancora e proseguirono nel loro cammino.
    Ma dalla collina, nascosto tra i cespugli, qualcuno stava osservando la scena, qualcuno a cui piacevano tanto i porcellini, soprattutto con contorno di patate arrosto… era il Lupo Cattivo!
    Dopo un po’ che i tre porcellini camminavano allegramente Gimmy disse: Io mi fermerò qui per costruire la mia casetta, qui vicino c’è un ruscello e questi begli alberi mi faranno ombra nei mesi caldi.
    Va bene – risposero gli altri due – noi continuiamo a camminare! Gimmy li salutò e cominciò a costruire la sua casetta.Poco dopo Anche Tommy decise di fermarsi – io costruirò la mia casetta qui, dove ci sono tutti questi rami di legno già pronti per essere tagliati, così costruirò la mia casetta di legno! Va bene fratellino mio, io proseguo sul sentiero, a presto! Timmy quindì salutò Tommy e continuò a camminare, finché non vide un bel covone di paglia dorata essiccata al sole.
    Potrei costruire la mia casetta con quella paglia, ci metterei pochissimo così poi potrei subito andare a giocare! – disse, e così fece.
    In quattro e quattr’otto, con qualche rametto qua e là, la casetta di paglia era pronta, così potè subito uscire in giardino e mettersi a suonare il suo amato flauto. Anche Tommy ormai aveva ultimato la sua casetta. Non era molto robusta perché per fare presto e poter andare a divertirsi nei prati, aveva deciso di inchiodare le assi di legna in fretta e furia, giusto per arrivare al tetto e ripararsi dalla pioggia in caso di intemperie.
    Non appena finì, prese il violino e cominciò a suonare. L’ultimo a finire il suo lavoro fu Gimmy, che lavorò fino a sera per costruirsi la sua robusta casetta di mattoni con una bella porta in legno e una grossa serratura.
    Ci fece perfino un bel caminetto, per non patire il freddo nelle lunghe giornate invernali.
    Solo allora si godette il meritato riposo."
];
$storia = explode('.', $trePorcellini);
?>
<ol>
    <?php foreach($storia as $paragrafo){;?>
    <li> <?php echo $paragrafo?></li>
    <?php } ?>
</ol>
