<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les dates Exercice 8</title>
    </head>
    <body>
        <h1>Les dates en PHP</h1><hr/>
        <?php 
           /* setLocale permet de mettre une date au format français */
           setlocale(LC_TIME, 'fr_FR.UTF8'); 
           /* La date courante + la date courante avec en paramètre - 22 jours */
           echo 'Nous sommes le ' . strftime('%A %d %B %Y') . ' et il y a 22 jours, nous étions le  ' . strftime('%A %d %B %Y', strtotime('- 22 DAYS')) . '.';
        ?>
        <hr/>
        <p class="btn"><a href="../exercice7/index.php">Précédent</a></p>    
        <p class="btn"><a href="../exerciceTP/index.php">Suivant</a></p>
        <style>
            .btn{
                display: inline-block;
            }
        </style>
    </body>
</html>
