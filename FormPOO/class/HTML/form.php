<?php

namespace Tutoriel\HTML;
/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{
    protected $data;
    /**
     * @var string Tag pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le form
     */

    public function __construct($data){
        $this->data = $data;
    }

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */

    protected function surround($html){
        return "<" . $this->surround . ">" . $html . "</" . $this->surround . ">";
    }

    /**
     * @param $index string Index de la valeur a recuperer
     * @return string
     */

    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */

    public function input($name){
        return $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @return string
     */

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}