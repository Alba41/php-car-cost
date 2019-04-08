<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>

<?php
require 'form.php';


$form = new Form($_POST);
?>

<form action="calcul.php" method="post">
    <?php
    echo "<h2>Entrez les informations concernant le véhicule:</h2>";
    echo "Coût initial du véhicule (€)";
    echo $form->input('initial_cost');
    echo "Durée d'utilisation (en année)";
    echo $form->input('time');
    echo "Kilometrage total de la voiture (Km)";
    echo $form->input('km');
    echo "Consommation de carburant du véhicule (Litres au 100km)";
    echo $form->input('conso');
    echo "Prix du carburant (€ au Litre)";
    echo $form->input('fuel_price');
    echo "Assurance";
    echo $form->input('assurance');
    echo "prix de revente";
    echo $form->input('Prix de revente estimée');
    echo "Contrôle technique";
    echo $form->input('CT');
    echo $form->calculate();
    ?>
</form>