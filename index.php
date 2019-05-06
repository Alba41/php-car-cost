<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/custom-style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<body>

<?php
require 'form.php';

$form = new Form($_POST);
?>


<div class="calcul-form">
    <div class="">
        <form method="post">
        <?php
        echo "<h2>Entrez les informations concernant le véhicule:</h2>";
        echo "<p>Coût initial du véhicule</p>";
        echo $form->input('initial_cost', '€');
        echo "<p>Années depuis achat</p>";
        echo $form->input('time', 'En année');
        echo "<p>Kilometrage total de la voiture</p>";
        echo $form->input('km', 'En Km');
        echo "<p>Consommation de carburant</p>";
        echo $form->input('conso', 'Litres au 100km');
        echo "<p>Coût du carburant</p>" ;
        echo $form->infobubble('<a href="https://carbu.com/france/index.php/prixmoyens" target="_blank">ici</a>', 'connaître le prix du carburant aujourd\'hui');
        echo $form->input('fuel_price', '€ au litre');
        echo "<p>Coût de l'assurance</p>";
        echo $form->input('assurance', '€ par an');
        echo "<p>Prix de revente</p>";
        echo $form->infobubble('<a href="https://www.vendezvotrevoiture.fr/estimer-sa-voiture/" target="_blank">ici</a>', 'estimer le prix de revente de votre véhicule aujourd\'hui');
        echo $form->input('prisell', '€');
        echo "<p>Frais divers (Contrôle technique, réparations...)</p>";
        echo $form->input('ct', '€');
        echo $form->calculate();
        ?>
        </form>
    </div>
        <?php

        require 'calcul_class.php';
        $calcul = new Calcul();

        if (isset($_POST{'calculate'})) {
            echo '<div class="col-6 col-s-6">';
            echo '<div class="res">';
            echo '<h1>Estimation du coût de revient annuel du vehicule:</h1>';
            /*echo $calcul*/
            echo "<p>Coût de l'essence</p>";
            echo '<br />';
            echo $calcul->annual_fuel_cost($_POST{'conso'}, $_POST{'fuel_price'}, $_POST{'km'}, $_POST{'time'});
            echo '<br />';
            echo "<p>Coût de l'assurance</p>";
            echo '<br />';
            echo $calcul->assurance_annual_cost($_POST{'assurance'});
            echo "<h2>Coût total: </h2>";
            echo $calcul->total_cost($_POST{'initial_cost'}, $_POST{'prisell'}, $_POST{'assurance'}, $_POST{'time'}, $_POST{'km'}, $_POST{'conso'}, $_POST{'fuel_price'}, $_POST{'ct'});
            echo "<p>Coût du vehicule</p>";
            echo '<br />';
            echo $calcul->vehi_cost($_POST{'initial_cost'}, $_POST{'prisell'});
            echo '<br />';
            echo "<p>Coût du carburant</p>";
            echo '<br />';
            echo $calcul->fuel_cost($_POST{'conso'}, $_POST{'fuel_price'}, $_POST{'km'});
            echo '<br />';
            echo "<p>Coût de l'assurance</p>";
            echo '<br />';
            echo $calcul->assurance_cost($_POST{'assurance'}, $_POST{'time'});
            echo '<br />';
            echo '</div>';
            echo '</div>';
        }
        ?>
</div>
</body>
</html>