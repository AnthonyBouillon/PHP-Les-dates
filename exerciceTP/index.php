<!DOCTYPE html>
<html>
    <head>
        <title>TP</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!-- Liste déroulante de Janvier à décembre -->
        <form method="POST">
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
                for ($years = 1920; $years <= 2050; $years++) {
                    ?>
                    <!-- Il affiche les années de 1920 à 2050 -->
                    <option><?php echo $years; ?></option>
                    <?php
                };
                ?>
            </select>
            <input type="submit" value="Valider">
        </form><br/>
        <?php
        // J'assigne la valeur sélectionné dans une variable
        $month = $_POST['month'];
        $years = $_POST['years'];

        $numberDays = date("t", mktime(0, 0, 0, $month, 1, $years));
        $understood = date("w", mktime(0, 0, 0, $month, 1, $years));
        ?>        
        <p>
            <!-- Suivant la selection du mois, afficher le mois + afficher la valeur de l'année selectionné -->
            <?php
            if ($_POST['month'] == '1') {
                echo 'Janvier ' . $_POST['years'];
            } elseif ($_POST['month'] == '2') {
                echo 'Février ' . $_POST['years'];
            } elseif ($_POST['month'] == '3') {
                echo 'Mars ' . $_POST['years'];
            } elseif ($_POST['month'] == '4') {
                echo 'Avril ' . $_POST['years'];
            } elseif ($_POST['month'] == '5') {
                echo 'Mai ' . $_POST['years'];
            } elseif ($_POST['month'] == '6') {
                echo 'Juin ' . $_POST['years'];
            } elseif ($_POST['month'] == '7') {
                echo 'Juillet ' . $_POST['years'];
            } elseif ($_POST['month'] == '8') {
                echo 'Âout ' . $_POST['years'];
            } elseif ($_POST['month'] == '9') {
                echo 'Septembre ' . $_POST['years'];
            } elseif ($_POST['month'] == '10') {
                echo 'Octobre ' . $_POST['years'];
            } elseif ($_POST['month'] == '11') {
                echo 'Novembre ' . $_POST['years'];
            } elseif ($_POST['month'] == '12') {
                echo 'Décembre ' . $_POST['years'];
            }
            ?>
        </p>
        <!-- Pour afficher les jours -->
        <div>
            <?php
            $tab_jours = array(' ', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
            $numberDaysAV = date("t", mktime(0, 0, 0, ($month - 1 < 1) ? 12 : $month - 1, 1, $years));
            $numberDaysAP = date("t", mktime(0, 0, 0, ($month + 1 > 12) ? 1 : $month + 1, 1, $years));
            $tab_cal = array(array(), array(), array(), array(), array(), array());
            $understood = ($understood == 0) ? 7 : $understood;
            $t = 1;
            $p = "";
            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    if ($j + 1 == $understood && $t == 1) {
                        $tab_cal[$i][$j] = $t;
                        $t++;
                    } elseif ($t > 1 && $t <= $numberDays) {
                        $tab_cal[$i][$j] = $p . $t;
                        $t++;
                    } elseif ($t > $numberDays) {
                        $p = "*";
                        $tab_cal[$i][$j] = $p . "1";
                        $t = 2;
                    } elseif ($t == 1) {
                        $tab_cal[$i][$j] = "*" . ($numberDaysAV - ($understood - ($j + 1)) + 1);
                    }
                }
            }
            ?>
            <table>
                <tr>
                    <?php
                    for ($i = 1; $i <= 7; $i++) {
                        ?>
                        <th>
                    <?php
                    echo $tab_jours[$i];
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
    for ($j = 0; $j < 7; $j++) {
        ?> <td <?php echo (($month == date("n") && $years == date("Y") && $tab_cal[$i][$j] == date("j")) ? : null) ?>><?php echo ((strpos($tab_cal[$i][$j], "*") !== false) ? '<font color="#FFFFFF">' . str_replace("*", "", $tab_cal[$i][$j]) . '</font>' : $tab_cal[$i][$j]); ?></td><?php
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