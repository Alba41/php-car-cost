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
            return ("{$verif_data} + 'doit être un chiffre'");
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
            return "Veuillez indiquer la consomation dud vehicule";
        else if (empty($fuel_price))
            return "Veuillez indiquer le prix du carburant";
        else if (empty($total_km))
            return "Veuillez indiquer le prix du carburant";
        if (empty($time))
            return "Veuillez indiquer la durée d'utilisation du véhicule";
        else
            return false;
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
            return $fl_cost;
        } else
            return "La consomation, le prix du ccarburant ainsi que le kilometrage peuvent uniquement être des nombres.";
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
        if (is_numeric($car_y)) {
            $annual_cost = ($this->fuel_cost($conso, $fuel_price, $total_km) / $car_y);
            return $annual_cost;
        } else
            return "La durée d'utilisation du véhicule doit être un nombre.";
    }


    function total_cost()
    {

    }
}