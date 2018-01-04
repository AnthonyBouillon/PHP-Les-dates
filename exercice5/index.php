<!DOCTYPE html>
    <html lang='fr'>
        <head>
            <meta charset="utf-8" />
            <title>Les dates Exercice 5</title>
        </head>
        <body>
            <h1>Les dates en PHP</h1><hr/>
            <?php
              /* On écrit les deux dates en question */
              $datetime1 = new DateTime('18-12-2017');
              $datetime2 = new DateTime('16-05-2016');
              /* ->diff Retourne la différence entre deux objets */
              $interval = $datetime1->diff($datetime2);
              // Retourne une date formatée suivant le format fourni 
              // %a = Nombre total de jour
              echo $interval->format('Le nombre de jours entre le 16 mai 2016 jusqu\'à aujourd\'hui est de : %a jours');
            ?>
            <hr/>
            <p class="btn"><a href="../exercice4/index.php">Précédent</a></p>    
            <p class="btn"><a href="../exercice6/index.php">Suivant</a></p>
            <style>
                .btn{
                    display: inline-block;
                }
            </style>
        </body>
    </html>
