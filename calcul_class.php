<?php

class Calcul
{

    private $data;
    public $fl_cost;

    /**
     * Calcul constructor.
     * @param array $data
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $verif_data
     * @return string
     *
     * Permet de vérifier si mes datas ne sont pas vides
     */
    function verif($verif_data)
    {
        if (is_numeric($verif_data)) {
            return $verif_data;
        } else
            return ("<p>{$verif_data} + 'doit être un chiffre'</p>");
        /* à modifier*/
    }

    /**
     * @param $conso
     * @param $fuel_price
     * @param $total_km
     * @return bool|string
     *
     * Permet de vérifier si les 3 paramètres indispensables pour le coût total du carburant sont présents
     */
    function verif_fuel_cost($conso, $fuel_price, $total_km, $time)
    {
        if (empty($conso))
            return "<p>Veuillez indiquer la consomation du vehicule</p>";
        else if (empty($fuel_price))
            return "<p>Veuillez indiquer le prix du carburant</p>";
        else if (empty($total_km))
            return "<p>Veuillez indiquer le prix du carburant</p>";
        if (empty($time))
            return "<p>Veuillez indiquer la durée d'utilisation du véhicule</p>";
        else
            return false;
    }

    function vehi_cost($init, $sell)
    {
        if (is_numeric($init) && is_numeric($sell)) {
            $vehi_price = $init - $sell;
            return ("<p>{$vehi_price} €</p>");
        } else
            return "<p>/!\ Le prix du véhicule ainsi que son prix de revente peuvent uniquement être des nombres</p>";
    }

    /**
     * @param $conso
     * @param $fuel_price
     * @param $total_km
     * @return float|int
     *
     * Permet de calculer le coût total du carburant.
     */
    function fuel_cost($conso, $fuel_price, $total_km)
    {
        if (is_numeric($conso) && is_numeric($fuel_price) && is_numeric($total_km)) {
            $fl_cost = ((($total_km / 100) * $conso) * $fuel_price);
            return ("<p>{$fl_cost} €</p>");
        } else
            return "<p>/!\ La consomation, le prix du ccarburant ainsi que le kilometrage peuvent uniquement être des nombres.</p>";
    }

    /**
     * @param $conso
     * @param $fuel_price
     * @param $total_km
     * @param $car_y
     * @return float|int|string
     *
     * Permet de calculer le coût du carburant à l'année.
     */
    function annual_fuel_cost($conso, $fuel_price, $total_km, $car_y)
    {
        if (is_numeric($car_y) && $car_y != 0) {
            $annual_cost = (((($total_km / 100) * $conso) * $fuel_price) / $car_y);
            return ("<p>{$annual_cost} €</p>");
        } else
            return "<p> /!\ La durée d'utilisation du véhicule doit être un nombre supérieur à 0.</p>";
    }

    function assurance_cost($assurance, $car_y)
    {
        if (is_numeric($assurance) && $car_y != 0) {
            $assu_total = (($assurance) * $car_y);
            return ("<p>{$assu_total} €</p>");
        } else
            return "<p>/!\ La durée d'utilisation du véhicule doit être un nombre supérieur à 0 et le prix de l'assurance doit être un chiffre.</p>";
    }

    function assurance_annual_cost($assurance)
    {
        if (is_numeric($assurance)) {
            $assu_total = ($assurance * 12);
            return ("<p>{$assu_total} €</p>");
        } else
            return "<p>/!\ La durée d'utilisation du véhicule doit être un nombre supérieur à 0 et le prix de l'assurance doit être un chiffre.</p>";
    }

    function total_cost($init, $sell, $assurance, $car_y, $total_km, $conso, $fuel_price, $ct)
    {
        $total = ($init - $sell) + (($assurance * 12) * $car_y) + (((($total_km / 100) * $conso) * $fuel_price) + $ct);
        return "<h1>{$total} €</h1>";
    }
}