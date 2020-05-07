<?php

class Personnage
{

    public $name;
    public $vie;
    public $atak;

    public function __construct($name, $vie, $atak)
    {
        $this->name = $name;
        $this->vie = $vie;
        $this->atak = $atak;

    }

    public function setVie()
    {
       return $this->vie = 100;
    }

    public function regenerate($vie = null)
    {
        $this->vie = $this->vie + $vie;
    }

    public function dead()
    {
        return $this->vie <= 0;
    }

    public function atak($target)
    {
        $target->vie = $target->vie - $this->atak;

    }

}

$Ashsoka = new Personnage('Ashoka', '100', '17');
$Revan = new Personnage('Revan', '100', '19');
$Yoda = new Personnage('Yoda', '100', '15');