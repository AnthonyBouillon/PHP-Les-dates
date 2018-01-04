<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Calendrier</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!-- Liste déroulante de Janvier à décembre -->
        <form method="post">
            <select name="month">
                <option value="1">Janvier</option>
                <option value="2">Février</option>
                <option value="3">Mars</option>
                <option value="4">Avril</option>
                <option value="5">Mai</option>
                <option value="6">Juin</option>
                <option value="7">Juillet</option>
                <option value="8">Août</option>
                <option value="9">Séptembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
            </select>
            <!-- Liste déroulante des années, il incrémente de 1920 à 2050 -->
            <select name="years">
                <?php
                for ($year = 1920; $year <= 2050; $year++) {
                 ?>
                    <!-- Il affiche les années de 1920 à 2050 dans un select -->
                    <option><?php echo $year; ?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Valider">
        </form><br/>
        <?php
        // J'assigne la valeur récupérer du mois et de l'année dans une variable
        $month = $_POST['month'];
        $years = $_POST['years'];
        $numberDays = date("t", mktime(0, 0, 0, $month, 1, $years));
        ?>        
        <p>
            <!-- Suivant la value du mois dans le select, afficher le mois + afficher la valeur de l'année selectionné -->
            <?php
            if ($month == '1') {
                echo 'Janvier ' . $years;
            } elseif ($month == '2') {
                echo 'Février ' . $years;
            } elseif ($month == '3') {
                echo 'Mars ' . $years;
            } elseif ($month == '4') {
                echo 'Avril ' . $years;
            } elseif ($month == '5') {
                echo 'Mai ' . $years;
            } elseif ($month == '6') {
                echo 'Juin ' . $years;
            } elseif ($month == '7') {
                echo 'Juillet ' . $years;
            } elseif ($month == '8') {
                echo 'Âout ' . $years;
            } elseif ($month == '9') {
                echo 'Septembre ' . $years;
            } elseif ($month == '10') {
                echo 'Octobre ' . $years;
            } elseif ($month == '11') {
                echo 'Novembre ' . $years;
            } elseif ($month == '12') {
                echo 'Décembre ' . $years;
            }
            ?>
        </p>
        <!-- Pour afficher les jours -->
        <div>
            <?php
            /* Ajouter les jours de la semaine dans un tableau */
            $tab_jours = array(' ', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
            /* PARTIE INCOMPREHENSIBLE */
            $week = ($week == 0) ? 7 : $week;
            $t = 1;
            for ($i = 0; $i < 6; $i++) {
                for ($days = 0; $days < 7; $days++) {
                    if ($days + 1 == $week && $t == 1) {
                        $tab_cal[$i][$days] = $t;
                        $t++;
                    } elseif ($t > 1 && $t <= $numberDays) {
                        $tab_cal[$i][$days] = $p . $t;
                        $t++;
                    } elseif ($t > $numberDays) {
                        $p = "*";
                        $tab_cal[$i][$days] = $p . "1";
                        $t = 2;
                    } elseif ($t == 1) {
                        $tab_cal[$i][$days] = "*" . ($numberDaysAV - ($week - ($days + 1)) + 1);
                    }
                }
            }
            ?>
            <table>
                <tr>
                    <?php
                    for ($days = 1; $days <= 7; $days++) {
                        ?>
                        <th>
                            <?php
                            echo $tab_jours[$days];
                            ?>
                        </th>
                        <?php
                    }
                    ?>    
                </tr>
                <?php
                for ($i = 0; $i < 6; $i++) {
                    ?>
                    <tr>
                        <?php
                        for ($days = 0; $days < 7; $days++) {
                            ?> <td <?= (($month == date("n") && $years == date("Y") && $tab_cal[$i][$days] == date("j")) ?: null) ?>><?php echo ((strpos($tab_cal[$i][$days], "*") !== false) ? '<font color="#FFFFFF">' . str_replace("*", "", $tab_cal[$i][$days]) . '</font>' : $tab_cal[$i][$days]); ?></td><?php
                        }
                        ?>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>
