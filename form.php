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
     * @param $name
     * @param $placeholder
     * @return string
     */
    public function input($name, $placeholder)
    {
        return $this->surround('<input type="text" class="form-control" name="' . $name . '" placeholder="' . $placeholder . '" required>');
    }

    /**
     *Permet de créer un bouton
     */
    public function calculate()
    {
       return '<button type="submit" name="calculate">Calculer</button>';
        //return '<input type="submit" name="" value="Sign In">';
    }

    /**
     * @param $span
     * @return string
     */
    public function infobubble($span, $know)
    {
        return '<h3 class="infobulle"><img src="assets/pic_aide.png" alt=" ? " /><span>Cliquez ' . $span . ' pour '. $know . '</span></h3>';
    }
}