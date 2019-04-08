<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<?php
require 'calcul_class.php';

$calcul = new Calcul();


echo "Coût du vehicule";
echo '<br />';
echo "Coût du carburant";
echo '<br />';
echo $calcul->fuel_cost($_POST{'conso'}, $_POST{'fuel_price'}, $_POST{'km'});
echo '<br />';
echo "Coût de l'essencce annuel";
echo '<br />';
echo $calcul->annual_fuel_cost($_POST{'conso'}, $_POST{'fuel_price'}, $_POST{'km'}, $_POST{'time'});
echo '<br />';
echo "Coût de l'asurance";
echo '<br />';



header('http://localhost/Calcul_vehicule/index.php');
exit();
