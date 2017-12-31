<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Les dates Exercice 6</title>
        </head>
        <body>
            <h1>Les dates en PHP</h1><hr/>
            <?php
              $dayFebruary = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
              echo 'Le nombre de jours dans le mois de février en 2016 est de ' . $dayFebruary . ' jours.';
            ?>
            <hr/>
            <p class="btn"><a href="../exercice5/index.php">Précédent</a></p>    
            <p class="btn"><a href="../exercice7/index.php">Suivant</a></p>
            <style>
                .btn{
                    display: inline-block;
                }
            </style>
        </body>
    </html>
