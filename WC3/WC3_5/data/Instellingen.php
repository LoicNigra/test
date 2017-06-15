<?php
class Instellingen {
    public $taalkeuze;
    public $bezoekersnaam;
    public $achtergrondkleur;
    public $tijdszone;

    public function __construct($taalkeuze, $bezoekersnaam, $achtergrondkleur, $tijdszone) {
        $this->taalkeuze = $taalkeuze;
        $this->bezoekersnaam = $bezoekersnaam;
        $this->achtergrondkleur = $achtergrondkleur;
        $this->tijdszone = $tijdszone;
    }

}
