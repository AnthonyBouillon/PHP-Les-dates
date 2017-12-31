<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Les dates Exercice 4</title>
        </head>
        <body>
            <h1>Les dates en PHP</h1><hr/>
            <!-- Le timestamp de 1970 à maintenant -->
            <p>Le timestamp du jour est : <?php echo time(); ?></p>
            <!-- Le timestamp de 1970 à 15h 0 minute 0 seconde 8ème mois, 2ème jours, en 2016 -->
            <p>Le timestamp du 2 août 2016 est : <?php echo mktime(15, 0, 0, 8, 2, 2016); ?></p><hr/>
            <p class="btn"><a href="../exercice3/index.php">Précédent</a></p>    
            <p class="btn"><a href="../exercice5/index.php">Suivant</a></p>
            <style>
                .btn{
                    display: inline-block;
                }
            </style>
        </body>
    </html>
