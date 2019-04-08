<?php

class Form
{

    private $data;

    public $surround = 'p';

    public $color = "warning";

    public $disabled = false;

    /**
     * Form constructor.
     * @param array $data
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $html
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param $total_cost
     * @return string
     *
     * Permet de créer un cadre de texte
     */
    public function input($total_cost)
    {
        return $this->surround('<input type="text" class="form-control" name="' . $total_cost . '">');
    }

    /**
     *Permet de créer un bouton
     */
    public function calculate()
    {
        return '<button type ="submit" class="btn btn-dark" >Calculer</button>';
    }
}